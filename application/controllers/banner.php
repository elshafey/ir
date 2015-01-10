<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once 'application/controllers/template_conroller.php';

class Banner extends Template_conroller {

    var $view = 'banners';
    var $controller = 'banner';
    var $model = 'banners';
    var $titles = array();

    public function __construct() {
        parent::__construct();
        $this->titles = array(
            'index' => 'Custom Banners List',
            'create' => 'Create New Banner Template',
            'preview' => 'Preview Banner Template',
        );
        $this->load->model('banners');
    }

    function pdf($type = 'preview') {
        $this->data['type'] = $type;
        $this->load->view('banners/pdf', $this->data);
    }

    protected function generate() {

        $url = site_url().'banner/pdf/export?'.http_build_query($_POST);
        $name = md5(date('ymdHis'));
        $dir = $this->config->item('static_path');
        if($_POST['type']==BANNERS_TYPE_WIDE){
            $size='--page-width 2000 --page-height 1101';
        }elseif ($_POST['type']==BANNERS_TYPE_PULLUP) {
            $size='--page-width 800 --page-height 2100';
        }
        $command = 'xvfb-run -a -s "-screen 0 1366x768x24" wkhtmltopdf --dpi 300 '.$size.' --margin-top 0 --margin-bottom 0 --margin-left 0 --margin-right 0 "' . $url . '"   "' . $dir . 'uploads/business-cards/' . $name . '.pdf"';
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
