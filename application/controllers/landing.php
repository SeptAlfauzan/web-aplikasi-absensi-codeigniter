<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landing extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('riwayat_absenM');
		$this->load->model('admin_loginM');
	}

	public function index()
	{
		$this->load->view('Landing/index.php');
	}
	public function getLogin()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$cek = $this->riwayat_absenM->setLogin($username, $password);
		$siswa = $this->riwayat_absenM->getData($username, $password);

		$id = $siswa[0]['id-siswa'];
		$aktivasi = $siswa[0]['status-aktivasi'];
		// mengambil data absendatang dan pulang
		$absenValues = $this->riwayat_absenM->getAbsen($id);
		$absen_datang = $absenValues[0]['abs-datang'];
		$absen_pulang = $absenValues[0]['abs-pulang'];

		
		$pulangValNull = $this->riwayat_absenM->getAbsenNull($id, NULL);
		
		// ambil status dari kolom abs-pulang yang nilainya null
		$status = $pulangValNull[0]['status'];
		// jika data yang dimasukkan sesuai dengan data admin
		$cekAdmin = $this->admin_loginM->setLogin($username, $password);
		$statusAdmin = $this->admin_loginM->getStatus($username, $password);
		$statusAdmin = $statusAdmin[0]['status-admin'];

		

// cek absen
// cek username dan password apakah benar
		if ($cek == 1) {

			date_default_timezone_set("Asia/Jakarta");
			if ($absen_datang != null && $absen_pulang == null) {
				$idAbsen = $pulangValNull[0]['id-absen'];
				$data = array(
					'abs-pulang' => date("Y-m-d"), 'waktu-abs-pulang' => date("H:i:s"), 'status' => 0
				);
				$this->riwayat_absenM->setUpdateAbsen($idAbsen, $data);
				$this->session->set_flashdata('flash', 'Berhasil', "ok");
				redirect(base_url());
			}
			else if($absen_pulang != null && $status == 1) {
				$idAbsen = $pulangValNull[0]['id-absen'];
				$data = array(
					'abs-pulang' => date("Y-m-d"), 'waktu-abs-pulang' => date("H:i:s"), 'status' => 0
				);
				$this->riwayat_absenM->setUpdateAbsen($idAbsen, $data);
				$this->session->set_flashdata('flash', 'Berhasil', "ok");
				redirect(base_url());
			} elseif ($aktivasi == 0) {
				$this->session->set_flashdata('flash', 'Akun anda belum diaktivasi oleh admin');
				redirect(base_url());
			}else{
				$data = array(
					'id-siswa' => $id, 'abs-datang' => date("Y-m-d"), 'waktu-abs-datang' => date("H:i:s"), 'status' => 1
				);
				$this->riwayat_absenM->setAbsenNew($data);
				$waktu = date("H:i:s");
				if ($waktu > "07:00:00") {
					$this->session->set_flashdata('flash', 'Telat');
					redirect(base_url());
				} else {
					$this->session->set_flashdata('flash', 'Berhasil');
					redirect(base_url());
				}
			}
		}elseif ($cekAdmin == 1) {
			# code...if ($cek == 1) {
			$_SESSION['admin'] = true;
			$_SESSION['namaAdmin'] = $username;
			if ($statusAdmin == 'operator') {
				$_SESSION['operator'] = true;
				redirect(base_url('dashboard'));
			} else {
				$_SESSION['operator'] = false;
				redirect(base_url('dashboard'));
			}
		}
		
		else{
			$this->session->set_flashdata('flash', 'Gagal');
			redirect(base_url());
		}
	}
}
