<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Icon_sosmed extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['sql']=$this->m_icon_sosmed->viewIcon();
		$this->load->view('icon/index', $data);
	}

	public function add(){
		$this->load->view('icon/add');
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
		if (!$this->upload->do_upload('nama_icon')){
			$this->upload->display_errors();
			echo $this->upload->display_errors();
		//if upload success
		}else{
			$gbr = $this->upload->data();
			$data = array(
					'id_icon' => $this->input->post('id_icon'),
					'nama_icon' => $gbr['file_name']
				);

			$this->m_icon_sosmed->addIcon($data);
			redirect(site_url('icon_sosmed'),'refresh');
		}
	}

	public function edit($id){
		$data['sql']=$this->m_icon_sosmed->edit($id);
		$this->load->view('icon/edit', $data);
	}

	public function processEdit(){
		$id=$this->input->post('id_icon');
		$nmfile = "IMG".time();
		$config['upload_path'] = './assets/photo_anggota/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2048'; //in kb
		$config['max_width']  = '1024';
		$config['max_height']  = '1024';
		$config['file_name'] = $nmfile;
 
		$this->upload->initialize($config);
 
		//if upload failed
		if (!$this->upload->do_upload('nama_icon')){
			$this->upload->display_errors();
			echo $this->upload->display_errors();
		//if upload success
		}else{
			$gbr = $this->upload->data();
			$data = array(
					'nama_icon'=>$gbr['file_name']
				);

			$this->m_icon_sosmed->editIcon($data,$id);
			redirect(site_url('icon_sosmed'),'refresh');
		}
	}

	public function delete($id){
		$this->m_icon_sosmed->deleteIcon($id);
		redirect(site_url('icon_sosmed'),'refresh');
	}

}

/* End of file icon_sosmed.php */
/* Location: ./application/controllers/icon_sosmed.php */