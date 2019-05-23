<?php
defined('BASEPATH') or exit('No direct script access allowed');

class get_dataM extends CI_model
{
    public function getData($tabel)
    {
       $data = $this->db->get($tabel);
       return $data->result_array();
    }
}


?>