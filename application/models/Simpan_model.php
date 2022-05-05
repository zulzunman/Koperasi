<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simpan_model extends CI_Model {

	public function create()
	{
		$data = array (
			'nip' => $this->input->post('nip'),
			'tanggal_simpan' => $this->input->post('tanggal_simpan'),
			'uang_simpan' => $this->input->post('uang_simpan'),
			'bukti_simpan' => $this->input->post('bukti_simpan')
		);
		$this->db->insert('simpan',$data);
	}

	public function read()
	{
		$query=$this->db->get('simpan');
		return $query->result();
	}

	public function read_by($id)
	{
		$this->db->where('id_simpan',$id);
		$query=$this->db->get('simpan');
		return $query->row();
	}
}