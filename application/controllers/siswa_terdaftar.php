<?php
defined('BASEPATH') or exit('No direct script access allowed');

class siswa_terdaftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_terdaftarM');
        $this->load->model('get_deleteM');
    }

    public function index()
    {
        $data['dataSiswa'] = $this->siswa_terdaftarM->getAllSiswa();
        $this->load->view('DaftarSiswa/index.php', $data);
    }
    public function delete($id)
    {
        $idCol = 'id-siswa';
        $table = 'tb-siswa';

        $this->get_deleteM->getDelete($id, $idCol, $table);
        $this->session->set_flashdata('flash', 'Berhasil Dihapus');
        redirect(base_url('siswa_terdaftar'));
    }
    public function aktivasi($id)
    {
        $this->siswa_terdaftarM->setAktivasi($id);
        $this->session->set_flashdata('flash', 'Berhasil Diaktivasi');
        redirect(base_url('siswa_terdaftar'));
    }
    public function repassword($id)
    {
        $this->siswa_terdaftarM->getNewPassword($id);
        $this->session->set_flashdata('flash', 'Berhasil Direset Password Baru');
        redirect(base_url('siswa_terdaftar'));
    }
    public function count()
    {
        $data = $this->siswa_terdaftarM->countData();
        if ($data >= 1) {
            echo '<div class="spinner4 spinner-4"></div>';
            echo '<div class="spinner4 spinner-4"></div><div class="ntd-ctn"><span style="color: #fff">' . $data . '</span></div>';
        } else {
            echo "";
        }
    }
    // nptif refresh page
    public function notif()
    {
        $data = $this->siswa_terdaftarM->countNewData();
        
        if ($data >= 1) {
            echo'<div class="nk-teal" style="position: fixed;margin-left: auto;margin-right: auto;left: 0;right: 0; color: #fff; width: 200px; padding: 10px; border-radius: 50px; text-align: center; z-index: 3"><i class="fas fa-redo-alt"></i> REFRESH HALAMAN</div>'
;
        } else {
            echo "";
        }
    }
    public function refresh()
    {
        $this->siswa_terdaftarM->setNewData();
        redirect(base_url('siswa_terdaftar'));  
    }
}
