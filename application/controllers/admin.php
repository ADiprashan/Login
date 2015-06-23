<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author ADi 
 */
class admin extends CI_Controller{
    
    function index(){  
        
         $session_data = array(
                        'username' => $result['user_name'],
                        'email' => $result['user_email'],
                    );
// Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    $this->load->view('admin_page',$session_data);
    
    }
    
    
}
