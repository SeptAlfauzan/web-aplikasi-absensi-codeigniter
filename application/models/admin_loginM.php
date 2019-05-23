<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_loginM extends CI_model
{
    public function setLogin($username, $password)
    {
       $data = $this->db->where('nama-admin', $username)->where('password-admin', $password)->get('tb-admin');
       return $data->num_rows();
    }
    public function getStatus($username, $password)
    {
       $data = $this->db->select('status-admin')->where('nama-admin', $username)->where('password-admin', $password)->get('tb-admin');
       return $data->result_array();
    }
}


?>