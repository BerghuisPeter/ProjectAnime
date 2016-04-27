<?php

class Connection extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('connection_model');
    }

    public function index()
    {
        if (isset($this->session->id))
            redirect('');

        $data['title'] = 'Login';

        $this->form_validation->set_rules('v_userName', 'user name', 'required');
        $this->form_validation->set_rules('v_passWord', 'password', 'required');

        if ($this->form_validation->run() === FALSE) {
            redirect('');
        } else {
            $data['user'] = $this->connection_model->get_user();
            // if user not found or pw incorrect
            if (empty($data['user'])) {
                $this->load->view('connection/fail');
            } // if user found and pw correct
            else {
                $this->connection_model->initializeSession($data);
                redirect('profile');
            }
        }

    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }


}