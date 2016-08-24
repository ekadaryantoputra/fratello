<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	
	public function login($username,$password){
		$data = array(
				'username'=>$username,
				'password'=>$password
			);
		
		$this->db->where($data);
		return $this->db->get('login')->result();
	}
}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */