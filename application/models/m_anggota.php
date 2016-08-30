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
		$last_id = $this->db->insert_id();
		//return $last_id;
		$data_sosmedAnggota = array(
				'nama_sosmed'=>$this->input->post('nama_sosmed'),
				'id_anggota'=>$last_id,
				'id_icon'=>$this->input->post('id_icon')
			);
		
		$this->db->insert('sosmed_anggota', $data_sosmedAnggota);

	}

	public function edit($id){
		$this->db->select('*');
		$this->db->from('anggota');
		$this->db->join('sosmed_anggota', 'anggota.id_anggota = sosmed_anggota.id_anggota');
		$this->db->where('sosmed_anggota.id_anggota ', $id);
		return $this->db->get()->result();
	}

	public function editAnggota($data,$id){
		$this->db->where('id_anggota',$id);
		$this->db->update('anggota',$data);

		$this->db->where('id_anggota',$id);
		$data_sosmedAnggota = array(
				'nama_sosmed'=>$this->input->post('nama_sosmed'),
				'id_icon'=>$this->input->post('id_icon')
			);
		
		$this->db->update('sosmed_anggota', $data_sosmedAnggota);
	}

	public function deleteAnggota($id){
			$this->db->query("DELETE anggota.*,sosmed_anggota.* FROM anggota,sosmed_anggota 
								WHERE anggota.id_anggota='".$id."' AND sosmed_anggota.id_anggota='".$id."' ");
		}

	public function getIdAnggota($id){
		$query = $this->db->query("select * from anggota where id_anggota='".$id."'");
		return $query->result();
	}

	public function addPhoto($photo){
		$this->db->insert('foto_anggota', $photo);
	}
}

/* End of file m_anggota.php */
/* Location: ./application/models/m_anggota.php */