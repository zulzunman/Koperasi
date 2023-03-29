<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if(! $this->session->userdata('username')) redirect('auth/login');
        $this->load->model('Pinjam_model');
        $this->load->model('Simpan_model');
        $this->load->library('form_validation');
    }

     public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = site_url('pinjam/index'); // Menunjukkan posisi mana untuk paggingnya
		$config['total_rows'] = $this->db->count_all('pinjam'); // Menghitung jumlah data di table cats
		$config['per_page'] = 2; // Mau berapa data perhalaman?

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['first_link'] = '<div class="page-link">First</div>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = '<div class="page-link">Last</div>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$config['prev_link'] = '<div class="page-link">Previous</div>';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['next_link'] = '<div class="page-link">Next</div>';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$this->pagination->initialize($config); // Menginisialisasi

		$limit=$config['per_page'];  // Lima data
		$start=$this->uri->segment(3)?$this->uri->segment(3):0;


		$data['i']=$start+1; 
		$data['pinjam']=$this->Pinjam_model->read($limit,$start);
		$data['saldo']=$this->Simpan_model->saldo();                                                         
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('pinjam/pinjam_list',$data);
		$this->load->view('templates/footer');

	}

	// public function index()
	// {
	// 	$data['pinjam']=$this->Pinjam_model->read();

	// 	$this->load->view('templates/header');
	// 	$this->load->view('templates/sidebar');
	// 	$this->load->view('templates/topbar');
	// 	$this->load->view('pinjam/pinjam_list',$data);
	// 	$this->load->view('templates/footer');
	// }

	public function add()
	{
		if($this->input->post('submit')) {
			$this->Pinjam_model->create();
			if($this->db->affected_rows() > 0) {
			  $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert">Peminjaman uang berhasil!</div>');
			} else {
			  $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Peminjaman uang gagal!</div>');
			}
			redirect('pinjam');
		}

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('pinjam/pinjam_form');
		$this->load->view('templates/footer');
	}

	public function angsur($id)
	{
		if($this->input->post('submit')) 
		{
			$this->Pinjam_model->angsur($id);
			if($this->db->affected_rows() > 0) {
			  //$this->session->set_flashdata('msg','<div class="alert alert-success" role="alert">Uang berhasil diangsur!</div>');
		    } else {
			  //$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Uang gagal diangsur!</div>');
			}
			redirect('pinjam');
		}

		$data['kate']=$this->Pinjam_model->read_by($id);
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('pinjam/angsur_uang',$data);
		$this->load->view('templates/footer');

	}

	public function angsuran()
	{
		$this->load->library('pagination');

		$config['base_url'] = site_url('pinjam/angsuran'); // Menunjukkan posisi mana untuk paggingnya
		$config['total_rows'] = $this->db->count_all('angsur_uang'); // Menghitung jumlah data di table cats
		$config['per_page'] = 2; // Mau berapa data perhalaman?

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['first_link'] = '<div class="page-link">First</div>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = '<div class="page-link">Last</div>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$config['prev_link'] = '<div class="page-link">Previous</div>';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['next_link'] = '<div class="page-link">Next</div>';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$this->pagination->initialize($config); // Menginisialisasi

		$limit=$config['per_page'];  // Lima data
		$start=$this->uri->segment(3)?$this->uri->segment(3):0;


		$data['i']=$start+1; 
		$data['angsuran']=$this->Pinjam_model->angsuran($limit,$start);   
		$data['saldo']=$this->Simpan_model->saldo();                                                      
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('pinjam/daftar_angsur_uang',$data);
		$this->load->view('templates/footer');

	}

	// public function angsuran()
	// {
	// 	// if($this->session->userdata('usertype') != 'Manager') redirect('welcome');
	// 	$data['angsuran']=$this->Pinjam_model->angsuran();
		
	// 	$this->load->view('templates/header');
	// 	$this->load->view('templates/sidebar');
	// 	$this->load->view('templates/topbar');
	// 	$this->load->view('pinjam/daftar_angsur_uang',$data);
	// 	$this->load->view('templates/footer');
	// }

}