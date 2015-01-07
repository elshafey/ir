<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Businesscards extends CI_Model {

    var $name;
    var $title;
    var $address;
    var $language_id;
    var $branch_id;
    var $template_name;
    var $tel;
    var $direct;
    var $web;
    var $fax;
    var $email;
    var $charity;
//    var $created_by;
    var $modified_by;
//    var $created_at;
    var $modified_at;

    function __construct() {
        parent::__construct();
    }

    function update_model($data, $id = '') {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
        if ($id) {
            $this->modified_at = date('ymdHis');
            $this->modified_by = get_user_id();
            $this->db->update('businesscards', $this, array('id' => $id));
        } else {
            $this->db->insert('businesscards', $this);
        }
    }

    function get_all() {
        $db = $this->db
                ->from('users u')
                ->join('businesscards b', 'b.created_by=u.id', 'inner')
                ->join('branches br', 'br.id=b.branch_id', 'inner')
                ->join('languages l', 'l.id=b.language_id', 'inner')
                ->select('b.*,u.name as user,br.name as branch,l.name as language');
        if (!is_super_admin()) {
            $db->where('b.branch_id', get_branch_id());
        }
        $query = $db->get();
        return $query->result();
    }

    function get_count() {
        $db = $this->db
                ->from('businesscards b')
                ->select('count(*) as count');
        if (!is_super_admin()) {
            $db->where('b.branch_id', get_branch_id());
        }
        $query = $db->get();
        $result=($query->result());
        return $result[0]->count;
    }

    function get_one_by_id($id) {
        $db = $this->db
                ->from('users u')
                ->join('businesscards b', 'b.created_by=u.id', 'inner')
                ->join('branches br', 'br.id=b.branch_id', 'inner')
                ->join('languages l', 'l.id=b.language_id', 'inner')
                ->select('b.*,u.name as user,br.name as branch,l.name as language');
        $db->where('b.id', $id);
        $query = $db->get();

        return get_object_vars(array_shift($query->result()));
    }

    function process_form($id = '') {
        $this->form_validation->set_error_delimiters('<span class="frm_error_msg">', '</span>');
        $this->form_validation->set_rules("name", "", "required|xss_clean");
        $this->form_validation->set_rules("title", "", "required|xss_clean");
        $this->form_validation->set_rules("tel", "", "required|xss_clean");
        $this->form_validation->set_rules("direct", "", "required|xss_clean");
        $this->form_validation->set_rules("fax", "", "required|xss_clean");
        $this->form_validation->set_rules("email", "", "required|valid_email|_unique[$id]|ss_clean");
        $this->form_validation->set_rules("web", "", "required|xss_clean");
        $this->form_validation->set_rules("charity", "", "required|xss_clean");
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
