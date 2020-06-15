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

	public function obat_masuk($id)
	{
		if ($this->input->post('submit')) {

			$result = '';
			$jumlah = $this->input->post('stok');
			$stok = get_stok_by_id($id);
			$total = 0;
			if ($this->session->userdata('status') == 2) {

				if ($stok >= $jumlah) {
					$total = $stok - $jumlah;
					$harga_jual = get_harga_jual_by_id($id);
					$pendapatan = $jumlah * $harga_jual;

					$data = array(
						'stok' => $total
					);

					$data2 = array(
						'no_invoice' => $this->input->post('no_invoice'),
						'id_obat' => $id,
						'jumlah' => $jumlah,
						'status' => 1,
						'pendapatan' => $pendapatan,
						'created_at' => date('Y-m-d  h:m:s')
					);

					$result = $this->obat_model->update_stok($id, $data);
					$result2 = $this->obat_model->insert_laporan($data2);
				} else {
					$result = false;
					$result2 = false;
				}
			} elseif ($this->session->userdata('status') == 3) {
				$total = $stok + $jumlah;
				$harga_jual = get_harga_beli_by_id($id);
				$pendapatan = $jumlah * $harga_jual;
				$data = array(
					'stok' => $total
				);

				$data2 = array(
					'no_invoice' => $this->input->post('no_invoice'),
					'id_obat' => $id,
					'jumlah' => $jumlah,
					'status' => 2,
					'pendapatan' => $pendapatan,
					'created_at' => date('Y-m-d  h:m:s')
				);

				$result = $this->obat_model->update_stok($id, $data);
				$result2 = $this->obat_model->insert_laporan($data2);
			} else {
				$this->session->set_flashdata('abort', 'Anda tidak memiliki akses untuk melakukan aksi ini!');
				redirect(base_url('obat '));
			}

			if ($result && $result2) {
				$this->session->set_flashdata('message', 'Stok berhasil di update');
				redirect(base_url('obat'));
			} else {
				$this->session->set_flashdata('abort', 'Stok gagal di update');
				redirect(base_url('obat'));
			}
		} else {
			$data['title'] = 'obat list';
			$data['obat'] = get_obat();
			$data['layout'] = 'obat/list_obat';
			$this->load->view('layout', $data);
		}
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
			$string = str_replace('.', ',', $this->input->post('harga_beli')); // Replaces all spaces with hyphens.

			$harga_jual = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

			$string2 = str_replace('.', ',', $this->input->post('harga_beli'));

			$harga_beli = preg_replace('/[^A-Za-z0-9\-]/', '', $string2);

			$data = array(
				'kode_obat' => $this->security->xss_clean($this->input->post('kode_obat')),
				'nama_obat' => $this->security->xss_clean($this->input->post('nama_obat')),
				'id_satuan' => $this->security->xss_clean($this->input->post('id_satuan')),
				'id_kategori' => $this->security->xss_clean($this->input->post('id_kategori')),
				'harga_beli' => $this->security->xss_clean($harga_jual),
				'harga_jual' => $this->security->xss_clean($harga_beli),

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
