<?php
defined('BASEPATH')OR exit('No direct script access allowed');
 
 class Mahasiswa extends CI_Controller
 {
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('mahasiswa_models');
 	}	
 	public function index()
 	{
 		$data['judul'] = 'mahasiswa';
 		$data['sub_judul'] = 'mahasiswa';
 		$data['halaman'] = 'admin/v_mahasiswa';
 		$data['isi_tabel'] = $this->mahasiswa_models->all();
 		$this->load->view('admin/v_template',$data);
 	}
 	public function tambah()
 	{
 		$data['judul'] = 'Dasboard';
 		$data['sub_judul'] = 'Tambah Data';
 		$data['halaman'] = 'admin/v_mahasiswa_tambah';
 		
 		$this->load->view('admin/v_template',$data);
 	}
	public function proses_tambah(){
		$judul = $this->input->post('nim');
		$isi = $this->input->post('nama_mahasiswa');
		$penulis = $this->input->post('program_studi');

		$objek = array(
			'nim' => $judul,
			'nama_mahasiswa' => $isi,
			'program_studi' => $penulis
		);

		if ($this->mahasiswa_models->create($objek)) {
			//echo 'Berhasil';
			$this->session->set_flashdata('info','Data Berhasil Disimpan !');
			redirect('admin/Mahasiswa');
		}else{
			//echo 'Gagal';
			$this->session->set_flashdata('info','Data Gagal Disimpan !');
			redirect('admin/Mahasiswa');
		}
	}

 }
 ?>