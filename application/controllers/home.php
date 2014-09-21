<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
  | -------------------------------------------------------------------
  | Dashboard Controller
  | -------------------------------------------------------------------
  | This file represent dashboard controller class extending asfour controller class.
  | This class is responsible for displaying the available functionality in the module.
 */

class Home extends My_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('users');
    }
    
    function index(){
//        $this->template->write_view('content', 'signin_view', $this->data, FALSE);
        $this->template->render();
    }
    
    function busines_card($id=''){
        if (get_user_type() == 2 || $id == '') {
            $id = get_user_id();
        }
        
        if(!$_POST){
            $_POST=  $this->users->get_user_by_id($id);
        }
        $this->data['page_title']='Custom Busines Card';
        $this->template->write_view('content', 'home/business-card', $this->data, FALSE);
        $this->template->render();
    }
            
    function preview(){
        
        $this->load->view('preview');
    }

}

/* End of file: dashboard.php */
/* Location: ./application/core/dashboard.php */