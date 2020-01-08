<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register_model extends CI_Model {

 	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


 	public function register($data)
 	{
 		$this->db->insert('mahasiswa', $data);
 	}

 }