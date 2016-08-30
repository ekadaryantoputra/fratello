<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['sql']=$this->m_admin->viewAdmin();
		$this->load->view('admin/index',$data);
	}

	public function add(){
		$this->load->view('admin/add');
	}

	public function processAdd(){
		$object = array(
				'nama_lengkap'=>$this->input->post('nama_lengkap'),
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password')
			);

		$this->m_admin->insertAdmin($object);
		redirect('admin','refresh');
	}

	public function edit($id){
		$data['sql']=$this->m_admin->getIdAdmin($id);
		$this->load->view('admin/edit',$data);
	}

	public function processEdit($id){
		$object = array(
				'nama_lengkap'=>$this->input->post('nama_lengkap'),
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password')
			);

		$this->m_admin->editAdmin($id,$object);
		redirect('admin','refresh');
	}

	public function delete($id){
		$this->m_admin->deleteAdmin($id);
		redirect('admin','refresh');
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */