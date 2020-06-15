<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{

	// registraion
	public function total($from)
	{

		$this->db->select('*');
		$this->db->from($from);
		$query = $this->db->get();
		return $query->num_rows();
	}
}
