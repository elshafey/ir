<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Template_conroller extends My_Controller {

    var $view;
    var $controller;
    var $model;
    var $titles=array();
    public function __construct() {
        parent::__construct();
        $this->load->model('compliments');
    }

    function index() {

        $this->data[$this->model] = $this->{$this->model}->get_all();
        $this->data['page_title'] = $this->titles['index'];
        $this->template->add_css('layout/css/admin/jquery.dataTables.css');
        $this->template->add_js('layout/js/jquery/jquery.dataTables.min.js');
        $this->template->write_view('side_menu', "{$this->view}/side_menu");
        $this->template->write_view('content', "{$this->view}/list", $this->data, FALSE);
        $this->template->render();
    }
    
    function choose_template() {
        $this->data['templates_count']=  $this->{$this->model}->get_count();
        $this->data['page_title'] = 'Manage Templates';
        $this->template->write_view('side_menu', "businesscards/side_menu_main");
        $this->template->write_view('content', "{$this->view}/business_cards_templates", $this->data, FALSE);
        $this->template->render();
    }

    function create() {
        $this->data['page_title'] = $this->titles['create'];
        if ($_POST) {
            $_POST['created_by'] = get_user_id();
            $_POST['modified_by'] = get_user_id();
            $_POST['created_at'] = date('ymdHis');
            $_POST['modified_at'] = date('ymdHis');
            if (!is_super_admin()) {
                $_POST['branch_id'] = get_branch_id();
            }
            if ($this->{$this->model}->process_form()) {
                $message = array(
                    'msg_type' => 'success',
                    'msg_text' => 'Template has been added successfully.'
                );

                $this->session->set_flashdata("message", $message);
                redirect("/{$this->controller}");
            }
        }

        $this->template->write_view('side_menu', "{$this->view}/side_menu");
        $this->template->write_view('content', "{$this->view}/create", $this->data, FALSE);
        $this->template->render();
    }

    function preview($id) {
        $this->data['page_title'] = $this->titles['preview'];

        if ($_POST) {
            switch ($_POST['action_type']) {
                case 'preview':
                    unset($this->form_validation);
                    break;
                case 'convert':
                    $this->generate();
                    break;
                default:
                    unset($_POST['action_type']);
                    if ($this->{$this->model}->process_form($id)) {
                        $message = array(
                            'msg_type' => 'success',
                            'msg_text' => 'Template has been edited successfully.'
                        );

                        $this->session->set_flashdata("message", $message);
                        redirect("/{$this->controller}");
                    }
                    break;
            }
        } else {
            unset($this->form_validation);
            $_POST = $this->{$this->model}->get_one_by_id($id);
        }

        $this->template->write_view('side_menu', "{$this->view}/side_menu");
        $this->template->write_view('content', "{$this->view}/preview", $this->data, FALSE);
        $this->template->render();
    }

    protected function generate(){
        
    }
}
