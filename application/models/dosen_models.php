<?php
defined('BASEPATH')OR exit('No direct script access allowed');
 
 class dosen_models extends CI_Model
 {
 	
 	public function all()
 	{
 		return $this->db->get('dosen')->result();
 	}

	public function create($objek)
	{
		return $this->db->insert('dosen',$objek);
	}
 }