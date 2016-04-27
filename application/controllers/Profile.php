<?php

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_model');
    }

    public function index()
    {
        if (!isset($this->session->id))
            redirect('');

        $data['title'] = 'Profile';

        $this->load->view('templates/header', $data);
        $this->load->view('profile/profile');
        $this->load->view('templates/footer');


    }


}