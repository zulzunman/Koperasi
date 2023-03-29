<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if(! $this->session->userdata('username')) redirect('auth/login');
        if($this->session->userdata('tipe') != 'Admin') redirect('welcome');
        $this->load->model('User_model');
    }

	public function index()
	{
		$data['user']=$this->User_model->read();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('user/user_list',$data);
		$this->load->view('templates/footer');
	}

	public function add()
	{
		if($this->input->post('submit')) {
			$this->User_model->create();
			if($this->db->affected_rows() > 0) {
			  $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert">Pengguna berhasil ditambahkan!</div>');
			} else {
			  $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Pengguna gagal ditambahkan!</div>');
			}
			redirect('user');
		}
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('user/user_form');
		$this->load->view('templates/footer');
	}

	public function edit($id)
	{
		if($this->input->post('submit')) {
			$this->User_model->update($id);
			if($this->db->affected_rows() > 0) {
			  $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert">Pengguna berhasil diperbarui!</div>');
			} else {
			  $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Pengguna gagal diperbarui!</div>');
			}
			redirect('user');
		}
		
		$data['use']=$this->User_model->read_by($id);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('user/user_form',$data);
		$this->load->view('templates/footer');
	}


	public function delete($id)
	{
		$this->User_model->delete($id);
		if($this->db->affected_rows() > 0) {
		  $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert">Pengguna berhasil dihapus!</div>');
		} else {
		  $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Pengguna gagal dihapus!</div>');
		}
		redirect('user');
	}

	public function reset($type)
    {
        $this->User_model->reset($type);
		if($this->db->affected_rows() > 0){
			// $this->session->set_flashdata('msg','<p  style="color:green">Password Succesfully Reseted</p>');
			$this->session->set_flashdata('msg','<div class="alert alert-success" role="alert">Password berhasil direset</div>');
		}else{
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Password gagal reset</div>');
		}
		redirect('User');
    }
}