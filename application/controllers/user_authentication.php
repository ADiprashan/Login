<?php

Class User_Authentication extends CI_Controller {

    public function __construct() {
        parent::__construct();

// Load form helper library
        $this->load->helper('form');

// Load form validation library
        $this->load->library('form_validation');

// Load session library

// Load database
        $this->load->model('login_database');
    }

// Show login page
    public function index() {

        if ($this->session->userdata('logged_in')) {
            

           $session_datare = $this->session->userdata('logged_in');
           $datare['username'] = $session_datare['user_name'];
           $datare['email'] = $session_datare['user_email'];
            $this->load->view('admin_page', $datare);
        } else {
            redirect('user_authentication/user_login_process');
            // $this->load->view('login_form');
        }
    }

// Show registration page
    public function user_registration_show() {
        $this->load->view('registration_form');
    }

// Validate and store registration data in database
    public function new_user_registration() {

// Check validation for user input in SignUp form
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('registration_form');
        } else {
            $data = array(
                'user_name' => $this->input->post('username'),
                'user_email' => $this->input->post('email_value'),
                'user_password' => $this->input->post('password')
            );
            $result = $this->login_database->registration_insert($data);

            var_dump($result);

            if ($result) {
                $data['message_display'] = 'Registration Successfully !';
                $this->load->view('login_form', $data);
            } else {
                $data['message_display'] = 'Username already exist!';
                $this->load->view('registration_form', $data);
            }
        }
    }

// Check for user login process
    public function user_login_process() {


        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            // die();
            $this->load->view('login_form');
            //}
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $result = $this->login_database->login($data);


            if ($result == TRUE) {

                $username = $this->input->post('username');
                $result = $this->login_database->read_user_information($username);

                if ($result) {
                    //die();
//                    $session_data = array(
//                        'username' => $result['user_name'],
//                        'email' => $result['user_email'],
//                    );
//// Add user data in session
//                    $this->session->set_userdata('logged_in', $session_data);
//                    //var_dump($this->session->userdata['logged_in']);
//
////                    $this->load->view('admin_page',$session_data);
                    redirect('admin');
                }
            } else {
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('login_form', $data);
            }
        }
    }

// Logout from admin page
    public function logout() {

// Removing session data
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
//$data['message_display'] = 'Successfully Logout';
        $this->load->view('login_form');
    }

}

?>