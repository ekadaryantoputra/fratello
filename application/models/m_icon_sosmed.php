<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_icon_sosmed extends CI_Model {
	
	public function viewIcon(){
		return $this->db->get('icon_sosmed')->result();
	}

	public function addIcon($data){
		$this->db->insert('icon_sosmed', $data);
	}

	public function edit($id){
		$this->db->where('id_icon', $id);
		return $this->db->get('icon_sosmed')->result();
	}

	public function editIcon($data,$id){
		$this->db->where('id_icon', $id);
		$this->db->update('icon_sosmed', $data);
	}

	public function deleteIcon($id){
		$this->db->where('id_icon', $id);
		$this->db->delete('icon_sosmed');
	}
}

/* End of file m_icon_sosmed.php */
/* Location: ./application/models/m_icon_sosmed.php */