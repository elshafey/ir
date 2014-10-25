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

    function index() {
        $this->template->write_view('side_menu', 'dashboard/side_menu');
        $this->template->write_view('content', 'dashboard/dashboard', $this->data, FALSE);
        $this->template->render();
    }

    function busines_card($id = '') {
        redirect('home/generate');
        if (get_user_type() == 2 || $id == '') {
            $id = get_user_id();
        }

        if (!$_POST) {
            $_POST = $this->users->get_user_by_id($id);
        }
        $this->data['page_title'] = 'Custom Busines Card';
        $this->template->write_view('content', 'home/business-card', $this->data, FALSE);
        $this->template->render();
    }

    function preview() {

        $this->load->view('preview');
    }

    function generate() {

        $url = site_url().'home/preview' . '?' . http_build_query($this->users->get_user_by_id(get_user_id()));
        $name = md5(date('ymdHis'));
        if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
            $dir=  $this->config->item('static_path');
            if (shell_exec('xvfb-run -a wkhtmltopdf "' . $url . '"   "' . $dir . 'uploads/business-cards/' . $name . '.pdf"')) {
                header('Location: ' . site_url() . 'uploads/business-cards/' . $name . '.pdf');
            }
            exit;
        }
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

/* End of file: dashboard.php */
/* Location: ./application/core/dashboard.php */    