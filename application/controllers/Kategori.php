<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_model', 'kategori_model');
	}

	public function index()
	{
		$data['title'] = 'kategori';
		$data['kategoris'] = get_nama_kategori();
		$data['layout'] = 'kategori/list_kategori';
		$this->load->view('layout', $data);
	}

	public function add()
	{
		if ($this->input->post('add_kategori')) {

			$this->validation('add');
		} else {
			$data['title'] = 'kategori';
			$data['layout'] = 'kategori/add_kategori';
			$this->load->view('layout', $data);
		}
	}

	public function edit($id)
	{
		if ($this->input->post('edit_kategori')) {

			$this->validation('edit', $id);
		} else {
			$data['title'] = 'kategori';
			$data['kategori'] = get_kategori_by_id($id);
			$data['layout'] = 'kategori/edit_kategori';
			$this->load->view('layout', $data);
		}
	}

	private function validation($page, $id = 0)
	{
		$this->form_validation->set_rules(
			'kategori',
			'kategori',
			'trim|required',
			array(
				'required'    => '%s harus diisi!' //edited by wahid
			)
		);


		$this->form_validation->set_rules(
			'kode_kategori',
			'kode kategori',
			'trim|required',
			array(
				'required'    => '%s harus diisi!' //edited by wahid
			)
		);


		if ($this->form_validation->run() == FALSE) {

			if ($page == 'add') {
				$this->session->set_flashdata('abort', 'Kategori gagal di input!');

				$data['title'] = 'Add Kategori';
				$data['layout'] = 'kategori/add_kategori';
			} else {
				$this->session->set_flashdata('abort', 'Kategori gagal di input!');

				$data['kategori'] = get_kategori_by_id($id);
				$data['title'] = 'Edit Kategori';
				$data['layout'] = 'kategori/edit_kategori';
			}

			$this->load->view('layout', $data);
		} else {
			$data = array(
				'nama_kategori' => $this->security->xss_clean($this->input->post('kategori')),
				'kode_kategori' => $this->security->xss_clean($this->input->post('kode_kategori')),

				'created_at' => date('Y-m-d  h:m:s')

			);

			$result = $this->kategori_model->insert_data($data, $id);

			if ($result) {
				$this->session->set_flashdata('message', 'Kategori sudah berhasil di input!');
				redirect(base_url('kategori'), 'refresh');
			} else {
				$this->session->set_flashdata('abort', 'Kategori gagal di input!');
				redirect(base_url('kategori/' . $page . ($id != 0) ? "/" . $id : ''), 'refresh');
			}
		}
	}

	public function delete($id = 0)
	{
		$this->kategori_model->delete_kategori($id);

		$this->session->set_flashdata('message', 'Kategori berhasil dihapus!');
		redirect(base_url('kategori'));
	}
}
