<?php defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model', 'auth_model');
		if (!$this->session->userdata('is_user_login')) {
			redirect('auth/login');
		} elseif ($this->session->userdata('is_user_login') == TRUE && $this->session->userdata('status') == 1) {
			redirect('dashboard');
		}
	}

	public function index()
	{
		$data['title'] = 'user list';
		// $data['satuan'] = get_satuan();
		echo "babi";
		exit();
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
