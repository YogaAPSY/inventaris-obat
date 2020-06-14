<?php defined('BASEPATH') or exit('No direct script access allowed');

class Satuan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model', 'auth_model');
	}

	public function index()
	{
		$data['title'] = 'satuan list';
		$data['layout'] = 'satuan/list_satuan';
		$this->load->view('layout', $data);
	}

	public function add()
	{
		$data['title'] = 'satuan add';
		$data['layout'] = 'satuan/add_satuan';
		$this->load->view('layout', $data);
	}

	public function edit()
	{
		$data['title'] = 'satuan edit';
		$data['layout'] = 'satuan/edit_satuan';
		$this->load->view('layout', $data);
	}
}
