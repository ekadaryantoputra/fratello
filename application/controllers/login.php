<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('login/index');
	}

	public function processLogin(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$log = $this->m_login->login($username,$password);

		if ($log) {
			echo "sip";
			//$this->load->view('');
		}
		else{
			echo "salah";
			//redirect(site_url(''),'refresh');
		}
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */