<?php

class Inscription extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('inscription_model');
    }

    public function index()
    {
        $data['title'] = 'inscription';

        $this->form_validation->set_rules('v_userName', 'user name', 'required');
        $this->form_validation->set_rules('v_passWord', 'password', 'required');
        $this->form_validation->set_rules('v_email', 'email', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('inscription/user_inscription', $data);
            $this->load->view('templates/footer');
        } else {
            $inscription = $this->inscription_model->tryInscription();
            // if succeeded to insert
            if ($inscription == true) {
                $this->load->view('templates/header', $data);
                $this->load->view('inscription/inscription_success');
                $this->load->view('templates/footer');
            } // if username or email exists
            else {
                $this->load->view('templates/header', $data);
                $this->load->view('inscription/inscription_fail');
                $this->load->view('templates/footer');
            }
        }


    }

}