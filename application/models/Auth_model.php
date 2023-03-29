<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function getuser($username)
	{
		$this->db->where('username',$username);
		return $this->db->get('user')->row();
	}

	public function changepass()
	{
		$this->db->set('password', password_hash($this->input->post('newpassword'), PASSWORD_DEFAULT));
		$this->db->where('username',$this->session->userdata('username'));
		return $this->db->update('user');
	}

	public function changephoto($photo)
	{
		if($this->session->userdata('photo') !== 'default.png')
			unlink('./uploads/user/'.$this->session->userdata('photo')); // Menghapus foto yang lama

		$this->db->set('photo', $photo);							  // Mengupdate table user
		$this->db->where ('username',$this->session->userdata('username'));
		return $this->db->update('user');
	}
}