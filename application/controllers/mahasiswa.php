<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function get_semester()
	{
		echo "Semester : 3 <br>";
	}
}