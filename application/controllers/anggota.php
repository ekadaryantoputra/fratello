<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
	}
	public function index(){
		$data['sql']=$this->m_anggota->viewAnggota();
		$this->load->view('anggota/view',$data);
	}
	public function add(){
		$this->load->view('anggota/add');
	}
	public function processAdd(){
		$nmfile = "IMG".time();
		$config['upload_path'] = './assets/photo_anggota/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2048'; //in kb
		$config['max_width']  = '1024';
		$config['max_height']  = '1024';
		$config['file_name'] = $nmfile;
 
		$this->upload->initialize($config);
 
		//if upload failed
		if (!$this->upload->do_upload('photo')){
			$this->upload->display_errors();
			echo $this->upload->display_errors();
		//if upload success
		}else{
			$gbr = $this->upload->data();
			$data = array(
					'id_anggota' => $this->input->post('id'),
					'nama_anggota' => $this->input->post('nama'),
					'photo_profile' => $gbr['file_name']
				);

			$this->m_anggota->addAnggota($data);
			redirect(site_url('anggota'),'refresh');
		}
	}

	public function delete($id){
		$this->m_anggota->deleteAnggota($id);
		redirect(site_url('anggota'),'refresh');
	}

	public function edit($id){
		$data['sql']=$this->m_anggota->edit($id);
		$this->load->view('anggota/edit',$data);
	}

	public function processEdit(){
		$id=$this->input->post('id');
		$nmfile = time();
		$config['upload_path'] = './assets/photo_anggota/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2048'; //in kb
		$config['max_width']  = '1024';
		$config['max_height']  = '1024';
		$config['file_name'] = $nmfile;
 
		$this->upload->initialize($config);
 
		//if upload failed
		if (!$this->upload->do_upload('photo')){
			$this->upload->display_errors();
			echo $this->upload->display_errors();
		//if upload success
		}else{
			$gbr = $this->upload->data();
			$data = array(
					'id_anggota' => $this->input->post('id'),
					'nama_anggota' => $this->input->post('nama'),
					'photo_profile' => $gbr['file_name']
				);

			$this->m_anggota->editAnggota($data,$id);
			redirect(site_url('anggota'),'refresh');
		}
	}

}

/* End of file anggota.php */
/* Location: ./application/controllers/anggota.php */