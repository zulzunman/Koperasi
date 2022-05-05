<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Anggota_model');
        $this->load->model('Kategori_model');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['anggota']=$this->Anggota_model->read();
		$this->load->view('anggota/anggota_list',$data);
	}

	public function add()
	{
		if($this->input->post('submit')) {
			$this->Anggota_model->create();
			if($this->db->affected_rows() > 0) {
			  $this->session->set_flashdata('msg','<p style="color:green">Anggota berhasil ditambahkan!</p>');
			} else {
			  $this->session->set_flashdata('msg','<p style="color:red">Anggota gagal ditambahkan!</p>');
			}
			redirect('anggota');
		}

		$data['kate']=$this->Kategori_model->read();
		$this->load->view('anggota/anggota_form', $data);
	}

	public function edit($id)
	{
		if($this->input->post('submit')) {
			$this->Anggota_model->update($id);
			if($this->db->affected_rows() > 0) {
			  $this->session->set_flashdata('msg','<p style="color:grey">Anggota berhasil diperbarui!</p>');
			} else {
			  $this->session->set_flashdata('msg','<p style="color:red">Anggota gagal diperbarui!</p>');
			}
			redirect('anggota');
		}
		
		$data['kate']=$this->Kategori_model->read();
		$data['ang']=$this->Anggota_model->read_by($id);
		$this->load->view('anggota/anggota_form',$data);
	}


	public function delete($id)
	{
		$this->Anggota_model->delete($id);
		if($this->db->affected_rows() > 0) {
		  $this->session->set_flashdata('msg','<p style="color:orange">Anggota berhasil dihapus!</p>');
		} else {
		  $this->session->set_flashdata('msg','<p style="color:red">Anggota gagal diperbarui!</p>');
		}
		redirect('anggota');
	}
}