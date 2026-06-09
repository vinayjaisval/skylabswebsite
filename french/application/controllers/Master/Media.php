<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
	}

	public function index(){	}

	public function view(){

		$data['title'] = "Media";
		$data['cur_page'] = 'media';
		$data['cur_sub_page'] = '';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/media/view');
		$this->load->view('admin/inc/footer');
	}

	public function add(){
		$data['title'] = "Add Media";
		$data['cur_page'] = 'media';
		$data['cur_sub_page'] = '';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/media/add');
		$this->load->view('admin/inc/footer');
	}

	public function addValues(){
		$post = $this->input->post();
		echo $name_file = $_FILES['file']['name'];


		if( !empty($name_file) && !empty($post['file_title'])){
			// Image Uploads
			$this->_do_upload('file');
			$fileName1 = $this->upload->data('file_name');

			$data = array(
				'file_title' => $post['file_title'],
				'file_name' => $fileName1
			);
			//print_r($data); die();
			$this->admin->insert('tbl_file', $data);
			$this->session->set_flashdata('success','File Add Successfully!!');
		    redirect(base_url('Master/media/add'));
		} else {
			$this->session->set_flashdata('error','All Fiels are Required!!');
		    redirect(base_url('Master/media/add'));
		}
	}

	public function edit($id){
		$data['title'] = "Edit Media";
		$data['cur_page'] = 'media';
		$data['id'] = $id;
		$data['cur_sub_page'] = '';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/media/edit');
		$this->load->view('admin/inc/footer');
	}

	public function updateVal(){
		$post = $this->input->post();

		if( !empty($post['file_title']) ){

			// Update Image
		    if( $this->_do_upload('file')){
			    $fileName1 = $this->upload->data('file_name');
			    if( ! empty($fileName1)){
			    	// Remove Old Image if new one is updated
					$imageRemove = $this->input->post('previous_file');
					$imageLink=base_url("assets/admin/uploads/".$imageRemove);
					$dd = substr($imageLink, strlen(base_url()));
			        unlink($dd);

			        $uploadImage1 = $fileName1;
			    } else {
			        $uploadImage1 = $this->input->post('previous_file');
			    }
			} else{
				$uploadImage1 = $this->input->post('previous_file');
			}

			$data = array(
				'file_title' => $post['file_title'],
				'file_name' => $uploadImage1
			);
			$this->admin->update1('tbl_file', $data, $post['id'], 'file_id');
			$this->session->set_flashdata('success','File Update Successfully!!');
			redirect(base_url('Master/media/edit/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','All Fiels are Required!!');
		    redirect(base_url('Master/media/edit/'.$post['id']));
		}

	}

	

	public function delete($id){
		
		
		$this->db->delete('tbl_file', array('file_id' => $id));
		$this->session->set_flashdata('success','File Delete Successfully!!');
	    redirect(base_url('Master/media/view'));
	}

	public function _do_upload($filename){
		$config['upload_path']          = './assets/admin/uploads/';
		$config['allowed_types']        = '*';
		$config['max_size']   			= 0;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload($filename)){
            return false;
        } else {
            $data = array('upload_data' => $this->upload->data());
            return $post[$filename] = $data['upload_data']['file_name'];
        }
    }


}
