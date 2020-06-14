<?php defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model', 'auth_model');
	}

	public function index()
	{
		$data['title'] = 'obat list';
		$data['layout'] = 'obat/list_obat';
		$this->load->view('layout', $data);
	}

	public function add()
	{
		$data['title'] = 'obat add';
		$data['layout'] = 'obat/add_obat';
		$this->load->view('layout', $data);
	}

	public function edit()
	{
		$data['title'] = 'obat edit';
		$data['layout'] = 'obat/edit_obat';
		$this->load->view('layout', $data);
	}
}
