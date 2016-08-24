<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto_anggota extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$data['sql']=$this->m_foto_anggota->viewPhoto();
		$this->load->view('foto_anggota/index',$data);
	}

	public function upload(){
		$this->load->view('foto_anggota/upload');
	}

	public function processUpload(){
		$nmfile = "IMG".time();
		$config['upload_path'] = './assets/photo_anggota/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2048'; //in kb
		$config['max_width']  = '1024';
		$config['max_height']  = '1024';
		$config['file_name'] = $nmfile;
 
		$this->upload->initialize($config);
 
		//if upload failed
		if (!$this->upload->do_upload('upload')){
			$this->upload->display_errors();
			echo $this->upload->display_errors();
		//if upload success
		}else{
			$gbr = $this->upload->data();
			$data = array(
					'id_photo' => $this->input->post('id'),
					'nama_photo' => $gbr['file_name']
				);

			$this->m_foto_anggota->uploadPhoto($data);
			redirect(site_url('foto_anggota'),'refresh');
		}
	}
}

/* End of file foto_anggota.php */
/* Location: ./application/controllers/foto_anggota.php */