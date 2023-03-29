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

	public function validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('tipe_fakultas', 'Fakultas', 'required');
		$this->form_validation->set_rules('tipe_prodi', 'Prodi', 'required');

		if($this->form_validation->run())
			return TRUE;
		else
			return FALSE;
	}

	public function menyimpan($id)
	{
		$data = array (
			'uang_simpan' => $this->input->post('uang_simpan'),
			'bukti_simpan' => $this->input->post('bukti_simpan'),
			'anggota_id' => $id
		);
		$this->db->insert('simpan_uang',$data);

		$this->db->set('simpan','1');
		$this->db->where('id_anggota',$id);
		$this->db->update('anggota');
	}

	public function penyimpanan(){
		$this->db->join('anggota', 'id_anggota = anggota_id');
        $query = $this->db->get('simpan_uang');
        return $query->result();
	}

	// public function changephoto($bukti_bayar)
	// {
	// 	if($this->session->userdata('bukti_simpan') !== 'default.png')
	// 		unlink('./uploads/bukti/'.$this->session->userdata('bukti_simpan')); // Menghapus foto yang lama

	// 	$this->db->set('bukti_simpan', $bukti_simpan);							  // Mengupdate table user
	// 	// $this->db->where ('uang_simpan',$this->session->userdata('uang_simpan'));
	// 	return $this->db->update('simpan');
	// }
}