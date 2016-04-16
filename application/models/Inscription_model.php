<?php

class Inscription_model extends CI_Model
{

    public function tryInscription()
    {
        $username = $this->input->post('v_userName');
        $email = $this->input->post('v_email');

        // if mail and username do not exist, insert into DB
        if ($this->checkEmail($email) && $this->checkUserName($username)) {
            $data = array(
                'user_name' => $username,
                'email' => $email,
                'password' => $this->input->post('v_passWord')
            );
            return $this->db->insert('user', $data);
        }
        // if mail or username already exist
        return false;
    }

    public function checkEmail($email)
    {
        $query = $this->db->get_where('user', array('email' => $email));

        $result = $query->result_array();
        if (empty($result))
            return true;
        return false;
    }

    public function checkUserName($userName)
    {
        $query = $this->db->get_where('user', array('user_name' => $userName));

        $result = $query->result_array();
        if (empty($result))
            return true;
        return false;
    }

}