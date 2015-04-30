<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('image_model');
		$this->load->helper(array('form', 'url'));
	}

	/**
	* Load Upload Page
	**/
	public function index(){
		$data = array('message' => '');
		$this->load->view('Image/index',$data);
	}

	/*
	* Upload Image
	*/
	public function do_upload(){
		$config['upload_path'] = './assets/uploaded_image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '100000000';
		//$config['max_size'] = 1024 * 8;
        $config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload())
		{
			$data = array('message' => $this->upload->display_errors());
			$this->load->view('Image/index', $data);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$imageName = $this->input->post('image-name');
			$imageFileName = $data['upload_data']['file_name'];
			$imagePath = 'assets/uploaded_image/'.$imageFileName;
			$result = $this->image_model->saveImage($imageName,$imagePath,$imageFileName);
			if($result){
				$data = array('message' => 'Image uploaded');
				$this->load->view('Image/index', $data);
			}
		}
	}

	/*
	* Load Gallery Page (list images)
	*/
	public function gallery(){
		$imageList = $this->image_model->getImageList(250,250);
		$data['imageList'] = $imageList;
		$this->load->view('Image/list',$data);
	}
}
