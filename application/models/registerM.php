<?php
defined('BASEPATH') or exit('No direct script access allowed');

class registerM extends CI_model
{
    public function registerSiswaValue($table)
    {
       $data = $this->db->get($table);

       return $data->result_array();
    }

    public function setRegister($tabel, $data)
    {
        $data = $this->db->insert($tabel, $data);
        return $data;
    }
    public function idSekolah($data)
    {
        return $this->db->select('id-sekolah')->where('nama-sekolah',$data)->get('tb-sekolah')->result_array();
    }
    public function idKejuruan($data)
    {
        return $this->db->select('id-kejuruan')->where('nama-kejuruan',$data)->get('tb-kejuruan')->result_array();
    }
}
