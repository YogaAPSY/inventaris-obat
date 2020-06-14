<?php defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('satuan_model', 'satuan_model');
	}

	public function index()
	{
		$data['title'] = 'satuan list';
		// $data['satuan'] = get_satuan();
		$data['layout'] = 'user/list_user';
		$this->load->view('layout', $data);
	}


	public function add()
	{
		$data['title'] = 'satuan list';
		// $data['satuan'] = get_satuan();
		$data['layout'] = 'user/add_user';
		$this->load->view('layout', $data);
	}


	public function edit()
	{
		$data['title'] = 'satuan list';
		// $data['satuan'] = get_satuan();
		$data['layout'] = 'user/add_user';
		$this->load->view('layout', $data);
	}
}
