<?php



class Jadwal extends CI_Controller
{
	
	//jadwal
	function viewJadwal($message = -1, $messageData=""){
		$data['active'] = "jadwal_skripsi";
		$this->load->model('jadwal_model');
		$data['jadwal_skripsi'] = $this->jadwal_model->get_all();
		$data['messageData'] = $messageData;
		$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/topbar', $data);
		$this->load->view('administrator/jadwal_sempro', $data);
		$this->load->view('template_administrator/footer');
	}
	function insertJadwal(){
		$data['active'] = "jadwal_skripsi";
		$this->load->model('jadwal_model');
		$message = $this->jadwal_model->insert($_POST);

		$this->viewJadwal($message, "dinputkan");
	}
	function formUpdatejadwal($kode_jadwal){
		$data['active'] = "jadwal_skripsi";
		$this->load->model('jadwal_model');
		$data['jadwal_skripsi'] = $this->jadwal_model->get($kode_jadwal);
		
		$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/topbar', $data);
		$this->load->view('administrator/penjadwalan/update_jadwal', $data);
		$this->load->view('template_administrator/footer');
	}
	function updateJadwal(){
		$data['user']	= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['active'] = "jadwal_skripsi";
		$this->load->model('jadwal_model');
		$message = $this->jadwal_model->update($_POST);

		$this->viewJadwal($message,"diupdate");
	}
	function deleteJadwal($kode_jadwal){
		$data['active'] = "jadwal_skripsi";
		$this->load->model('jadwal_model');
		$message = $this->jadwal_model->delete($kode_jadwal);

		$this->viewJadwal($message,"dihapus");
	}
}