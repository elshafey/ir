<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'application/models/templates_model.php';
class Banners extends Templates_model {

    function get_model_name() {
        return 'banners';
    }
            function process_form($id = '') {
        $this->form_validation->set_error_delimiters('<span class="frm_error_msg">', '</span>');
        $this->form_validation->set_rules("main_title", "", "required|xss_clean");
        $this->form_validation->set_rules("sub_title", "", "required|xss_clean");
        $this->form_validation->set_rules("type", "", "required|xss_clean");
        $this->form_validation->set_rules("template_name", "", "required|xss_clean");
        $this->form_validation->set_rules("language_id", "", "required|xss_clean");
        $this->form_validation->set_rules("branch_id", "", "required|xss_clean");

        if ($this->form_validation->run()) {
            $this->update_model($_POST, $id);
            return TRUE;
        }

        return FALSE;
    }

}
