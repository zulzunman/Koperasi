<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function create()
	{
		$data = array (
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nip' => $this->input->post('nip'),
			'tipe' => $this->input->post('tipe')
		);
		$this->db->insert('user',$data);
	}

	public function read()
	{
		$query=$this->db->get('user');
		return $query->result();
	}

	public function read_by($id)
	{
		$this->db->where('id_user',$id);
		$query=$this->db->get('user');
		return $query->row();
	}


	public function update($id)
	{
		$data = array (
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nip' => $this->input->post('nip'),
			'tipe' => $this->input->post('tipe')
		);
		$this->db->where('id_user',$id);
		$this->db->update('user',$data);
	}


	public function delete($id)
	{
		$this->db->where('id_user',$id);
		$this->db->delete('user');
	}
}