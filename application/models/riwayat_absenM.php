<?php
defined('BASEPATH') or exit('No direct script access allowed');

class riwayat_absenM extends CI_model
{
    public function getData($username, $password)
    {
        return $this->db->select('*')->from('tb-siswa')->where("nama-siswa = '$username' AND password-siswa = '$password'")->get()->result_array();
    }
    public function setLogin($username, $password)
    {
        $this->db->where('nama-siswa', $username);
        $this->db->where('password-siswa', $password);
        return $this->db->get('tb-siswa')->num_rows();
    }


    // method mengambil data dari table tb-absen
    public function getAbsen($id)
    {
        return $this->db->select('*')->from('tb-absen')->where('id-siswa', $id)->get()->result_array();
    }
    public function getAbsenNull($id, $absenPulang)
    {
        return $this->db->select('*')->from('tb-absen')->where("id-siswa = '$id' AND abs-pulang = '$absenPulang'")->get()->result_array();
    }
    // set absen di table tn-absen
    public function setAbsenNew($values)
    {
        return  $this->db->insert('tb-absen', $values);
    }
    public function setUpdateAbsen($idAbsen, $values)
    {
        return $this->db->where('id-absen', $idAbsen)->update('tb-absen', $values);
    }
    // set tampil data di page riwayat absen
    public function setDataRiwayatAbsen()
    {
       return $this->db->join('tb-absen', 'tb-absen.id-siswa = tb-siswa.id-siswa')->join('tb-sekolah', 'tb-sekolah.id-sekolah = tb-siswa.id-sekolah')->join('tb-kejuruan', 'tb-kejuruan.id-kejuruan = tb-siswa.id-kejuruan')->get('tb-siswa')->result_array();
    } 
}
