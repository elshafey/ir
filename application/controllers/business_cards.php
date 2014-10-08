<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Business_cards extends My_Controller {

    public function __construct() {
        parent::__construct();
        $this->template->write_view('side_menu', 'businesscards/side_menu');
    }

    function index() {

        $this->data['businesscards'] = $this->businesscards->get_all();
        $this->data['page_title'] = 'Custom Business Cards List';
        $this->template->add_css('layout/css/admin/jquery.dataTables.css');
        $this->template->add_js('layout/js/jquery/jquery.dataTables.min.js');
        $this->template->write_view('content', 'businesscards/list', $this->data, FALSE);
        $this->template->render();
    }

    function create() {
        $this->data['page_title'] = 'Create New Business Card Template';
        if ($_POST) {
            $_POST['created_by'] = get_user_id();
            $_POST['modified_by'] = get_user_id();
            $_POST['created_at'] = date('ymdHis');
            $_POST['modified_at'] = date('ymdHis');
            if (!is_super_admin()) {
                $_POST['branch_id'] = get_branch_id();
            }
            if ($this->businesscards->process_form()) {
                $message = array(
                    'msg_type' => 'success',
                    'msg_text' => 'Template has been added successfully.'
                );

                $this->session->set_flashdata("message", $message);
                redirect('/business_cards');
            }
        }

        $this->template->write_view('content', 'businesscards/create', $this->data, FALSE);
        $this->template->render();
    }

    function preview($id) {
        $this->data['page_title'] = 'Preview Business Card Template';

        if ($_POST) {
            switch ($_POST['action_type']) {
                case 'preview':
                    unset($this->form_validation);
                    break;
                case 'convert':
                    $this->generate(site_url().'business_cards/pdf/export?'.http_build_query($_POST));
                    break;
                default:
                    unset($_POST['action_type']);
                    if ($this->businesscards->process_form($id)) {
                        $message = array(
                            'msg_type' => 'success',
                            'msg_text' => 'Template has been edited successfully.'
                        );

                        $this->session->set_flashdata("message", $message);
                        redirect('/business_cards');
                    }
                    break;
            }
        } else {
            unset($this->form_validation);
            $_POST = $this->businesscards->get_one_by_id($id);
        }

        $this->template->write_view('content', 'businesscards/preview', $this->data, FALSE);
        $this->template->render();
    }
    
    function export_pdf(){
        
    }
    
    function pdf($type='preview'){
        $this->data['type']=$type;
        $this->load->view('businesscards/pdf',  $this->data);
    }

}
