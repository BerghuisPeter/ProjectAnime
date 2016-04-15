<?php
class Connection_model extends CI_Model {
    

    public function get_user()
    {
        $userName = $this->input->post('v_userName');
        $password = $this->input->post('v_passWord');

        $query = $this->db->get_where('user', array('user_name' => $userName, 'password' => $password));
        return $query->result_array();
    }

}