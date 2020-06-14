<?php defined('BASEPATH') or exit('No direct script access allowed');

class Obat_model extends CI_Model
{

	// registraion
	public function insert_data($data, $id = 0)
	{
		if ($id != 0) {
			$this->db->where('id_obat', $id);
			$this->db->update('xx_obat', $data);
			return true;
		} else {
			$this->db->insert('xx_obat', $data);
			return true;
		}
	}

	public function delete($id)
	{
		$this->db->where('id_obat', $id);
		$this->db->delete('xx_obat');
		return true;
	}
}
