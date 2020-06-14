<?php defined('BASEPATH') or exit('No direct script access allowed');

class Satuan_model extends CI_Model
{

	// registraion
	public function insert_data($data, $id = 0)
	{
		if ($id != 0) {
			$this->db->where('id_satuan', $id);
			$this->db->update('xx_satuan', $data);
			return true;
		} else {
			$this->db->insert('xx_satuan', $data);
			return true;
		}
	}

	public function delete_satuan($id)
	{
		$this->db->where('id_satuan', $id);
		$this->db->delete('xx_satuan');
		return true;
	}
}
