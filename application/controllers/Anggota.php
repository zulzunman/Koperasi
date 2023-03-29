<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if(! $this->session->userdata('username')) redirect('auth/login');
        $this->load->model('Anggota_model');
        $this->load->model('Kategori_model');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['anggota']=$this->Anggota_model->read();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('anggota/anggota_list',$data);
		$this->load->view('templates/footer');
	}

	public function add()
	{
		if($this->input->post('submit')) {
			if($this->Anggota_model->validation()) {
				$this->Anggota_model->create();
				if($this->db->affected_rows() > 0) {
				  $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert">Anggota berhasil ditambahkan!</div>');
				} else {
				  $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Anggota gagal ditambahkan!</div>');
				}
				redirect('anggota');
			}
		}

		$data['kate']=$this->Kategori_model->read();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('anggota/anggota_form', $data);
		$this->load->view('templates/footer');
	}

	public function edit($id)
	{
		if($this->input->post('submit')) {
			if($this->Anggota_model->validation()) {
				$this->Anggota_model->update($id);
				if($this->db->affected_rows() > 0) {
				  $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert">Anggota berhasil diperbarui!</div>');
				} else {
				  $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Anggota gagal diperbarui!</div>');
				}
				redirect('anggota');
			}
		}
		
		$data['kate']=$this->Kategori_model->read();
		$data['ang']=$this->Anggota_model->read_by($id);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('anggota/anggota_form',$data);
		$this->load->view('templates/footer');
	}


	public function delete($id)
	{
		$this->Anggota_model->delete($id);
		if($this->db->affected_rows() > 0) {
		  $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert">Anggota berhasil dihapus!</div>');
		} else {
		  $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Anggota gagal dihapus!</div>');
		}
		redirect('anggota');
	}

	public function menyimpan($id)
	{
		if($this->input->post('submit')) 
		{
			$this->Anggota_model->menyimpan($id);
			if($this->db->affected_rows() > 0) {
			  $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert">Penyimpanan uang berhasil!</div>');
		    } else {
			  $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Penyimpanan uang gagal!</div>');
			}
			redirect('anggota');
		}

		$data['ang']=$this->Anggota_model->read_by($id);
		
		// $this->load->view('templates/header');
		// $this->load->view('templates/sidebar');
		// $this->load->view('templates/topbar');
		$this->load->view('anggota/simpan_uang',$data);
		// $this->load->view('templates/footer');

	}

	public function penyimpanan()
	{
		// if($this->session->userdata('usertype') != 'Manager') redirect('welcome');
		$data['penyimpanan']=$this->Anggota_model->penyimpanan();
		
		// $this->load->view('templates/header');
		// $this->load->view('templates/sidebar');
		// $this->load->view('templates/topbar');
		$this->load->view('anggota/daftar_simpan_uang',$data);
		// $this->load->view('templates/footer');
	}

	// private function upload()
	// {
	// 	$config['upload_path'] 		= './uploads/bukti';  // Tanda titik (mengikuti local host server / domainnya)
	// 	$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
	// 	$config['max_size']     	= '300';              // Kilobyte
	// 	$config['max_width'] 		= '1024'; 			  // Pixel
	// 	$config['max_height']	    = '768';			  // Pixel

	// 	$this->load->library('upload', $config);          // Memanggil library, sesuai dengan confignya
	// 	return $this->upload->do_upload('bukti_simpan');         // 'photo' sesuai dengan name input type di form photo nya
	// }

	
}