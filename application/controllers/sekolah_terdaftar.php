<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sekolah_terdaftar extends CI_Controller
{
    public function __construct()
    {
       parent::__construct();
       $this->load->model('get_dataM');
       $this->load->model('get_updateM');
       $this->load->model('get_deleteM');
       $this->load->model('get_insertM');
    }

    public function index()
    {
        $data['dataSekolah'] = $this->get_dataM->getData('tb-sekolah');
        $this->load->view('SekolahTerdaftar/index.php', $data);
    }
    public function insert()
    {
        $namaSekolah = $_POST['nama-sekolah'];
        $data = array('nama-sekolah' => $namaSekolah);

        $this->get_insertM->addData($data, 'tb-sekolah');
        $this->session->set_flashdata('flash', 'Berhasil Ditambahkan');
        redirect(base_url('sekolah_terdaftar'));
    }
    public function delete($id)
    {
        $idCol = 'id-sekolah';
        $table = 'tb-sekolah';
        $this->get_deleteM->getDelete($id, $idCol, $table);
        $this->session->set_flashdata('flash', 'Berhasil Dihapus');
        redirect(base_url('sekolah_terdaftar'));
    }
    public function update($id)
    {
        $value = $_POST['update-data'];
        $idCol = 'id-sekolah';
        $nameCol = 'nama-sekolah';
        $table = 'tb-sekolah';
        $cols = [$idCol, $nameCol, $table];
        $this->get_updateM->getUpdate($id, $value, $cols);
        $this->session->set_flashdata('flash', 'Berhasil Diubah');
        redirect(base_url('sekolah_terdaftar'));
    }
}
