<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam_model extends CI_Model {

	public function create()
	{
		$data = array (
			'nip' => $this->input->post('nip'),
			'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
			'uang_pinjam' => $this->input->post('uang_pinjam'),
			'lama_pinjam' => $this->input->post('lama_pinjam'),
			'bukti_pinjam' => $this->input->post('bukti_pinjam')
		);
		$this->db->insert('pinjam',$data);
	}

	public function read()
	{
		//$a=$this->session->all_userdata();
		//var_dump($a);
		//exit;
		$query=$this->db->get('pinjam');
		return $query->result();
	}

	public function read_by($id)
	{
		$this->db->where('id_pinjam',$id);
		$query=$this->db->get('pinjam');
		return $query->row();
	}
}