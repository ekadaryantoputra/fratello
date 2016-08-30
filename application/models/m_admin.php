<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
	public function viewAdmin(){
		return $this->db->get('admin')->result();
	}

	public function insertAdmin($object){
		$this->db->insert('admin', $object);
	}

	public function getIdAdmin($id){
		$this->db->where('id_admin', $id);
		return $this->db->get('admin')->result();
	}

	public function editAdmin($id,$object){
		$this->db->where('id_admin', $id);
		$this->db->update('admin', $object);
	}

	public function deleteAdmin($id){
		$this->db->where('id_admin', $id);
		$this->db->delete('admin');
	}

	public function login($user,$pass){
		$data = array(
				'username'=>$user,
				'password'=>$pass
			);

		$this->db->where($data);
		return $this->db->get('admin')->result();
	}
}

/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */