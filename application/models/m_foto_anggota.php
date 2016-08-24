<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_foto_anggota extends CI_Model {
	public function viewPhoto(){
		return $this->db->get('foto_anggota')->result();
	}
	public function uploadPhoto($data){
		$this->db->insert('foto_anggota', $data);
	}
}

/* End of file m_foto_anggota.php */
/* Location: ./application/models/m_foto_anggota.php */