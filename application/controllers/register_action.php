<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        arent::__construct();
        $this->load->model('registerM');
    }
    public function registerSiswa()
    {
        $nama = $_POST['nama-siswa'];
        $jenisKelamin = $_POST['jenis-kelamin'];
        $kelas = $_POST['kelas'];
        $idSekolah = $_POST['id-sekolah'];
        $idKejuruan = $_POST['id-kejuruan'];
        $tmpLahir = $_POST['tmp-lahir'];
        $tglLahir = $_POST['tgl-lahir'];
        $idSiswa = strtoupper(substr($nama, 0, 3)) . random_string('numeric', 3);
        $password = random_string('numeric', 6);
        $data = array(
            'id-siswa' => $idSiswa,
            'nama-siswa' => $nama,
            'jenis-kelamin' => $jenisKelamin,
            'kelas' => $kelas,
            'id-kejuruan' => $idKejuruan,
            'tempat-lahir' => $tmpLahir,
            'tanggal-lahir' => $tglLahir,
            'id-sekolah' => $idSekolah,
            'password-siswa' => $password,
        );
        $save = $this->registerM->setRegister('tb-siswa', $data);
        if($save >= 1){
            var_dump($data);
        } redirect(base_url('register'));
    }
}
