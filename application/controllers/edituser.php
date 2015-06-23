<?php

class edituser extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_database');
        $this->load->library('form_validation');
    }

    function index() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['email'] = $session_data['email'];

            $result = $this->login_database->read_user_information($data);

            $this->load->view('edituser_form', $result[0]);
        } else {
            redirect('login');
        }

    }

   public function adduserdata() {

            //$this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');

            $adddata = array(
                'first_name' => $this->input->post('firstname'),
                'last_name' => $this->input->post('lastname'),
                'user_name' => $this->input->post('username'),
                'user_birthday' => $this->input->post('birthday'),
                'user_email' => $this->input->post('email_value'),
                'user_phoneno' => $this->input->post('phoneno')
            );
            
             $addresult = $this->login_database->add_data($adddata);
             var_dump($addresult);
             $session_data = $this->session->userdata('logged_in');
             $data['username'] = $session_data['username'];
             $readresult = $this->login_database->read_user_information($data);
             
             //var_dump($readresult);
            $this->load->view('edituser_form', $readresult[0]);
             
        }

    }

