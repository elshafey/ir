<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once 'application/controllers/template_conroller.php';

class Compliment extends Template_conroller {

    var $view = 'compliments';
    var $controller = 'compliment';
    var $model = 'compliments';
    var $titles = array();

    public function __construct() {
        parent::__construct();
        $this->titles = array(
            'index' => 'Custom Compliments List',
            'create' => 'Create New Compliment Template',
            'preview' => 'Preview compliment Template',
        );
    }

    function pdf($type = 'preview') {
        $this->data['type'] = $type;
        $this->load->view('compliments/pdf', $this->data);
    }

    protected function generate() {

        $url = site_url() . 'compliment/pdf/export?' . http_build_query($_POST);
        $name = md5(date('ymdHis'));
        $dir = $this->config->item('static_path');
        if ($_POST['action_type'] == 'convert_img') {
            $command = 'xvfb-run -a -s "-screen 0 1366x768x24" wkhtmltoimage --quality 100 --height 1219 --width 2551 "' . $url . '"   "' . $dir . 'uploads/business-cards/' . $name . '.png"';
//            echo $command;exit;
            if (shell_exec($command)) {
                // set HTTP response headers
                header("Content-Type: image/png");
                header("Cache-Control: max-age=0");
                header("Accept-Ranges: none");
                header("Content-Disposition: attachment; filename=\"$name.png\"");
//                header('Location: ' . site_url() . 'uploads/business-cards/' . $name . '.png');
                echo file_get_contents('uploads/business-cards/' . $name . '.png');
            }
        } else {
            $command = 'xvfb-run -a -s "-screen 0 1366x768x24" wkhtmltopdf --dpi 300 --page-width 210 --page-height 100.37 --margin-top 0 --margin-bottom 0 --margin-left 0 --margin-right 0 "' . $url . '"   "' . $dir . 'uploads/business-cards/' . $name . '.pdf"';
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

}
