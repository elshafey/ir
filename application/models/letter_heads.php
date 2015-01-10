<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'application/models/templates_model.php';

class Letter_heads extends Templates_model {

    function get_model_name() {
        return 'letter_heads';
    }

    function process_form($id = '') {
        $this->form_validation->set_error_delimiters('<span class="frm_error_msg">', '</span>');
        $this->form_validation->set_rules("tel", "", "required|xss_clean");
        $this->form_validation->set_rules("city", "", "required|xss_clean");
        $this->form_validation->set_rules("fax", "", "required|xss_clean");
        $this->form_validation->set_rules("email", "", "required|valid_email|_unique[$id]|ss_clean");
        $this->form_validation->set_rules("country", "", "required|xss_clean");
        $this->form_validation->set_rules("address", "", "required|xss_clean");
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
