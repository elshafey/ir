<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once 'application/controllers/template_conroller.php';

class Letter_head extends Template_conroller {

    var $view = 'letter_heads';
    var $controller = 'letter_head';
    var $model = 'letter_heads';
    var $titles = array();

    public function __construct() {
        parent::__construct();
        $this->titles = array(
            'index' => 'Custom Letter Head List',
            'create' => 'Create New Letter Head Template',
            'preview' => 'Preview Letter Head Template',
        );
        $this->load->model('letter_heads');
    }

    function pdf($type = 'preview') {
        $this->data['type'] = $type;
        switch ($_REQUEST['language_id']) {
            case 2:
                $this->load->view('letter_heads/pdf-ar', $this->data);
                break;
            default:
                $this->load->view('letter_heads/pdf', $this->data);
                break;
        }
    }

    protected function generate() {

        $url = site_url() . 'letter_head/pdf/export?' . http_build_query($_POST);
        $name = md5(date('ymdHis'));
        $dir = $this->config->item('static_path');
        if ($_POST['action_type'] == 'convert_img') {
            $command = 'xvfb-run -a -s "-screen 0 1366x768x24" wkhtmltoimage --quality 100 --width 2554 --height 3579 "' . $url . '"   "' . $dir . 'uploads/business-cards/' . $name . '.png"';
//            echo $command;exit;
            if (shell_exec($command)) {
                // set HTTP response headers
                header("Content-Type: image/png");
                header("Cache-Control: max-age=0");
                header("Accept-Ranges: none");
                header("Content-Disposition: attachment; filename=\"$name.png\"");
//                header('Location: ' . site_url() . 'uploads/business-cards/' . $name . '.pdf');
                echo file_get_contents('uploads/business-cards/' . $name . '.png');
            }
        } else {
            $command = 'xvfb-run -a -s "-screen 0 1366x768x24" wkhtmltopdf --dpi 300 --page-width 210 --page-height '.($_REQUEST['language_id']==2? '293.5':'294').' --margin-top 0 --margin-bottom 0 --margin-left 0 --margin-right 0 "' . $url . '"   "' . $dir . 'uploads/business-cards/' . $name . '.pdf"';
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
