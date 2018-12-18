<?php
defined('BASEPATH')OR exit('No direct script access allowed');
 
 class Mahasiswa_models extends CI_Model
 {
 	
 	public function all()
 	{
 		return $this->db->get('mahasiswa')->result();
 	}
 	public function create($objek)
	{
		return $this->db->insert('mahasiswa',$objek);
	}
 }