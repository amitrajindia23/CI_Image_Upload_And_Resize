<?php 
class Image_Model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->helper('image');
	}

	/*
	* Save Image
	*/
	public function saveImage($imageName,$imagePath,$imageFileName){
		$data = array(
					'image_name' => $imageName, 
					'image_path' => $imagePath,
					'image_file_name' => $imageFileName,
					'status' => '1',
					'created_at' => date("Y-m-d H-i-s"),
					'updated_at' => date("Y-m-d H-i-s"),
				);

		$this->db->insert('ci_images',$data);
		$last_inserted_id = $this->db->insert_id();
		return $last_inserted_id;
	}

	/*
	* Get All Product list
	*/
	public function getImageList($height,$width){
		$this->db->select("ci_images.*");
		$this->db->from('ci_images');
        $this->db->order_by('ci_images.id','desc');
		$query = $this->db->get();

 		$imageList = array();
        if ($query->num_rows() > 0) {
            $imageList = $query->result_array();
        }

        for ($i=0; $i < count($imageList); $i++) { 
        	$imageList[$i]['thumb'] = image_thumb($imageList[$i]['image_path'], $imageList[$i]['image_file_name'], $height,$width );
        }

        return $imageList;
	}
}