<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	public function create()
	{
		$data = array (
			'fakultas' => $this->input->post('fakultas'),
			'prodi' => $this->input->post('prodi')
		);
		$this->db->insert('kategori',$data);
	}

	// public function read($limit,$start) 
	// // Limit = Membatasi query perhalaman (berapa jumlah data yang akan ditampilkan?)
	// // Start = Akan dimulai setelah data keberapa? start 10, maka dimulai dari 11
	// {
	// 	$this->db->limit($limit,$start);
	// 	// $this->db->where('sold_037','0'); // Agar kucing yang sudah terjual tidak muncul
	// 	$query=$this->db->get('kategori');
	// 	return $query->result();
	// }

	public function read()
	{
		$query=$this->db->get('kategori');
		return $query->result();
	}

	public function read_by($id)
	{
		$this->db->where('id_kategori',$id);
		$query=$this->db->get('kategori');
		return $query->row();
	}


	public function update($id)
	{
		$data = array (
			'fakultas' => $this->input->post('fakultas'),
			'prodi' => $this->input->post('prodi')
		);
		$this->db->where('id_kategori',$id);
		$this->db->update('kategori',$data);
	}


	public function delete($id)
	{
		$this->db->where('id_kategori',$id);
		$this->db->delete('kategori');
	}
}