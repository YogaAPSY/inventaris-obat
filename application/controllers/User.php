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
		$data['title'] = 'user';
		$data['users'] = get_user();

		$data['layout'] = 'user/list_user';
		$this->load->view('layout', $data);
	}


	public function add()
	{
		if ($this->input->post('submit')) {

			$this->validation('add');
		} else {
			$data['title'] = 'user';
			// $data['satuan'] = get_satuan();
			$data['page'] = 'add';
			$data['layout'] = 'user/form_user';
			$this->load->view('layout', $data);
		}
	}


	public function edit($id)
	{
		if ($this->input->post('submit')) {

			$this->validation('edit', $id);
		} else {
			$data['title'] = 'user';
			$data['user'] = get_user_by_id($id);
			$data['page'] = 'edit';
			$data['layout'] = 'user/form_user';
			$this->load->view('layout', $data);
		}
	}

	private function validation($page, $id = 0)
	{

		if ($page == 'add') {
			$this->form_validation->set_rules(
				'username',
				'username',
				'trim|required|min_length[3]|is_unique[xx_users.username]',
				array(
					'required'    => '%s harus diisi!',
					'is_unique'	=> '%s ini sudah terdaftar!',
					'min_length'  => '%s minimal 3 karakter!',
				)
			);
		}

		$this->form_validation->set_rules(
			'password',
			'password',
			'trim|required|min_length[3]',
			array(
				'required'    => '%s harus diisi!',
				'min_length'  => '%s minimal 3 karakter!',
			)
		);
		$this->form_validation->set_rules(
			'con_pass',
			'Confirm Password',
			'trim|required|min_length[3]|matches[password]',
			array(
				'required'   => '%s Harap diisi!',
				'matches'	 => '%s tidak sama!',
				'min_length' => '%s minimal 3 karakter!' //edited by wahid
			)
		);
		$this->form_validation->set_rules(
			'nama',
			'nama',
			'trim|required|min_length[3]',
			array(
				'required'    => '%s harus diisi!',
				'min_length'  => '%s minimal 3 karakter!' //edited by wahid
			)
		);
		$this->form_validation->set_rules(
			'status',
			'status',
			'trim|required',
			array(
				'required'    => '%s harus diisi!' //edited by wahid
			)
		);


		if ($this->form_validation->run() == FALSE) {


			if ($page == 'add') {
				$data = array(
					'errors' => validation_errors()
				);

				$this->session->set_flashdata('abort', $data['errors']);
				$data['page'] = 'add';
				$data['title'] = 'Add User';
				$data['layout'] = 'user/form_user';
			} else {
				$data = array(
					'errors' => validation_errors()
				);

				$this->session->set_flashdata('abort', $data['errors']);
				$data['page'] = 'edit';
				$data['user'] = get_user_by_id($id);
				$data['title'] = 'Edit User';
				$data['layout'] = 'user/form_user';
			}



			$this->load->view('layout', $data);
		} else {

			$data = array(
				'username' => $this->security->xss_clean($this->input->post('username')),
				'created_by' => $this->session->userdata('nama'),
				'status' => $this->security->xss_clean($this->input->post('status')),
				'nama' => $this->security->xss_clean($this->input->post('nama')),

				'password' => $this->security->xss_clean(password_hash($this->input->post('password'), PASSWORD_BCRYPT)),
				'created_at' => date('Y-m-d : h:m:s')

			);



			$result = $this->auth_model->insert_data($data, $id);

			if ($result) {
				$this->session->set_flashdata('message', 'User sudah berhasil di input!');
				redirect(base_url('user'), 'refresh');
			} else {
				$this->session->set_flashdata('abort', 'User gagal di input!');
				redirect(base_url('user/' . $page . ($id != 0) ? "/" . $id : ''), 'refresh');
			}
		}
	}
}
