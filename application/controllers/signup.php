<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of signup
 *
 * @author fmfuser
 */
class signup extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('login_database');
    }

    public function index() {

        $this->load->view('signup_form');
    }

    // Validate and store registration data in database
    public function new_user_registration() {


        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['email'] = $session_data['email'];
            redirect('welcome');
        } else {

// Check validation for user input in SignUp form
            $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
            $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('signup_form');
            } else {
                $data = array(
                    'user_name' => $this->input->post('username'),
                    'user_email' => $this->input->post('email_value'),
                    'user_password' => $this->input->post('password')
                );
                $result = $this->login_database->registration_insert($data);

//            var_dump($result);

                if ($result) {
                    $data['message_display'] = 'Registration Successfully !';
                    $this->load->view('login_form', $data);
                } else {
                    $data['message_display'] = 'Username already exist!';
                    $this->load->view('signup_form', $data);
                }
            }
        }
    }

}
