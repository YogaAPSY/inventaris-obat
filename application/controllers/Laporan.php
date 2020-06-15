<?php defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('laporan_model', 'laporan_model');
	}

	public function index()
	{
		$data['title'] = 'laporan list';
		$data['laporan'] = $this->laporan_model->list_laporan();

		$data['layout'] = 'laporan/list_laporan';
		$this->load->view('layout', $data);
	}
}
