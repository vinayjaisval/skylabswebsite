<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
	}

	public function index(){	}

	public function view(){

		$data['title'] = "Testimonial";
		$data['cur_page'] = 'testimonial';
		$data['cur_sub_page'] = '';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/testimonial/view');
		$this->load->view('admin/inc/footer');
	}

	public function add(){
		$data['title'] = "Add Testimonial";
		$data['cur_page'] = 'testimonial';
		$data['cur_sub_page'] = '';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/testimonial/add');
		$this->load->view('admin/inc/footer');
	}

	public function addTestimonial(){
		$post = $this->input->post();
		$name_file = $_FILES['photo']['name'];

		if( !empty($name_file) && !empty($post['name']) && !empty($post['designation']) && !empty($post['company']) && !empty($post['comment'])){
			// Image Uploads
			$this->_do_upload('photo');
			$fileName1 = $this->upload->data('file_name');

			$data = array(
				'name' => $post['name'],
				'designation' => $post['designation'],
				'company' => $post['company'],
				'comment' => $post['comment'],
				'photo' => $fileName1
			);
			$this->admin->insert('tbl_testimonial', $data);
			$this->session->set_flashdata('success','Testimonial Add Successfully!!');
		    redirect(base_url('Master/testimonial/add'));
		} else {
			$this->session->set_flashdata('error','All Fiels are Required!!');
		    redirect(base_url('Master/testimonial/add'));
		}
	}

	public function edit($id){
		$data['title'] = "Edit Testimonial";
		$data['cur_page'] = 'testimonial';
		$data['cur_sub_page'] = '';
		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/testimonial/edit');
		$this->load->view('admin/inc/footer');
	}

	public function updateTestimonial(){
		$post = $this->input->post();

		if( !empty($post['name']) && !empty($post['designation']) && !empty($post['company']) && !empty($post['comment'])){

			// Update Image
		    if( $this->_do_upload('photo')){
			    $fileName1 = $this->upload->data('file_name');
			    if( ! empty($fileName1)){
			    	// Remove Old Image if new one is updated
					$imageRemove = $this->input->post('current_photo');
					$imageLink=base_url("assets/admin/uploads/".$imageRemove);
					$dd = substr($imageLink, strlen(base_url()));
			        unlink($dd);

			        $uploadImage1 = $fileName1;
			    } else {
			        $uploadImage1 = $this->input->post('current_photo');
			    }
			} else{
				$uploadImage1 = $this->input->post('current_photo');
			}

			$data = array(
					'name' => $post['name'],
					'designation' => $post['designation'],
					'company' => $post['company'],
					'comment' => $post['comment'],
					'photo' => $uploadImage1
			);
			$this->admin->update('tbl_testimonial', $data, $post['id']);
			$this->session->set_flashdata('success','Testimonial Update Successfully!!');
			redirect(base_url('Master/testimonial/edit/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','All Fiels are Required!!');
		    redirect(base_url('Master/testimonial/edit/'.$post['id']));
		}

	}

	

	public function delete($id){
		
		$this->db->delete('tbl_testimonial', array('id' => $id));
		$this->session->set_flashdata('success','Testimonial Delete Successfully!!');
	    redirect(base_url('Master/testimonial/view'));
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
