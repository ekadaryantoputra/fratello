<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view('login/index');
	}

	public function processLogin(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$login = $this->m_admin->login($user,$pass);
		
		if ($login) {	
			$this->session->set_userdata('username', $user);
			redirect('blog/index','refresh');
		}
		else{
			redirect(site_url('index'),'refresh');
		}
	}

	public function logout(){
		$this->session->unset_userdata(array('username'=>''));
		redirect('index','refresh');
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */