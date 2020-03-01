<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {


	public function index()
	{
		if (ucwords($this->uri->segment(1)) == 'Login') {
			redirect('welcome','refresh');
		}
		$this->load->view('mahasiswa/mahasiswa_login');
	}











}	