<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('get_dataM');
        $this->load->model('get_insertM');
        $this->load->model('get_deleteM');
        $this->load->model('get_updateM');
    }

    public function index()
    {
        $data['dataAdmin'] = $this->get_dataM->getData('tb-admin');
        $this->load->view('AdminManager/index.php', $data);
    }
    public function insert()
    {
        $namaAdmin = $_POST['nama-admin'];
        $status = $_POST['status'];
        $password =  strtoupper(substr($namaAdmin, 0,3)).random_string('numeric', 3);
        if ($status=="on") {
            $status = "operator";
        }else{
           $status = "mentor";
        }

        $data = array("nama-admin"=>$namaAdmin, "password-admin"=>$password, "status-admin"=>$status);
        $this->get_insertM->addData($data, 'tb-admin');
        $this->session->set_flashdata('flash', 'Berhasil Ditambahkan');
        redirect(base_url('admin'));
    }
    public function delete($id)
    {
        $idCol = 'id-admin';
        $table = 'tb-admin';

        $this->get_deleteM->getDelete($id, $idCol, $table);
        $this->session->set_flashdata('flash', 'Berhasil Dihapus');
        redirect(base_url('admin'));
    }

    public function update($id)
    {
        $namaAdmin = $_POST['nama-admin'];
        $status = $_POST['status'];
        if ($status == "on") {
            $status = "operator";
        } else {
            $status = "mentor";
        }
        $value = array("nama-admin" => $namaAdmin, "status-admin" => $status);
        $this->get_updateM->getUpdate($id, $value);
        redirect(base_url('admin'));
    }
}
