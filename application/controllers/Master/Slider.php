<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
	}

	public function index(){	}

	public function view(){

		$data['title'] = "Slider";
		$data['cur_page'] = 'slider';
		$data['cur_sub_page'] = 'slider';
		$data['menu'] = $this->admin->fetch_data('tbl_slider');

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/slider/view');
		$this->load->view('admin/inc/footer');
	}

	public function add(){
		$data['title'] = "Add Slider";
		$data['cur_page'] = 'slider';
		$data['cur_sub_page'] = 'slider';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/slider/add');
		$this->load->view('admin/inc/footer');
	}

	public function addNewSlider(){
		$post = $this->input->post();
		$name_file = $_FILES['photo']['name'];

		if( !empty($name_file)){
			// Image Uploads
			$this->_do_upload('photo');
			$fileName1 = $this->upload->data('file_name');

			$data = array(
				'heading' => $post['heading'],
				'content' => $post['content'],
				'button_text' => $post['button_text'],
				'button_url' => $post['button_url'],
				'position' => $post['position'],
				'status' => $post['status'],
				'photo' => $fileName1
			);
			$this->admin->insert('tbl_slider', $data);
			$this->session->set_flashdata('success','Slider Add Successfully!!');
		    redirect(base_url('Master/slider/add'));
		} else {
			$this->session->set_flashdata('error','Add File Name First!!');
		    redirect(base_url('Master/slider/add'));
		}
	}

	public function edit($id){
		$data['title'] = "Edit Slider";
		$data['cur_page'] = 'slider';
		$data['cur_sub_page'] = 'slider';
		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/slider/edit');
		$this->load->view('admin/inc/footer');
	}

	public function updateSlider(){
		$post = $this->input->post();

		// Update Image
	    if( $this->_do_upload('photo')){
		    $fileName1 = $this->upload->data('file_name');
		    if( ! empty($fileName1)){
		        $uploadImage1 = $fileName1;
		    } else {
		        $uploadImage1 = $this->input->post('current_photo');
		    }
		} else{
			$uploadImage1 = $this->input->post('current_photo');
		}

		$data = array(
				'heading' => $post['heading'],
				'content' => $post['content'],
				'button_text' => $post['button_text'],
				'button_url' => $post['button_url'],
				'position' => $post['position'],
				'status' => $post['status'],
				'photo' => $uploadImage1
		);
		$this->admin->update('tbl_slider', $data, $post['id']);
		$this->session->set_flashdata('success','Slider Add Successfully!!');
		redirect(base_url('Master/slider/edit/'.$post['id']));

	}

	

	public function delete($id){
		
		$this->db->delete('tbl_slider', array('id' => $id));
		$this->session->set_flashdata('success','Slider Delete Successfully!!');
	    redirect(base_url('Master/slider/view'));
	}

	

    public function left_slider(){
    	$data['title'] = "Slider";
		$data['cur_page'] = 'slider';
		$data['cur_sub_page'] = 'left-slider';
		$data['menu'] = $this->admin->fetch_data('tbl_slider');

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/slider/left_slider');
		$this->load->view('admin/inc/footer');
    }

    public function add_left(){
    	$data['title'] = "Slider";
		$data['cur_page'] = 'slider';
		$data['cur_sub_page'] = 'left-slider';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/slider/add_left');
		$this->load->view('admin/inc/footer');	
    }

    public function addLeftSlider(){
    	$post = $this->input->post();

    	if( !empty($post['name']) && !empty($post['url'])){

    		$this->_do_upload('photo');
			$fileName1 = $this->upload->data('file_name');


			$data = array(
				'heading' => $post['heading'],
				'photo' => $fileName1,
				'name' => $post['name'],
				'url' => $post['url'],
				'date' => $post['date'],
				'status' => $post['status'],
				'side' => $post['side']
			);
			$this->admin->insert('tbl_slider_lr', $data);
			$this->session->set_flashdata('success','Slider Left Add Successfully!!');
		    redirect(base_url('Master/slider/add_left'));
		} else {
			$this->session->set_flashdata('error','Name & Url can not be empty!!');
		    redirect(base_url('Master/slider/add_left'));
		}
    }


    public function edit_left($id){
    	$data['title'] = "Edit Left Slider";
		$data['cur_page'] = 'slider';
		$data['cur_sub_page'] = 'left-slider';
		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/slider/edit_left');
		$this->load->view('admin/inc/footer');
    }

    public function updateLeftSlider(){
    	$post = $this->input->post();
    	if( !empty($post['name']) && !empty($post['url'])){


    		// Update Image
		    if( $this->_do_upload('photo')){
			    $fileName1 = $this->upload->data('file_name');
			    if( ! empty($fileName1)){
			        $uploadImage1 = $fileName1;
			    } else {
			        $uploadImage1 = $this->input->post('current_photo');
			    }
			} else{
				$uploadImage1 = $this->input->post('current_photo');
			}


			$data = array(
				'heading' => $post['heading'],
				'name' => $post['name'],
				'url' => $post['url'],
				'date' => $post['date'],
				'status' => $post['status'],
				'side' => $post['side'],
				'photo' => $uploadImage1
			);
			$this->admin->update('tbl_slider_lr', $data, $post['id']);
			$this->session->set_flashdata('success','Slider Left Add Successfully!!');
		    redirect(base_url('Master/slider/edit_left/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Name & Url can not be empty!!');
		    redirect(base_url('Master/slider/edit_left/'.$post['id']));
		}
    }

    public function delete_left($id){
    	$this->db->delete('tbl_slider_lr', array('id' => $id));
		$this->session->set_flashdata('success','Slider Left Delete Successfully!!');
	    redirect(base_url('Master/slider/left_slider'));
    }


    public function right_slider(){
    	$data['title'] = "Slider";
		$data['cur_page'] = 'slider';
		$data['cur_sub_page'] = 'right-slider';
		$data['menu'] = $this->admin->fetch_data('tbl_slider');

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/slider/right_slider');
		$this->load->view('admin/inc/footer');
    }


    public function add_right(){
    	$data['title'] = "Slider";
		$data['cur_page'] = 'slider';
		$data['cur_sub_page'] = 'right-slider';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/slider/add_right');
		$this->load->view('admin/inc/footer');	
    }

    public function addRightSlider(){
    	$post = $this->input->post();

    	if( !empty($post['name']) && !empty($post['url'])){
			$this->_do_upload('photo');
			$fileName1 = $this->upload->data('file_name');


			$data = array(
				'heading' => $post['heading'],
				'photo' => $fileName1,
				'name' => $post['name'],
				'url' => $post['url'],
				'date' => $post['date'],
				'status' => $post['status'],
				'side' => $post['side']
			);
			$this->admin->insert('tbl_slider_lr', $data);
			$this->session->set_flashdata('success','Slider Right Add Successfully!!');
		    redirect(base_url('Master/slider/add_right'));
		} else {
			$this->session->set_flashdata('error','Name & Url can not be empty!!');
		    redirect(base_url('Master/slider/add_right'));
		}
    }


    public function edit_right($id){
    	$data['title'] = "Edit Right Slider";
		$data['cur_page'] = 'slider';
		$data['cur_sub_page'] = 'right-slider';
		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/slider/edit_right');
		$this->load->view('admin/inc/footer');
    }

    public function updateRightSlider(){
    	$post = $this->input->post();
    	if( !empty($post['name']) && !empty($post['url'])){
			// Update Image
		    if( $this->_do_upload('photo')){
			    $fileName1 = $this->upload->data('file_name');
			    if( ! empty($fileName1)){
			        $uploadImage1 = $fileName1;
			    } else {
			        $uploadImage1 = $this->input->post('current_photo');
			    }
			} else{
				$uploadImage1 = $this->input->post('current_photo');
			}


			$data = array(
				'heading' => $post['heading'],
				'name' => $post['name'],
				'url' => $post['url'],
				'date' => $post['date'],
				'status' => $post['status'],
				'side' => $post['side'],
				'photo' => $uploadImage1
			);
			$this->admin->update('tbl_slider_lr', $data, $post['id']);
			$this->session->set_flashdata('success','Slider Right Add Successfully!!');
		    redirect(base_url('Master/slider/edit_right/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Name & Url can not be empty!!');
		    redirect(base_url('Master/slider/edit_right/'.$post['id']));
		}
    }

    public function delete_right($id){
    	$this->db->delete('tbl_slider_lr', array('id' => $id));
		$this->session->set_flashdata('success','Slider Right Delete Successfully!!');
	    redirect(base_url('Master/slider/right_slider'));
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
