<?php
defined('BASEPATH') or exit('No direct script access allowed');

class register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('registerM');
    }

    public function index()
    {
        $data['sekolah'] = $this->registerM->registerSiswaValue('tb-sekolah');
        $data['kejuruan'] = $this->registerM->registerSiswaValue('tb-kejuruan');
        
        $this->load->view('Register/index.php', $data);
    }
    public function registerSiswa()
    {
        $nama = $_POST['nama-siswa'];
        $jenisKelamin = $_POST['jenis-kelamin'];
        $kelas = $_POST['kelas'];
        $idSekolah = $_POST['id-sekolah'];
        $idKejuruan = $_POST['id-kejuruan'];
        // mengambil id sekolah dan id kejuruan
        $idSekolah = $this->registerM->idSekolah($idSekolah);
        $idKejuruan = $this->registerM->idKejuruan($idKejuruan);
        $idSekolah = $idSekolah[0]['id-sekolah'];
        $idKejuruan = $idKejuruan[0]['id-kejuruan'];


        $tmpLahir = $_POST['tmp-lahir'];
        $tglLahir = $_POST['tgl-lahir'];
        $idSiswa = strtoupper(substr($nama, 0, 3)) . random_string('numeric', 3);
        $password = strtoupper(substr($nama, 0,3)).random_string('numeric', 6);
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
        $this->registerM->setRegister('tb-siswa', $data);
        $this->session->set_flashdata('flash', 'Berhasil, password anda '.$password);
        redirect(base_url('register'));

    }
}
