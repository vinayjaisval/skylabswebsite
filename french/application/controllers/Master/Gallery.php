<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
	}

	public function index(){	}

	// Photo Category
	public function photo_category(){
		$data['title'] = "Photo Category";
		$data['cur_page'] = 'gallery';
		$data['cur_sub_page'] = 'photo_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/gallery/view_photo_cat');
		$this->load->view('admin/inc/footer');
	}

	public function add_photo_category(){
		$data['title'] = "Add Photo Category";
		$data['cur_page'] = 'gallery';
		$data['cur_sub_page'] = 'photo_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/gallery/add_photo_cat');
		$this->load->view('admin/inc/footer');
	}

	public function addPhotoCategoryValue(){
		$p_category_name = $this->input->post('p_category_name');
		$status = $this->input->post('status');

		if( !empty($p_category_name) && !empty($status)){
			$Check = $this->admin->findValue($p_category_name, 'p_category_name', 'tbl_category_photo');
			if( !empty($Check)){
				$this->session->set_flashdata('error','Category Name Already Exists!!');
	    		redirect(base_url('Master/gallery/add_photo_category'));
	    		die();
			}

			$data = array(
				'p_category_name' => $p_category_name,
				'status' => $status
			);

			$this->admin->insert('tbl_category_photo', $data);
			$this->session->set_flashdata('success','Photo Category Add Successfully!!');
		    redirect(base_url('Master/gallery/add_photo_category'));

		}else{
			$this->session->set_flashdata('error','Please Fill Name!!');
			redirect(base_url('Master/gallery/add_photo_category'));
		}
	}

	public function edit_photo_category($id){
		$data['id'] = $id;
		$data['title'] = "Edit Photo Category";
		$data['cur_page'] = 'gallery';
		$data['cur_sub_page'] = 'photo_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/gallery/edit_photo_cat');
		$this->load->view('admin/inc/footer');
	}
	public function update_photo_category(){
		$post = $this->input->post();

		if(  !empty($post['p_category_name']) ){
			$pageName = $this->admin->findValue_isnot($post['p_category_name'], 'p_category_name', $post['id'], 'p_category_id', 'tbl_category_photo');
			if( !empty($pageName)){
				$this->session->set_flashdata('error','Name <b>('.$post["p_category_name"].')</b> Already Exists!!');
	    		redirect(base_url('Master/gallery/edit_photo_category/'.$post['id']));
	    		die();
			}

			$data = array(
				'p_category_name' => $post['p_category_name'],
				'status' => $post['status']
			);
			$this->admin->update1('tbl_category_photo', $data, $post['id'], 'p_category_id');
			$this->session->set_flashdata('success','Photo Categorys Update Successfully!!');
			redirect(base_url('Master/gallery/edit_photo_category/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill All Fields!!');
			redirect(base_url('Master/gallery/edit_photo_category/'.$post['id']));
		}	
	}


	public function delete_photo_category($id){
		
		$this->db->delete('tbl_category_photo', array('p_category_id' => $id));
		$this->db->delete('tbl_photo', array('p_category_id' => $id));
		$this->session->set_flashdata('success','Photo Category Delete Successfully!!');
	    redirect(base_url('Master/gallery/photo_category'));
	}


	// Video Category
	public function video_category(){
		$data['title'] = "Video Category";
		$data['cur_page'] = 'gallery';
		$data['cur_sub_page'] = 'video_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/gallery/view_video_cat');
		$this->load->view('admin/inc/footer');
	}

	public function add_video_category(){
		$data['title'] = "Add Video Category";
		$data['cur_page'] = 'gallery';
		$data['cur_sub_page'] = 'video_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/gallery/add_video_cat');
		$this->load->view('admin/inc/footer');
	}

	public function addVideoCategoryValue(){
		$v_category_name = $this->input->post('v_category_name');
		$status = $this->input->post('status');

		if( !empty($v_category_name) && !empty($status)){
			$Check = $this->admin->findValue($v_category_name, 'v_category_name', 'tbl_category_video');
			if( !empty($Check)){
				$this->session->set_flashdata('error','Category Name Already Exists!!');
	    		redirect(base_url('Master/gallery/add_video_category'));
	    		die();
			}

			$data = array(
				'v_category_name' => $v_category_name,
				'status' => $status
			);

			$this->admin->insert('tbl_category_video', $data);
			$this->session->set_flashdata('success','Video Category Add Successfully!!');
		    redirect(base_url('Master/gallery/add_video_category'));

		}else{
			$this->session->set_flashdata('error','Please Fill Name!!');
			redirect(base_url('Master/gallery/add_video_category'));
		}
	}

	public function edit_video_category($id){
		$data['id'] = $id;
		$data['title'] = "Edit Video Category";
		$data['cur_page'] = 'gallery';
		$data['cur_sub_page'] = 'video_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/gallery/edit_video_cat');
		$this->load->view('admin/inc/footer');
	}
	public function update_video_category(){
		$post = $this->input->post();

		if(  !empty($post['v_category_name']) ){
			$pageName = $this->admin->findValue_isnot($post['v_category_name'], 'v_category_name', $post['id'], 'v_category_id', 'tbl_category_video');
			if( !empty($pageName)){
				$this->session->set_flashdata('error','Name <b>('.$post["v_category_name"].')</b> Already Exists!!');
	    		redirect(base_url('Master/gallery/edit_video_category/'.$post['id']));
	    		die();
			}

			$data = array(
				'v_category_name' => $post['v_category_name'],
				'status' => $post['status']
			);
			$this->admin->update1('tbl_category_video', $data, $post['id'], 'v_category_id');
			$this->session->set_flashdata('success','Video Categorys Update Successfully!!');
			redirect(base_url('Master/gallery/edit_video_category/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill All Fields!!');
			redirect(base_url('Master/gallery/edit_video_category/'.$post['id']));
		}	
	}


	public function delete_video_category($id){
		
		$this->db->delete('tbl_category_video', array('v_category_id' => $id));
		$this->db->delete('tbl_video', array('v_category_id' => $id));
		$this->session->set_flashdata('success','Video Category Delete Successfully!!');
	    redirect(base_url('Master/gallery/video_category'));
	}


	// Photo

	public function photo(){

		$data['title'] = "Photo Gallery";
		$data['cur_page'] = 'gallery';
		$data['cur_sub_page'] = 'photo';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/gallery/photo_gallery');
		$this->load->view('admin/inc/footer');
	}

	public function add_photo(){
		$data['title'] = "Add Photo";
		$data['cur_page'] = 'gallery';
		$data['cur_sub_page'] = 'photo';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/gallery/add_photo_gallery');
		$this->load->view('admin/inc/footer');
	}

	

	public function addPhoto(){
		$post = $this->input->post();
		$name_file = $_FILES['photo']['name'];

		if( !empty($name_file) && !empty($post['photo_caption']) && !empty($post['p_category_id']) ){

			// Image Uploads
			$this->_do_upload('photo');
			$fileName1 = $this->upload->data('file_name');

			$data = array(
				'photo_caption' => $post['photo_caption'],
				'photo_name' => $fileName1,
				'p_category_id' => $post['p_category_id'],
				'photo_link' => $post['photo_link'],
				'photo_desc' => $post['photo_desc']
			);
			$this->admin->insert('tbl_photo', $data);
			$this->session->set_flashdata('success','Photo Gallery Add Successfully!!');
		    redirect(base_url('Master/gallery/add_photo'));
		} else {
			$this->session->set_flashdata('error','All Fiels are Required!!');
		    redirect(base_url('Master/gallery/add_photo'));
		}
	}

	public function edit_photo($id){
		$data['id'] = $id;
		$data['title'] = "Edit Photo Gallery";
		$data['cur_page'] = 'gallery';
		$data['cur_sub_page'] = 'photo';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/gallery/edit_photo_gallery');
		$this->load->view('admin/inc/footer');
	}

	

	public function updatePhoto(){
		$post = $this->input->post();

		if( !empty($post['photo_caption']) && !empty($post['p_category_id']) ){
			// Update Image
		    if( $this->_do_upload('photo')){
			    $fileName1 = $this->upload->data('file_name');
			    if( ! empty($fileName1)){
			    	// Remove Old Image if new one is updated
					$imageRemove = $this->input->post('previous_photo');
					$imageLink=base_url("assets/admin/uploads/".$imageRemove);
					$dd = substr($imageLink, strlen(base_url()));
			        unlink($dd);

			        $uploadImage1 = $fileName1;
			    } else {
			        $uploadImage1 = $this->input->post('previous_photo');
			    }
			} else{
				$uploadImage1 = $this->input->post('previous_photo');
			}

			$data = array(
				'photo_caption' => $post['photo_caption'],
				'p_category_id' => $post['p_category_id'],
				'photo_name' => $uploadImage1,
				'photo_link' => $post['photo_link'],
				'photo_desc' => $post['photo_desc']
			);
			$this->admin->update1('tbl_photo', $data, $post['id'], 'photo_id');
			$this->session->set_flashdata('success','Photo Add Successfully!!');
			redirect(base_url('Master/gallery/edit_photo/'.$post['id']));
			
		} else {
			$this->session->set_flashdata('error','Please Fill All Fields!!');
			redirect(base_url('Master/gallery/edit_photo/'.$post['id']));
		}

	}

	

	public function delete_photo($id){
		
		$this->db->delete('tbl_photo', array('photo_id' => $id));
		$this->session->set_flashdata('success','Photo Delete Successfully!!');
	    redirect(base_url('Master/gallery/photo'));
	}


	// Video

	public function video(){

		$data['title'] = "Video";
		$data['cur_page'] = 'gallery';
		$data['cur_sub_page'] = 'video';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/gallery/video_gallery');
		$this->load->view('admin/inc/footer');
	}

	public function add_video(){
		$data['title'] = "Add Video";
		$data['cur_page'] = 'gallery';
		$data['cur_sub_page'] = 'video';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/gallery/add_video_gallery');
		$this->load->view('admin/inc/footer');
	}

	

	public function addVideo(){
		$post = $this->input->post();

		if( !empty($post['video_title']) && !empty($post['video_iframe']) && !empty($post['v_category_id']) ){

			$data = array(
				'video_title' => $post['video_title'],
				'video_iframe' => $post['video_iframe'],
				'v_category_id' => $post['v_category_id']
			);
			$this->admin->insert('tbl_video', $data);
			$this->session->set_flashdata('success','Video Add Successfully!!');
		    redirect(base_url('Master/gallery/add_video'));
		} else {
			$this->session->set_flashdata('error','All Fiels are Required!!');
		    redirect(base_url('Master/gallery/add_video'));
		}
	}

	public function edit_video($id){
		$data['id'] = $id;
		$data['title'] = "Edit Video Gallery";
		$data['cur_page'] = 'gallery';
		$data['cur_sub_page'] = 'video';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/gallery/edit_video_gallery');
		$this->load->view('admin/inc/footer');
	}

	

	public function updateVideo(){
		$post = $this->input->post();

		if( !empty($post['video_title']) && !empty($post['video_iframe']) && !empty($post['v_category_id']) ){
			
			$data = array(
				'video_title' => $post['video_title'],
				'video_iframe' => $post['video_iframe'],
				'v_category_id' => $post['v_category_id']
			);
			$this->admin->update1('tbl_video', $data, $post['id'], 'video_id');
			$this->session->set_flashdata('success','Video Update Successfully!!');
			redirect(base_url('Master/gallery/edit_video/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill All Fields!!');
			redirect(base_url('Master/gallery/edit_video/'.$post['id']));
		}

	}

	

	public function delete_video($id){
		
		$this->db->delete('tbl_video', array('video_id' => $id));
		$this->session->set_flashdata('success','Video Delete Successfully!!');
	    redirect(base_url('Master/gallery/video'));
	}

	public function _do_upload($filename){
		$config['upload_path']          = './assets/admin/uploads/';
		$config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload($filename)){
            return false;
        } else {
            $data = array('upload_data' => $this->upload->data());
            return $post[$filename] = $data['upload_data']['file_name'];
        }
    }


}
