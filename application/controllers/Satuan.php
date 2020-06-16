<?php defined('BASEPATH') or exit('No direct script access allowed');

class Satuan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('satuan_model', 'satuan_model');
		if (!$this->session->userdata('is_user_login')) {
			redirect('auth/login');
		} elseif ($this->session->userdata('is_user_login') == TRUE && $this->session->userdata('status') == 1) {
			redirect('dashboard');
		}
	}

	public function index()
	{
		$data['title'] = 'satuan list';
		$data['satuan'] = get_satuan();
		$data['layout'] = 'satuan/list_satuan';
		$this->load->view('layout', $data);
	}

	public function add()
	{
		if ($this->input->post('add_satuan')) {

			$this->validation('add');
		} else {
			$data['title'] = 'satuan add';
			$data['layout'] = 'satuan/add_satuan';
			$this->load->view('layout', $data);
		}
	}

	public function edit($id)
	{
		if ($this->input->post('edit_satuan')) {

			$this->validation('edit', $id);
		} else {
			$data['satuan'] = get_satuan_by_id($id);
			$data['title'] = 'satuan edit';
			$data['layout'] = 'satuan/edit_satuan';
			$this->load->view('layout', $data);
		}
	}

	private function validation($page, $id = 0)
	{
		$this->form_validation->set_rules(
			'satuan',
			'satuan',
			'trim|required',
			array(
				'required'    => '%s harus diisi!' //edited by wahid
			)
		);


		$this->form_validation->set_rules(
			'kode_satuan',
			'kode satuan',
			'trim|required',
			array(
				'required'    => '%s harus diisi!' //edited by wahid
			)
		);


		if ($this->form_validation->run() == FALSE) {

			if ($page == 'add') {
				$this->session->set_flashdata('abort', 'Kategori gagal di input!');

				$data['title'] = 'Add Kategori';
				$data['layout'] = 'satuan/add_satuan';
			} else {
				$this->session->set_flashdata('abort', 'Kategori gagal di input!');

				$data['kategori'] = get_kategori_by_id($id);
				$data['title'] = 'Edit Kategori';
				$data['layout'] = 'satuan/edit_satuan';
			}

			$this->load->view('layout', $data);
		} else {
			$data = array(
				'nama_satuan' => $this->security->xss_clean($this->input->post('satuan')),
				'kode_satuan' => $this->security->xss_clean($this->input->post('kode_satuan')),

				'created_at' => date('Y-m-d h:m:s')

			);

			$result = $this->satuan_model->insert_data($data, $id);

			if ($result) {
				$this->session->set_flashdata('message', 'Satuan sudah berhasil di input!');
				redirect(base_url('satuan'), 'refresh');
			} else {
				$this->session->set_flashdata('abort', 'Satuan gagal di input!');
				redirect(base_url('satuan/' . $page . ($id != 0) ? "/" . $id : ''), 'refresh');
			}
		}
	}

	public function delete($id = 0)
	{
		$this->satuan_model->delete_satuan($id);

		$this->session->set_flashdata('message', 'Satuan berhasil dihapus!');
		redirect(base_url('satuan'));
	}
}
