<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }


    public function view($page = 'home')
    {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        if (!isset($this->session->id))
            $this->load->view('templates/header', $data);
        else
            $this->load->view('templates/logged_header', $data);

        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }
}