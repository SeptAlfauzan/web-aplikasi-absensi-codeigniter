<?php
defined('BASEPATH') or exit('No direct script access allowed');

class siswa_terdaftarM extends CI_model
{
    public function getAllSiswa()
    {
       $data = $this->db->order_by('tb-siswa.nama-siswa', 'ASC')->join('tb-sekolah', 'tb-sekolah.id-sekolah = tb-siswa.id-sekolah')->join('tb-kejuruan', 'tb-kejuruan.id-kejuruan = tb-siswa.id-kejuruan')->get('tb-siswa');

       return $data->result_array();
    }
    public function setAktivasi($id)
    {
        $this->db->where('id-siswa', $id)->set('status-aktivasi', 1)->update('tb-siswa');
    }
    public function getNewPassword($id)
    {
        $nama = $this->db->select('nama-siswa')->where('id-siswa', $id)->get('tb-siswa')->result_array();
        $nama = $nama[0]['nama-siswa'];
        $this->db->where('id-siswa', $id)->set('password-siswa', strtoupper(substr($nama, 0,3)).random_string('numeric', 6))->update('tb-siswa');
    }
    public function countData()
    {
        $data = $this->db->where('status-aktivasi', 0)->count_all_results('tb-siswa');
        return $data;
    }
    public function countNewData()
    {
        $data = $this->db->where('refresh', 0)->count_all_results('tb-siswa');
        return $data;
    }
    public function setNewData()
    {
        return $this->db->where("refresh", 0)->set('refresh', 1)->update("tb-siswa");
    }
}


?>