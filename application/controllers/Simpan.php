<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simpan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Simpan_model');
    }

	public function index()
	{
		$data['simpan']=$this->Simpan_model->read();
		$this->load->view('simpan/simpan_list',$data);
	}

	public function add()
	{
		if($this->input->post('submit')) {
			$this->Simpan_model->create();
			if($this->db->affected_rows() > 0) {
			  $this->session->set_flashdata('msg','<p style="color:green">Penyimpanan uang berhasil!</p>');
			} else {
			  $this->session->set_flashdata('msg','<p style="color:red">Penyimpanan uang gagal!</p>');
			}
			redirect('simpan');
		}
		
		$this->load->view('simpan/simpan_form');
	}

}