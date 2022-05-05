<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model {

	public function create()
	{
		$data = array (
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'jabatan' => $this->input->post('jabatan'),
			'tipe_fakultas' => $this->input->post('tipe_fakultas'),
			'tipe_prodi' => $this->input->post('tipe_prodi')
		);
		$this->db->insert('anggota',$data);
	}

	public function read()
	{
		$query=$this->db->get('anggota');
		return $query->result();
	}

	public function read_by($id)
	{
		$this->db->where('id_anggota',$id);
		$query=$this->db->get('anggota');
		return $query->row();
	}

	public function update($id)
	{
		$data = array (
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'jabatan' => $this->input->post('jabatan'),
			'tipe_fakultas' => $this->input->post('tipe_fakultas'),
			'tipe_prodi' => $this->input->post('tipe_prodi')

		);
		$this->db->where('id_anggota',$id);
		$this->db->update('anggota',$data);
	}


	public function delete($id)
	{
		$this->db->where('id_anggota',$id);
		$this->db->delete('anggota');
	}
}