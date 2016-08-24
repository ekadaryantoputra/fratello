<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_blog extends CI_Model {
	
	public function viewBlog(){
		return $this->db->get('blog')->result();
	}

	public function addBlog($data){
		$this->db->insert('blog', $data);
	}

	public function edit($id){
		$this->db->where('id_blog', $id);
		return $this->db->get('blog')->result();
	}

	public function editBlog($data,$id){
		$this->db->where('id_blog', $id);
		$this->db->update('blog', $data);
	}
	public function deleteBlog($id){
		$this->db->where('id_blog', $id);
		$this->db->delete('blog');
	}
}

/* End of file m_blog.php */
/* Location: ./application/models/m_blog.php */