<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function coba_lagi()
	{
		echo "Coba Controller <br>";
	}
}