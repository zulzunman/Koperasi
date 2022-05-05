<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['users']=$this->User_model->read();
		$this->load->view('user/user_list',$data);
	}

	public function add()
	{
		if($this->input->post('submit')) {
			$this->User_model->create();
			if($this->db->affected_rows() > 0) {
			  $this->session->set_flashdata('msg','<p style="color:green">User berhasil ditambahkan!</p>');
			} else {
			  $this->session->set_flashdata('msg','<p style="color:red">User gagal ditambahkan!</p>');
			}
			redirect('user');
		}

		$this->load->view('user/user_form');
	}

	public function edit($id)
	{
		if($this->input->post('submit')) {
			$this->User_model->update($id);
			if($this->db->affected_rows() > 0) {
			  $this->session->set_flashdata('msg','<p style="color:grey">User berhasil diperbarui!</p>');
			} else {
			  $this->session->set_flashdata('msg','<p style="color:red">User gagal diperbarui!</p>');
			}
			redirect('user');
		}
		
		$data['user']=$this->User_model->read_by($id);
		$this->load->view('user/user_form',$data);
	}


	public function delete($id)
	{
		$this->User_model->delete($id);
		if($this->db->affected_rows() > 0) {
		  $this->session->set_flashdata('msg','<p style="color:orange">User berhasil dihapus!</p>');
		} else {
		  $this->session->set_flashdata('msg','<p style="color:red">User gagal diperbarui!</p>');
		}
		redirect('user');
	}
}