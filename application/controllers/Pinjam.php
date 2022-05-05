<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Pinjam_model');
    }

	public function index()
	{
		$data['pinjam']=$this->Pinjam_model->read();
		$this->load->view('pinjam/pinjam_list',$data);
	}

	public function add()
	{
		if($this->input->post('submit')) {
			$this->Pinjam_model->create();
			if($this->db->affected_rows() > 0) {
			  $this->session->set_flashdata('msg','<p style="color:green">Pinjam berhasil ditambahkan!</p>');
			} else {
			  $this->session->set_flashdata('msg','<p style="color:red">Pinjam gagal ditambahkan!</p>');
			}
			redirect('pinjam');
		}

		$data['pinj']=$this->Pinjam_model->read();
		$this->load->view('pinjam/pinjam_form', $data);
	}
}