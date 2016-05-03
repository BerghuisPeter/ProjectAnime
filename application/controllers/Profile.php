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

        //$data['userProfile'] = $this->profile_model->getInfoProfil($profileId);

        $this->load->view('templates/logged_header', $data);
        $this->load->view('profile/profile', $data);
        $this->load->view('templates/footer');
    }

    public function editProfile()
    {
        if (!isset($this->session->id))
            redirect('');

        $data['title'] = 'Edit my profile';

        $this->load->view('templates/logged_header', $data);
        $this->load->view('profile/my_profile');
        $this->load->view('templates/footer');
    }

    public function passwordChange()
    {
        
    }


}