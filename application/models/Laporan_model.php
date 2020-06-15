<?php defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{

	// registraion
	public function list_laporan()
	{

		$this->db->select('xx_laporan.*, xx_obat.nama_obat, xx_obat.stok, xx_obat.id_satuan');
		$this->db->from('xx_laporan');
		$this->db->join('xx_obat', 'xx_obat.id_obat = xx_laporan.id_obat');

		$this->db->order_by('xx_laporan.created_at', 'desc');
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result_array();
	}
}
