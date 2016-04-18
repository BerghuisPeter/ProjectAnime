<?php

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_model');
        if (!isset($_SESSION['id']))
            redirect('');
    }

    public function index()
    {
        $data['title'] = 'Profile';

        $this->load->view('profile/profile');

    }


}