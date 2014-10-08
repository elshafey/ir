<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Branches extends CI_Model {

    var $name;
    var $address;

    function __construct() {
        parent::__construct();
    }

    function update_model($data, $id = '') {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
        if ($id) {
            $this->db->update('branches', $this, array('id' => $id));
        } else {
            $this->db->insert('branches', $this);
        }
    }
    
    function get_all(){
        $query=$this->db->get('branches');
        
        return $query->result();
    }
    function get_one_by_id($id){
        $query= $this->db->get_where('branches', array('id'=>$id));
        
        return get_object_vars(array_shift($query->result()));
    }
    function process_form($id = '') {
        $this->form_validation->set_error_delimiters('<span class="frm_error_msg">', '</span>');
        $this->form_validation->set_rules("name", "", "required|xss_clean");
        $this->form_validation->set_rules("address", "", "required|xss_clean");

        if ($this->form_validation->run()) {
            $this->update_model($_POST, $id);
            return TRUE;
        }

        return FALSE;
    }
}
