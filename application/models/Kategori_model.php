<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{

	// registraion
	public function insert_data($data, $id = 0)
	{
		if ($id != 0) {
			$this->db->where('id_kategori', $id);
			$this->db->update('xx_kategori', $data);
			return true;
		} else {
			$this->db->insert('xx_kategori', $data);
			return true;
		}
	}

	public function delete_kategori($id)
	{
		$this->db->where('id_kategori', $id);
		$this->db->delete('xx_kategori');
		return true;
	}
}
