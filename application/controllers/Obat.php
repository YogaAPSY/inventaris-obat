<?php defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('obat_model', 'obat_model');
	}

	public function index()
	{
		$data['title'] = 'obat list';
		$data['obat'] = get_obat();
		$data['layout'] = 'obat/list_obat';
		$this->load->view('layout', $data);
	}

	public function add()
	{
		if ($this->input->post('submit')) {

			$this->validation('add');
		} else {
			$data['satuan'] = get_satuan();
			$data['kategoris'] = get_nama_kategori();
			$data['title'] = 'obat add';
			$data['page'] = 'add';

			$data['layout'] = 'obat/form_obat';
			$this->load->view('layout', $data);
		}
	}

	public function edit($id)
	{
		if ($this->input->post('submit')) {

			$this->validation('edit', $id);
		} else {
			$data['satuan'] = get_satuan();
			$data['kategoris'] = get_nama_kategori();
			$data['title'] = 'obat edit';
			$data['obat'] = get_obat_by_id($id);
			$data['page'] = 'edit';
			$data['layout'] = 'obat/form_obat';
			$this->load->view('layout', $data);
		}
	}

	private function validation($page, $id = 0)
	{
		$this->form_validation->set_rules(
			'kode_obat',
			'Kode Obat',
			'trim|required',
			array(
				'required'    => '%s harus diisi!' //edited by wahid
			)
		);


		$this->form_validation->set_rules(
			'nama_obat',
			'Nama Obat',
			'trim|required',
			array(
				'required'    => '%s harus diisi!' //edited by wahid
			)
		);

		$this->form_validation->set_rules(
			'id_kategori',
			'Kategori',
			'trim|required',
			array(
				'required'    => '%s harus diisi!' //edited by wahid
			)
		);


		$this->form_validation->set_rules(
			'id_satuan',
			'Satuan',
			'trim|required',
			array(
				'required'    => '%s harus diisi!' //edited by wahid
			)
		);

		$this->form_validation->set_rules(
			'harga_beli',
			'Harga Beli',
			'trim|required',
			array(
				'required'    => '%s harus diisi!' //edited by wahid
			)
		);


		$this->form_validation->set_rules(
			'harga_jual',
			'Harga Jual',
			'trim|required',
			array(
				'required'    => '%s harus diisi!' //edited by wahid
			)
		);


		if ($this->form_validation->run() == FALSE) {

			if ($page == 'add') {
				$this->session->set_flashdata('abort', 'Obat gagal di input!');

				$data['title'] = 'Add Obat';
				$data['layout'] = 'obat/form_obat';
			} else {
				$this->session->set_flashdata('abort', 'Obat gagal di input!');

				$data['obat'] = get_obat_by_id($id);
				$data['title'] = 'Edit Obat';
				$data['layout'] = 'obat/form_obat';
			}

			$this->load->view('layout', $data);
		} else {
			$data = array(
				'kode_obat' => $this->security->xss_clean($this->input->post('kode_obat')),
				'nama_obat' => $this->security->xss_clean($this->input->post('nama_obat')),
				'id_satuan' => $this->security->xss_clean($this->input->post('id_satuan')),
				'id_kategori' => $this->security->xss_clean($this->input->post('id_kategori')),
				'harga_beli' => $this->security->xss_clean($this->input->post('harga_beli')),
				'harga_jual' => $this->security->xss_clean($this->input->post('harga_jual')),

				'created_at' => date('Y-m-d  h:m:s')

			);

			$result = $this->obat_model->insert_data($data, $id);

			if ($result) {
				$this->session->set_flashdata('message', 'Obat sudah berhasil di input!');
				redirect(base_url('obat'), 'refresh');
			} else {
				$this->session->set_flashdata('abort', 'Obat gagal di input!');
				redirect(base_url('obat/' . $page . ($id != 0) ? "/" . $id : ''), 'refresh');
			}
		}
	}

	public function delete($id = 0)
	{
		$this->obat_model->delete_kategori($id);

		$this->session->set_flashdata('message', 'Obat berhasil dihapus!');
		redirect(base_url('obat'));
	}
}
