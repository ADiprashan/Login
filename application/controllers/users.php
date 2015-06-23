<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users
 *
 * @author fmfuser
 */
class users extends CI_Controller {
    
    public function index() {
            
           //if ($this->session->userdata('logged_in')) {
           $session_data = $this->session->userdata('logged_in');
           $data['username'] = $session_data['user_name'];
           $data['email'] = $session_data['user_email'];
            $this->load->view('welcome',$session_data);
//        } else {
//            redirect('login');
//            // $this->load->view('login_form');
//        }
        
        
             
    }
    
    
    
}
