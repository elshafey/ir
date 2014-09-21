<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @property Users $users
 * 
 */
class Accounts extends My_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('users');
    }

    function index() {
        if (get_user_type() == 2 ) {
            redirect('/');
        }
        $this->data['users']=  $this->users->get_all();
        $this->data['page_title'] = lang('accounts_list_page_title');
        $this->template->add_css('layout/css/admin/jquery.dataTables.css');
        $this->template->add_js('layout/js/jquery/datatables.min.js');
        $this->template->write_view('content', 'accounts/list', $this->data, FALSE);
        $this->template->render();
    }

    function create() {
        if (get_user_type() == 2 ) {
            redirect('/');
        }
        $this->data['page_title'] = lang('accounts_create_page_title');
        if ($_POST) {
            $_POST['password'] = md5('admin');
            if ($this->process_form()) {
                $message = array(
                    'msg_type' => 'success',
                    'msg_text' => lang('global_accounts_create_success_msg')
                );

                $this->session->set_flashdata("message", $message);
                redirect('/accounts');
            }
        }
        $this->template->write_view('content', 'accounts/create', $this->data, FALSE);
        $this->template->render();
    }

    function edit($id = '') {
        if (get_user_type() == 2 || $id == '') {
            $id = get_user_id();
        }
        if ($_POST) {
            if ($this->process_form($id)) {
                $message = array(
                    'msg_type' => 'success',
                    'msg_text' => lang('global_accounts_edit_success_msg')
                );

                $this->session->set_flashdata("message", $message);
                redirect('/accounts');
            }
        }else{
            unset($this->form_validation);
            $_POST=  $this->users->get_user_by_id($id);
        }
        
        $this->template->write_view('content', 'accounts/create', $this->data, FALSE);
        $this->template->render();
    }

    function process_form($id = '') {
        $this->form_validation->set_error_delimiters('<span class="frm_error_msg">', '</span>');
        $this->form_validation->set_rules("name_en", "", "required|xss_clean");
        $this->form_validation->set_rules("title_en", "", "required|xss_clean");
        $this->form_validation->set_rules("name_ar", "", "required|xss_clean");
        $this->form_validation->set_rules("title_ar", "", "required|xss_clean");
        $this->form_validation->set_rules("tel", "", "required|xss_clean");
        $this->form_validation->set_rules("direct", "", "required|xss_clean");
        $this->form_validation->set_rules("fax", "", "required|xss_clean");
        $this->form_validation->set_rules("email", "", "required|valid_email|_unique[$id]|ss_clean");
        $this->form_validation->set_rules("web", "", "required|xss_clean");
        $this->form_validation->set_rules("charity", "", "required|xss_clean");

        if ($this->form_validation->run()) {
            $this->users->update_mode($_POST, $id);
            return TRUE;
        }

        return FALSE;
    }

    function login() {
        if (is_logged_in()) {
            redirect('/');
        }
        $this->data['page_title'] = lang('accounts_login_page_title');
        if ($_POST && $this->users->login($_POST)) {
            redirect('/');
        } elseif ($_POST && !$this->users->login($_POST)) {
//            pre_print($_POST);
            $message = array(
                'msg_type' => 'error',
                'msg_text' => lang('global_accounts_login_invalid_info')
            );

            $this->session->set_flashdata("message", $message);
            redirect('/signin');
        }
        $this->template->write_view('content', 'accounts/login', $this->data);
        $this->template->render();
    }

    function password(){
        $this->data['page_title']=lang('accounts_password_page_title');
        if($_POST){
            $this->form_validation->set_error_delimiters('<span class="frm_error_msg">', '</span>');
            $this->form_validation->set_rules("password", "", "required|xss_clean");
            if ($this->form_validation->run()) {
                $this->users->db->update('users',array('password'=>  md5($_POST['password'])),array('id'=>  get_user_id()));
                $message = array(
                'msg_type' => 'success',
                'msg_text' => 'Password Updated Successfully!'
            );

            $this->session->set_flashdata("message", $message);
            redirect('/');
            }
        }
        $this->template->write_view('content', 'accounts/password', $this->data, FALSE);
        $this->template->render();
    }
}

/* End of file: dashboard.php */
/* Location: ./application/core/dashboard.php */