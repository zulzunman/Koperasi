<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
    }

	public function index()
	{
		$data['kategori']=$this->Kategori_model->read();
		$this->load->view('kategori/kategori_list',$data);
	}

	public function add()
	{
		if($this->input->post('submit')) {
			$this->Kategori_model->create();
			if($this->db->affected_rows() > 0) {
			  $this->session->set_flashdata('msg','<p style="color:green">Kategori berhasil ditambahkan!</p>');
			} else {
			  $this->session->set_flashdata('msg','<p style="color:red">Kategori gagal ditambahkan!</p>');
			}
			redirect('kategori');
		}
		
		$this->load->view('kategori/kategori_form');
	}

	public function edit($id)
	{
		if($this->input->post('submit')) {
			$this->Kategori_model->update($id);
			if($this->db->affected_rows() > 0) {
			  $this->session->set_flashdata('msg','<p style="color:grey">Kategori berhasil diperbarui!</p>');
			} else {
			  $this->session->set_flashdata('msg','<p style="color:red">Kategori gagal diperbarui!</p>');
			}
			redirect('kategori');
		}
		
		$data['kate']=$this->Kategori_model->read_by($id);
		$this->load->view('kategori/kategori_form',$data);
	}


	public function delete($id)
	{
		$this->Kategori_model->delete($id);
		if($this->db->affected_rows() > 0) {
		  $this->session->set_flashdata('msg','<p style="color:orange">Kategori berhasil dihapus!</p>');
		} else {
		  $this->session->set_flashdata('msg','<p style="color:red">Kategori gagal dihapus!</p>');
		}
		redirect('kategori');
	}
}