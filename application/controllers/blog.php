<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->session->userdata('username');
		$data['sql']=$this->m_blog->viewBlog();
		$this->load->view('blog/index',$data);
	}

	public function add(){
		$this->load->view('blog/add');
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
				'id_blog' => $this->input->post('id_blog'),
				'title' => $this->input->post('title'),
				'photo' => $gbr['file_name'],
				'content' => $this->input->post('content'),
				'create_date' => date("Y-m-d"), //$this->input->post('create_date'),
				'create_by' => $this->session->userdata('username') //$this->input->post('create_by'),
			);
			
			$this->m_blog->addBlog($data);
			redirect(site_url('blog'),'refresh');
		}
	}

	public function edit($id){
		$data['sql'] = $this->m_blog->edit($id);
		$this->load->view('blog/edit',$data);
	}

	public function processEdit(){
		$id=$this->input->post('id_blog');
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
				'title' => $this->input->post('title'),
				'photo' => $gbr['file_name'],
				'content' => $this->input->post('content'),
				'create_date' => $this->input->post('create_date'),
				'create_by' => $this->input->post('create_by'),
				'id_login' => $this->input->post('id_login')
				);

			$this->m_blog->editBlog($data,$id);
			redirect(site_url('blog'),'refresh');
		}
	}

	public function delete($id){
		$this->m_blog->deleteBlog($id);
		redirect(site_url('blog'),'refresh');
	}
}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */