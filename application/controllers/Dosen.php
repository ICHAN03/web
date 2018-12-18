 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function index()
	 {
	 	$this->load->view('welcome_messagger');
	 }
    public function data($pahrul=''){
		
		  echo "Hello sudara... "."<br>Nama saya pahrul ".$pahrul."<br>"."<br>"."salam lempar...";
		}
		}

	
