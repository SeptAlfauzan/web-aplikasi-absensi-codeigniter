<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kejuruan extends CI_Controller
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
        $data['dataKejuruan'] = $this->get_dataM->getData('tb-kejuruan');
        $this->load->view('Kejuruan/index.php', $data);
    }
     public function insert()
    {
        $namaKejuruan = $_POST['nama-kejuruan'];
        $data = array('nama-kejuruan' => $namaKejuruan);

        $this->get_insertM->addData($data, 'tb-kejuruan');
        $this->session->set_flashdata('flash', 'Berhasil Ditambahkan');
        redirect(base_url('kejuruan'));
    }
    public function delete($id){
        $idCol = 'id-kejuruan';
        $table = 'tb-kejuruan';

        $this->get_deleteM->getDelete($id, $idCol, $table);
        $this->session->set_flashdata('flash', 'Berhasil Dihapus');
        redirect(base_url('kejuruan'));
    }

    public function update($id)
    {
        $value = $_POST['update-data'];
        $idCol = 'id-kejuruan';
        $nameCol = 'nama-kejuruan';
        $table = 'tb-kejuruan';
        $cols = [$idCol, $nameCol, $table];

        $this->get_updateM->getUpdate($id, $value, $cols);
        $this->session->set_flashdata('flash', 'Berhasil Diupdate');
        redirect(base_url('kejuruan'));
    }
}
