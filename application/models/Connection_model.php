<?php

class Connection_model extends CI_Model
{


    public function get_user()
    {
        $userName = $this->input->post('v_userName');
        $password = $this->input->post('v_passWord');

        $query = $this->db->get_where('user', array('user_name' => $userName, 'password' => $password));
        return $query->result_array();
    }


    public function initializeSession($data)
    {
        $sessiondata = array(
            'id' => $data['user'][0]['id'],
            'userName' => $data['user'][0]['user_name'],
            'email' => $data['user'][0]['email'],
            'password' => $data['user'][0]['password'],
            'type' => $data['user'][0]['type']
        );
        $this->session->set_userdata($sessiondata);
    }

}