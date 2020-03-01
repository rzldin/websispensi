<?php


class Status_proposal extends CI_Controller
{

	public function menolak($id)
	{
		$data['status'] = 2;

	 	$this->db->trans_start();

	 	$this->db->where('id_proposal', $id);
	 	$this->db->update('proposal', $data);

	 	$this->db->trans_complete();

	 	if ($this->db->trans_status() === FALSE)
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Gagal Diubah!
					<button type="button" class="close" data-dismiss="alert">

					</button>
					</div>');
					redirect('administrator/pengajuan_judul');	
				} else 
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil Diubah!
					<button type="button" class="close" data-dismiss="alert">
					</button>
					</div>');
					redirect('dosen/pengajuan');	
				}



	}



	public function terima($id)
	{
		$data['status'] = 1;

	 	$this->db->trans_start();

	 	$this->db->where('id_proposal', $id);
	 	$this->db->update('proposal', $data);

	 	$this->db->trans_complete();

	 	if ($this->db->trans_status() === FALSE)
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Gagal Diubah!
					<button type="button" class="close" data-dismiss="alert">

					</button>
					</div>');
					redirect('dosen/pengajuan');	
				} else 
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil Diubah!
					<button type="button" class="close" data-dismiss="alert">
					</button>
					</div>');
					redirect('dosen/pengajuan');	
				}



	}

}