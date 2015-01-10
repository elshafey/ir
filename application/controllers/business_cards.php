<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once 'application/controllers/template_conroller.php';

class Business_cards extends Template_conroller {

    var $view = 'businesscards';
    var $controller = 'business_cards';
    var $model = 'businesscards';
    var $titles = array();

    public function __construct() {
        parent::__construct();
        $this->titles = array(
            'index' => 'Custom Business Cards List',
            'create' => 'Create New Business Card Template',
            'preview' => 'Preview Business Card Template',
        );
    }

    function pdf($type = 'preview') {
        $this->data['type'] = $type;
        $this->load->view('businesscards/pdf', $this->data);
    }

    protected function generate() {

        $url = site_url().'business_cards/pdf/export?'.http_build_query($_POST);
        $name = md5(date('ymdHis'));
        $dir = $this->config->item('static_path');
        $command = 'xvfb-run -a -s "-screen 0 1366x768x24" wkhtmltopdf --dpi 300 --page-width 91 --page-height 60.506 --margin-top 0 --margin-bottom 0 --margin-left 0 --margin-right 0 "' . $url . '"   "' . $dir . 'uploads/business-cards/' . $name . '.pdf"';
//            echo $command;exit;
        if (shell_exec($command)) {
            // set HTTP response headers
            header("Content-Type: application/pdf");
            header("Cache-Control: max-age=0");
            header("Accept-Ranges: none");
            header("Content-Disposition: attachment; filename=\"$name.pdf\"");
//                header('Location: ' . site_url() . 'uploads/business-cards/' . $name . '.pdf');
            echo file_get_contents('uploads/business-cards/' . $name . '.pdf');
        }
    }
}
