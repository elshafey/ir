<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Templates_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }

    function get_model_name() {
        
    }

    function update_model($data, $id = '') {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
        if ($id) {
            $this->modified_at = date('ymdHis');
            $this->modified_by = get_user_id();
            $this->db->update($this->get_model_name(), $this, array('id' => $id));
        } else {
            $this->db->insert($this->get_model_name(), $this);
        }
    }

    function get_all() {
        $db = $this->db
                ->from('users u')
                ->join($this->get_model_name()." b", 'b.created_by=u.id', 'inner')
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
                ->from($this->get_model_name()." b")
                ->select('count(*) as count');
        if (!is_super_admin()) {
            $db->where('b.branch_id', get_branch_id());
        }
        $query = $db->get();
        $result = ($query->result());
        return $result[0]->count;
    }

    function get_one_by_id($id) {
        $db = $this->db
                ->from('users u')
                ->join($this->get_model_name()." b", 'b.created_by=u.id', 'inner')
                ->join('branches br', 'br.id=b.branch_id', 'inner')
                ->join('languages l', 'l.id=b.language_id', 'inner')
                ->select('b.*,u.name as user,br.name as branch,l.name as language');
        $db->where('b.id', $id);
        $query = $db->get();

        return get_object_vars(array_shift($query->result()));
    }

    function process_form($id = '') {
        
    }

}
