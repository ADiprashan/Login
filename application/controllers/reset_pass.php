<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class reset_pass extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('login_database');
    }

    public function index() {

        $this->load->view('reset_pass_form');
    }

    public function new_password() {

//        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
//        $this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
//        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');

        $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('reset_pass_form');
        } else {
            $data = array(
                'user_email' => $this->input->post('email_value')
            );
            $result = $this->login_database->check_email($data);
            //var_dump($result);
            
            if ($result) {
                    $data['message_display_resetpass'] = 'Email sent Successfully !';
                    $this->load->view('login_form', $data);
                } else {
                    $data['message_display_resetpass'] = 'Email not exist!';
                    $this->load->view('reset_pass_form', $data);
                }
        }
    }

}
