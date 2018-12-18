<?php
defined('BASEPATH')OR exit('No direct script access allowed');
 
 class Dosen extends CI_Controller
 {
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('dosen_models');
 	}	
 	public function index()
 	{
 		$data['judul'] = 'Dosen';
 		$data['sub_judul'] = 'Dosen';
 		$data['halaman'] = 'admin/v_dosen';
 		$data['isi_tabel'] = $this->dosen_models->all();
 		$this->load->view('admin/v_template',$data);
 	}
 	public function tambah()
 	{
 		$data['judul'] = 'Dasboard';
 		$data['sub_judul'] = 'Tambah Data';
 		$data['halaman'] = 'admin/v_dosen_tambah';
 		
 		$this->load->view('admin/v_template',$data);
 	}
	public function prosesdosen(){
			$nik = $this->input->post('nik');
			$nama = $this->input->post('nama_dosen');
			$alamat = $this->input->post('Alamat');

			$objek = array(
				'nik' => $nik,
				'nama_dosen' => $nama,
				'alamat' => $alamat
			);
			if ($this->dosen_models->create($objek)) {
				//echo 'Berhasil';
				$this->session->set_flashdata('info','Data Berhasil Disimpan !');
				redirect('admin/pengumuman');
			}else{
				//echo 'Gagal';
				$this->session->set_flashdata('info','Data Gagal Disimpan !');
				redirect('admin/pengumuman');
			}
	}

 }
 ?>