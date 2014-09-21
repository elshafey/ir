<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| Account Helper
| -------------------------------------------------------------------
| This file help to understand information about user accessing the system.
|
| The file contains functions to know information about user such as if logged
| in or not, user name, user type ... etc.
*/

/**
 * Is Logged In - Return boolean true or false indicating user logged or not
*/
function is_logged_in()
{
    //Get current instance
    $CI =& get_instance();
    //Read user data from session
    $user_data = $CI->session->userdata('user_data');
    //Return locale session
    return $user_data['user_is_logged'];
}

/**
 * Get User Name - Return user name for saying welcome!
*/
function get_user_name()
{
    //Get current instance
    $CI =& get_instance();
    //Read user data from session
    $user_data = $CI->session->userdata('user_data');
    //Return locale session
    return $user_data['user_name'];
}

/**
 * Get User Type - Return user type for preparing appropriat functionality
 * and navigation links through out the entire module
*/
function get_user_type()
{
    //Get current instance
    $CI =& get_instance();
    //Read user data from session
    $user_data = $CI->session->userdata('user_data');
    //Return locale session
    return $user_data['user_type'];
}

/**
 * Get if user has switched from admin
*/
function get_switch_status()
{
    //Get current instance
    $CI =& get_instance();
    //Read user data from session
    $user_data = $CI->session->userdata('user_data');
    //Return locale session
    return $user_data['user_is_switched'];
}
/**
 * Get User ID - Return user ID for using it later
*/
function get_user_id()
{
    //Get current instance
    $CI =& get_instance();
    //Read user data from session
    $user_data = $CI->session->userdata('user_data');
    //Return locale session
    return $user_data['user_id'];
}

function add_user_data($account){
    $CI =& get_instance();
    $user_data['user_name'] = $account['name'];
    $user_data['user_id'] = $account['id'];
    $user_data['user_type'] = $account['user_type'];
    $user_data['user_email'] = $account['email'];
    $user_data['user_is_logged'] = TRUE;
    $user_data['user_is_switched'] = FALSE;

    $CI->session->set_userdata('user_data', $user_data);
}
/* End of file: account_helper */
/* Location: ./application/helpers/account_helper.php */