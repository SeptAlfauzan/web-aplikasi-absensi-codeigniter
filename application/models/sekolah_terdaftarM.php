<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sekolah_terdaftarM extends CI_model
{
    public function getUpdate($id, $value)
    {
       $this->db->where("id-sekolah = '$id'")->set('nama-sekolah', $value)->update('tb-sekolah');
    }
}
