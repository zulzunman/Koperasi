<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koperasi_model extends CI_Model {

	public function create()
	{
		$data = array (
			'nama_anggota' => $this->input->post('nama_anggota'),
			'alamat_anggota' => $this->input->post('alamat_anggota'),
			'asal_anggota' => $this->input->post('asal_anggota'),
			'jk_anggota' => $this->input->post('jk_anggota'),
			'umur_anggota' => $this->input->post('umur_anggota'),
			'jumlah_simpan' => $this->input->post('jumlah_simpan')
		);
		$this->db->insert('penyimpanan',$data);
	}

	public function read()
	{
		$query=$this->db->get('penyimpanan');
		return $query->result();
	}

	public function read_by($id)
	{
		$this->db->where('id_anggota',$id);
		$query=$this->db->get('penyimpanan');
		return $query->row();
	}


	public function update($id)
	{
		$data = array (
			'nama_anggota' => $this->input->post('nama_anggota'),
			'alamat_anggota' => $this->input->post('alamat_anggota'),
			'asal_anggota' => $this->input->post('asal_anggota'),
			'jk_anggota' => $this->input->post('jk_anggota'),
			'umur_anggota' => $this->input->post('umur_anggota'),
			'jumlah_simpan' => $this->input->post('jumlah_simpan')

		);
		$this->db->where('id_anggota',$id);
		$this->db->update('penyimpanan',$data);
	}


	public function delete($id)
	{
		$this->db->where('id_anggota',$id);
		$this->db->delete('penyimpanan');
	}
}