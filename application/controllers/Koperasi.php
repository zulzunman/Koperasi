<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koperasi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Koperasi_model');
    }

	public function index()
	{
		$data['koperasi']=$this->Koperasi_model->read();
		$this->load->view('koperasi/koperasi_list',$data);
	}

	public function add()
	{
		if($this->input->post('submit')) {
			$this->Koperasi_model->create();
			if($this->db->affected_rows() > 0) {
			  $this->session->set_flashdata('msg','<p style="color:green">Mahasiswa successfully added!</p>');
			} else {
			  $this->session->set_flashdata('msg','<p style="color:red">Mahasiswa add failed!</p>');
			}
			redirect('koperasi');
		}
		
		$this->load->view('koperasi/koperasi_form');
	}

	public function edit($id)
	{
		if($this->input->post('submit')) {
			$this->Koperasi_model->update($id);
			if($this->db->affected_rows() > 0) {
			  $this->session->set_flashdata('msg','<p style="color:grey">Mahasiswa successfully updated!</p>');
			} else {
			  $this->session->set_flashdata('msg','<p style="color:red">Mahasiswa update failed!</p>');
			}
			redirect('koperasi');
		}
		
		$data['koper']=$this->Koperasi_model->read_by($id);
		$this->load->view('koperasi/koperasi_form',$data);
	}


	public function delete($id)
	{
		$this->Koperasi_model->delete($id);
		if($this->db->affected_rows() > 0) {
		  $this->session->set_flashdata('msg','<p style="color:orange">Mahasiswa successfully deleted!</p>');
		} else {
		  $this->session->set_flashdata('msg','<p style="color:red">Mahasiswa delete failed!</p>');
		}
		redirect('koperasi');
	}
}