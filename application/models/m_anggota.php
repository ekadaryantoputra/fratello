<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anggota extends CI_Model {

	public function viewAnggota(){
		$this->db->from('anggota');
		$this->db->order_by("id_anggota", "asc");
		$query = $this->db->get(); 
		return $query->result();
	}

	public function addAnggota($data){
		$this->db->insert('anggota',$data);
	}

	public function edit($id){
		$this->db->where('id_anggota', $id);
		return $this->db->get('anggota')->result();
	}

	public function editAnggota($data,$id){
		$this->db->where('id_anggota',$id);
		$this->db->update('anggota',$data);
	}

	public function deleteAnggota($id){
		$this->db->where('id_anggota', $id);
		return $this->db->delete('anggota');
	}
}

/* End of file m_anggota.php */
/* Location: ./application/models/m_anggota.php */