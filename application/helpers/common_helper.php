<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// -----------------------------------------------------------------------------
// Get industry name by id

// -----------------------------------------------------------------------------
// Get category name by id
function get_kategori_by_id($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_kategori', array('id_kategori' => $id))->row_array();
}

// -----------------------------------------------------------------------------
// Get category name by id
function get_stok_by_id($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_obat', array('id_obat' => $id))->row_array()['stok'];
}

// -----------------------------------------------------------------------------
// Get category name by id
function get_harga_jual_by_id($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_obat', array('id_obat' => $id))->row_array()['harga_jual'];
}

function get_harga_beli_by_id($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_obat', array('id_obat' => $id))->row_array()['harga_beli'];
}

// -----------------------------------------------------------------------------
// Get category name by id
function get_satuan_by_id($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_satuan', array('id_satuan' => $id))->row_array();
}

// -----------------------------------------------------------------------------
// Get category name by id
function get_nama_satuan_by_id($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_satuan', array('id_satuan' => $id))->row_array()['kode_satuan'];
}

function get_nama_kategori_by_id($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_kategori', array('id_kategori' => $id))->row_array()['nama_kategori'];
}

// -----------------------------------------------------------------------------
// Get category name by id
function get_nama_kategori()
{
	$CI = &get_instance();
	return $CI->db->get('xx_kategori')->result_array();
}
// -----------------------------------------------------------------------------
// Get category name by id
function get_satuan()
{
	$CI = &get_instance();
	return $CI->db->get('xx_satuan')->result_array();
}

function get_obat()
{
	$CI = &get_instance();
	return $CI->db->get('xx_obat')->result_array();
}

// -----------------------------------------------------------------------------
// Get category name by id
function get_jenis_kelamin()
{
	$CI = &get_instance();
	return $CI->db->get('xx_jenis_kelamin')->result_array();
}

function get_obat_by_id($id)
{
	$CI = &get_instance();
	return $CI->db->get_where('xx_obat', array('id_obat' => $id))->row_array();
}
