<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_admin extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('admin_loginM');
	}

	public function index()
	{
		$this->load->view('LoginAdmin/index.php');
	}
	public function getLogin()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$cek = $this->admin_loginM->setLogin($username, $password);
		$statusAdmin = $this->admin_loginM->getStatus($username, $password);
		$statusAdmin = $statusAdmin[0]['status-admin'];

		if ($cek == 1) {
			$_SESSION['admin'] = true;
			$_SESSION['namaAdmin'] = $username;
			if ($statusAdmin == 'operator') {
				$_SESSION['operator'] = true;
				redirect(base_url('dashboard'));
			}else{
				$_SESSION['operator'] = false;
				redirect(base_url('dashboard'));
			}
		}else{
			$this->session->set_flashdata('flash', 'Gagal');
			redirect(base_url('login_admin'));
		}
	}
	public function logout()
	{
		session_unset();
		session_destroy();

		header('Location:' . base_url('login_admin'));
	}
	public function pageNotFound()
	{
		$this->load->view('pageNotFound/index.php');
	}
}
