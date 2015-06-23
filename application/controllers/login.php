<?php

/**
 * @author ADi
 */
class login extends CI_Controller {

    public function __construct() {
        parent::__construct();

// Load form helper library
        $this->load->helper('form');

// Load form validation library
        $this->load->library('form_validation');

// Load session library
// $this->load->library('session');
// Load database
        $this->load->model('login_database');
    }

    public function index() {


        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['email'] = $session_data['email'];
            redirect('welcome');
        } else {
            //redirect('login');
            $this->load->view('login_form');
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
                $resultx = $this->login_database->read_user_information(array("username"=>$username));
                
                
                
                if ($resultx) {
                    
                    $resultx = $resultx[0];
                    
                    $session_data = array(
                        'username' => $resultx['user_name'],
                        'email' => $resultx['user_email']
                    );
                    
//                    var_dump($resultx);
//                    die();
                    
                    //var_dump($session_data);
                    // Add user data in session
                    $this->session->set_userdata("logged_in", $session_data);
                    //var_dump($this->session->userdata('logged_in'));
                    //$this->load->view('welcome');
                    //redirect('welcome');
                    redirect('userprofile');
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
//        $sess_array = array(
//            'username' => ''
//        );
//        $this->session->unset_userdata('logged_in', $sess_array);
        $this->session->sess_destroy();
//$data['message_display'] = 'Successfully Logout';
        // $this->load->view('login_form');
        redirect('login');
    }

}
