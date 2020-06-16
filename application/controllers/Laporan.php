<?php defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('laporan_model', 'laporan_model');
		if (!$this->session->userdata('is_user_login')) {
			redirect('auth/login');
		} elseif ($this->session->userdata('is_user_login') == TRUE && $this->session->userdata('status') == 1) {
			redirect('dashboard');
		}
	}

	public function index()
	{
		$data['title'] = 'laporan';
		$data['laporan'] = $this->laporan_model->list_laporan();

		$data['layout'] = 'laporan/list_laporan';
		$this->load->view('layout', $data);
	}
}
