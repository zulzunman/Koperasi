<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam_model extends CI_Model {

	public function create()
	{
		$config['upload_path']          = './bukti_pinjam/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 'max';
        $config['max_width']            = 'max';
        $config['max_height']           = 'max';

        $this->load->library('upload', $config);

        $this->upload->do_upload('bukti_pinjam');

		$data = array (
			'nip' => $this->input->post('nip'),
			'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
			'uang_pinjam' => $this->input->post('uang_pinjam'),
			'lama_pinjam' => $this->input->post('lama_pinjam'),
			'bukti_pinjam' => $this->upload->data('file_name')
		);
		$this->db->insert('pinjam',$data);
	}

	// public function create()
	// {
	// 	$data = array (
	// 		'nip' => $this->input->post('nip'),
	// 		'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
	// 		'uang_pinjam' => $this->input->post('uang_pinjam'),
	// 		'lama_pinjam' => $this->input->post('lama_pinjam'),
	// 		'bukti_pinjam' => $this->input->post('bukti_pinjam')
	// 	);
	// 	$this->db->insert('pinjam',$data);
	// }

	public function read($limit,$start)
	{
		if ($this->session->userdata('tipe')=='Admin') {
			$this->db->limit($limit,$start);
			$query=$this->db->get('pinjam');
		} else {
			$a=$this->session->all_userdata();
			$this->db->where('nip',$a['nip']);
			$query=$this->db->get('pinjam');	
		}
		return $query->result();
	}

	public function read_by($id)
	{
		$this->db->where('id_pinjam',$id);
		$query=$this->db->get('pinjam');
		return $query->row();
	}

	public function angsur($id)
	{
		$config['upload_path']          = './bukti_angsur/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 'max';
        $config['max_width']            = 'max';
        $config['max_height']           = 'max';

        $this->load->library('upload', $config);

        $this->upload->do_upload('bukti_angsur');

		$data = array (
			'uang_angsur' => $this->input->post('uang_angsur'),
			'bukti_angsur' => $this->upload->data('file_name'),
			// 'sisa_angsur' => $this->input->post('sisa_angsur'),
			'pinjam_id' => $id
		);
		$this->db->insert('angsur_uang',$data);
		$sisa = $this->input->post('pinjaman')-$this->input->post('uang_angsur');
		$this->db->set('uang_pinjam',$sisa);
		$this->db->where('id_pinjam',$id);
		$this->db->update('pinjam');
	}

	// public function angsur($id)
	// {
	// 	$data = array (
	// 		'uang_angsur' => $this->input->post('uang_angsur'),
	// 		'bukti_angsur' => $this->input->post('bukti_angsur'),
	// 		// 'sisa_angsur' => $this->input->post('sisa_angsur'),
	// 		'pinjam_id' => $id
	// 	);
	// 	$this->db->insert('angsur_uang',$data);

	// 	$this->db->set('angsur','1');
	// 	$this->db->where('id_pinjam',$id);
	// 	$this->db->update('pinjam');
	// }

	public function angsuran($limit,$start){
		if ($this->session->userdata('tipe')=='Admin') {
			$this->db->limit($limit,$start);
			$this->db->join('pinjam', 'id_pinjam = pinjam_id');
			$query = $this->db->get('angsur_uang');
		} else {
			$a=$this->session->all_userdata();
			$this->db->where('nip',$a['nip']);
			$this->db->join('pinjam', 'id_pinjam = pinjam_id');
			$query = $this->db->get('angsur_uang');
		}
		return $query->result();
	}

	// public function angsuran(){
	// 	if ($this->session->userdata('tipe')=='Admin') {
	// 		$this->db->join('pinjam', 'id_pinjam = pinjam_id');
	// 		$query = $this->db->get('angsur_uang');
	// 	} else {
	// 		$a=$this->session->all_userdata();
	// 		$this->db->where('nip',$a['nip']);
	// 		$this->db->join('pinjam', 'id_pinjam = pinjam_id');
	// 		$query = $this->db->get('angsur_uang');
	// 	}
	// 	return $query->result();
	// }
}