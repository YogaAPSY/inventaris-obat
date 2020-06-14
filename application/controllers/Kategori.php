<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model', 'auth_model');
	}

	public function index()
	{
		$data['title'] = 'kategori';
		$data['layout'] = 'kategori/list_kategori';
		$this->load->view('layout', $data);
	}

	public function add()
	{
		$data['title'] = 'kategori';
		$data['layout'] = 'kategori/add_kategori';
		$this->load->view('layout', $data);
	}

	public function edit()
	{
		$data['title'] = 'kategori';
		$data['layout'] = 'kategori/edit_kategori';
		$this->load->view('layout', $data);
	}
}
