<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model');

    }

	public function login()
	{
		if($this->input->post('login') && $this->validation('login')) {
			$login=$this->Auth_model->getuser($this->input->post('username'));
			if($login != NULL) {
				if(password_verify($this->input->post('password'), $login->password)) {
					$data = array (
						'username' => $login->username,
						'tipe' => $login->tipe,
						'nip' => $login->nip,
						'photo' => $login->photo
					);
					$this->session->set_userdata($data);
					redirect('welcome');
				}
			}
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Username atau Password salah! </div>');
			// $this->session->set_flashdata('msg','<p style="color:red">Invalid username or password! </p>');
		}
		$this->load->view('auth/form_login');
	}


	public function logout()
	{
		// $this->session->sess_destroy();
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->set_flashdata('msg','<div class="alert alert-success" role="alert">Anda berhasil keluar dari aplikasi! </div>');
		redirect('auth/login');
	}

	public function changepass()
	{
		// if($this->input->post('change') && $this->validation('change')) {
		//    redirect('welcome');
		// } 
		// $this->load->view('auth/form_password');
		if(! $this->session->userdata('username')) redirect('auth/login'); // Filter LOGIN
		if($this->input->post('change') && $this->validation('change')) {
			$change=$this->Auth_model->getuser($this->session->userdata('username'));
				if(password_verify($this->input->post('oldpassword'), $change->password)) { 
					// Mengecek apakah password lamanya benar atau salah
					if($this->Auth_model->changepass())
						$this->session->set_flashdata('msg','<div class="alert alert-success" role="alert">Password berhasil diubah!</div>'); // Jika password lamanya benar
					else
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Password gagal diubah!</div>'); // Jika querynya salah
				  } else {
					$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Password lama salah!</div>'); // Jika passwordnya salah
			}
		}
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('auth/form_password');
		$this->load->view('templates/footer');
	}

	public function changephoto()
	{
		if(! $this->session->userdata('username')) redirect('auth/login'); // Filter LOGIN
		$data['error']=''; 													  // Inisiasi variabel untuk pesan error, yang dihasilkan dari do_upload
		if($this->input->post('upload')) { 									  // Jika upload di form_photo diklik maka,
			if($this->upload()) { 											  // Jika sukses upload / Memanggil fungsi dalam class / controller yang sama (memanggil fungsi yang bawah)
				$this->Auth_model->changephoto($this->upload->data('file_name'));  		// Ubah data foto di database
				// Mengirim file name dgn fungsi change photo
				// Jika returnnya sukses, mengubah model (foto di db dgn foto yg baru) otomatis masuk ke folder
				// Fungsi changephoto = untuk mengubah data di table user default png, menjadi foto baru yg diupload oleh user, yg diambil dari fungsi bawaan uploadnya
				$this->session->set_userdata('photo',$this->upload->data('file_name')); 	// Update data session
				// Mengubah session foto yg lama dgn foto yg baru, lalu mengirim message
				$this->session->set_flashdata('msg','<div class="alert alert-success" role="alert">Foto berhasil diubah!</div>'); // Pesan sukses
			} else $data['error'] = $this->upload->display_errors(); 		  				// Jika gagal upload maka display error
		}
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('auth/form_photo', $data); // Jika berhasil maka menampilkan form foto nya
		$this->load->view('templates/footer');
	}


	private function upload()
	{
		$config['upload_path'] 		= './uploads/user';  // Tanda titik (mengikuti local host server / domainnya)
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size']     	= 'max';              // Kilobyte
		$config['max_width'] 		= 'max'; 			  // Pixel
		$config['max_height']	    = 'max';			  // Pixel

		$this->load->library('upload', $config);          // Memanggil library, sesuai dengan confignya
		return $this->upload->do_upload('photo');         // 'photo' sesuai dengan name input type di form photo nya
	}

	public function validation($type)
	{
		$this->load->library('form_validation');

		if($type=='login') {
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
		} else {
			$this->form_validation->set_rules('oldpassword', 'Old Password', 'required');
			$this->form_validation->set_rules('newpassword', 'New Password', 'required');
		}

		if($this->form_validation->run())
			return TRUE;
		else
			return FALSE;
	}

}
