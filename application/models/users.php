<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Users extends CI_Model {

    var $name_en;
    var $name_ar;
    var $title_en;
    var $title_ar;
    var $tel;
    var $direct;
    var $web;
    var $fax;
    var $email;
    var $charity;

    function __construct() {
        parent::__construct();
    }

    function update_mode($data, $id = '') {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
        if ($id) {
            $this->db->update('users', $this, array('id' => $id));
        } else {
            $this->db->insert('users', $this);
        }
    }
    
    function get_all(){
        $query=$this->db->get('users');
        
        return $query->result();
    }


    /**
     * 
     * @param string $email
     * @return Users
     */
    function get_user_by_email($email){
        $query= $this->db->get_where('users', array('email'=>$email));
        
        return array_shift($query->result());
    }
    
    function get_user_by_id($id){
        $query= $this->db->get_where('users', array('id'=>$id));
        
        return get_object_vars(array_shift($query->result()));
    }
            
    function login($data){
        
        $user=  $this->get_user_by_email($data['email']);
        if($user&&  md5($_POST['password'])){
            add_user_data(get_object_vars($user));
            return TRUE;
        }
        return FALSE;
    }
}
