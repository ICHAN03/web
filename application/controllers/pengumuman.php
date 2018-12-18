<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	

	public function wisuda($param = '')
	{
		$data['tanggal'] = '17 Maret 2017';
		$data['ketua'] = 'Ichan';
		$data['tambahan'] = $param;

		$this->load->view('v_pengumuman', $data);
	}
	public function detail()
	{
		$data['judul'] = 'Detail Pengumuman';

		$this->load->view('v_detail',$data);
	}
}