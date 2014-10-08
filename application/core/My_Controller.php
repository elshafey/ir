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

    protected function generate($url) {

//        $url = site_url().'home/preview' . '?' . http_build_query($this->users->get_user_by_id(get_user_id()));
        $name = md5(date('ymdHis'));
        if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
            $dir = $this->config->item('static_path');
            if (shell_exec('xvfb-run -a wkhtmltopdf "' . $url . '"   "' . $dir . 'uploads/business-cards/' . $name . '.pdf"')) {
                // set HTTP response headers
                header("Content-Type: application/pdf");
                header("Cache-Control: max-age=0");
                header("Accept-Ranges: none");
                header("Content-Disposition: attachment; filename=\"$name.pdf\"");
//                header('Location: ' . site_url() . 'uploads/business-cards/' . $name . '.pdf');
                echo file_get_contents('uploads/business-cards/' . $name . '.pdf');
            }
        } else {
            require 'application/libraries/pdfcrowd.php';

            try {
                // create an API client instance
                $client = new Pdfcrowd("elshafey", "1386e8072e4b1bc2b82e6f3a8a166205");

                // convert a web page and store the generated PDF into a $pdf variable
                $pdf = $client->convertURI($url);

                // set HTTP response headers
                header("Content-Type: application/pdf");
                header("Cache-Control: max-age=0");
                header("Accept-Ranges: none");
                header("Content-Disposition: attachment; filename=\"$name.pdf\"");

                // send the generated PDF 
                echo $pdf;
            } catch (PdfcrowdException $why) {
                echo "Pdfcrowd Error: " . $why;
            }
        }
    }

}

/* End of file: My_Controller */
/* Location: ./application/core/My_Controller.php */
