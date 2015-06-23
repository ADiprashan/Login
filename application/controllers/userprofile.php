<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Userprofile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_database');
    }

    public function index() {

        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['email'] = $session_data['email'];

            
        //  $data = array("username" => $session_data['username'], "email" => $session_data['email']);
            
            $result = $this->login_database->read_user_information($data);
            
           // var_dump($result);
            
            $this->load->view('userprofile_view', $result[0]);
        } else {
            redirect('login');
        }
    }

}
