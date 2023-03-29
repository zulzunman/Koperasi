<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simpan_model extends CI_Model {

	public function create()
	{
		$config['upload_path']          = './bukti/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 'max';
        $config['max_width']            = 'max';
        $config['max_height']           = 'max';

        $this->load->library('upload', $config);

        $this->upload->do_upload('bukti_simpan');

		$data = array (
			'nip' => $this->input->post('nip'),
			'tanggal_simpan' => $this->input->post('tanggal_simpan'),
			'uang_simpan' => $this->input->post('uang_simpan'),
			'bukti_simpan' => $this->upload->data('file_name')
		);
		$this->db->insert('simpan',$data);

	}

	// public function create()
	// {
	// 	$data = array (
	// 		'nip' => $this->input->post('nip'),
	// 		'tanggal_simpan' => $this->input->post('tanggal_simpan'),
	// 		'uang_simpan' => $this->input->post('uang_simpan'),
	// 		'bukti_simpan' => $this->input->post('bukti_simpan')
	// 	);
	// 	$this->db->insert('simpan',$data);
	// }

 
	public function read($limit,$start)
	{
		if ($this->session->userdata('tipe')=='Admin') {
			$this->db->limit($limit,$start);
			$query=$this->db->get('simpan');
		} else {
			$a=$this->session->all_userdata();
			$this->db->where('nip',$a['nip']);
			$query=$this->db->get('simpan');	
		}
		return $query->result();
	}

	// public function read()
	// {
	// 	if ($this->session->userdata('tipe')=='Admin') {
	// 		$query=$this->db->get('simpan');
	// 	} else {
	// 		$a=$this->session->all_userdata();
	// 		$this->db->where('nip',$a['nip']);
	// 		$query=$this->db->get('simpan');	
	// 	}
	// 	return $query->result();
	// }

	public function read_by($id)
	{
		$this->db->where('id_simpan',$id);
		$query=$this->db->get('simpan');
		return $query->row();
	}

	public function saldo()
	{
		// $data=$this->db
  //           ->select_sum('uang_angsur')
  //           ->from('angsur_uang')
  //           ->get();
		// 	$totalangsur =  $data->result_array();
		// 	$totalangsur = $totalangsur[0]['uang_angsur'];
		if ($this->session->userdata('tipe')=='Admin') {
			$data=$this->db
            ->select_sum('uang_pinjam')
            ->from('pinjam')
            ->get();
		} else {
			$data=$this->db
            ->select_sum('uang_pinjam')
            ->from('pinjam')
            ->where('nip',$this->session->nip)
            ->get();
		}
		$dataPinjam =  $data->result_array();
        $dataPinjam = $dataPinjam[0]['uang_pinjam'];
		$totalPinjam = $dataPinjam;

		if($this->session->userdata('tipe')=='Admin') {
        $dataSimpan = $this->db
            ->select_sum('uang_simpan')
            ->from('simpan')
            ->get();
        } else {
        	$dataSimpan = $this->db
            ->select_sum('uang_simpan')
            ->from('simpan')
            ->where('nip',$this->session->nip)
            ->get();
        }
        $totalSimpan =  $dataSimpan->result_array();
        $totalSimpan = $totalSimpan[0]['uang_simpan'];
        $saldo = $totalSimpan-$totalPinjam;

        $result = [
            'totalPinjam' => $totalPinjam,
            'totalSimpan' => $totalSimpan,
            'saldo' => $saldo,
        ];
		return $result;
	} 

}