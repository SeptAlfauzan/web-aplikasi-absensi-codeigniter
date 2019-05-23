<?php
defined('BASEPATH') or exit('No direct script access allowed');

class riwayat_absen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('riwayat_absenM');
        $this->load->model('get_deleteM');
    }

    public function index()
    {
        $data['absen'] = $this->riwayat_absenM->setDataRiwayatAbsen();
        $this->load->view('RiwayatAbsen/index.php', $data);
    }
    public function delete($id)
    {
        $idCol = 'id-absen';
        $table = 'tb-absen';

        $this->get_deleteM->getDelete($id, $idCol, $table);
        $this->session->set_flashdata('flash', 'Berhasil Dihapus');
        redirect(base_url('riwayat_absen'));
    }
}
