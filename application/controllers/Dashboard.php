<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model', 'dashboard_model');

		if (!$this->session->userdata('is_user_login')) {
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['title'] = 'dashboard';
		$data['total_user'] = $this->dashboard_model->total('xx_users', 'pegawai');
		$data['total_admin'] = $this->dashboard_model->total('xx_users', 'admin');
		$data['total_obat'] = $this->dashboard_model->total('xx_obat');
		$data['total_transaksi'] = $this->dashboard_model->total('xx_laporan');
		// $data['total_keluar'] = $this->home_model->pemasukan('xx_pendaftaran');
		// $data['total_masuk'] = $this->home_model->pemasukan('xx_admin');
		$data['layout'] = 'dashboard';
		$this->load->view('layout', $data);
	}
}
