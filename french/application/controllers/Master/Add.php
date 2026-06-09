<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
	}

	public function index(){	}

	public function view(){

		$data['title'] = "Advertisement";
		$data['cur_page'] = 'add';
		$data['cur_sub_page'] = '';
		$data['menu'] = $this->admin->fetch_data('tbl_user');

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/add/view');
		$this->load->view('admin/inc/footer');
	}

	public function add(){
		$data['title'] = "Add Advertisement";
		$data['cur_page'] = 'add';
		$data['cur_sub_page'] = '';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/add/add');
		$this->load->view('admin/inc/footer');
	}

	public function addNewUser(){
		$post = $this->input->post();

		if( !empty($post['name']) && !empty($post['link']) && !empty($post['role']) ){

			// Image Uploads
			$this->_do_upload('photo');
			$fileName1 = $this->upload->data('file_name');


			if( empty($post['link'])){
				$url_title = url_title($post['link'], "dash", TRUE);
			} else {
				$url_title = url_title($post['link'], "dash", TRUE);
			}
			$uniqSlug = $this->check_unique('link',$url_title,'advertisement');

			$data = array(
				'name' => $post['name'],
				'link' => $uniqSlug,
				'active' => $post['status'],
				'role' => $post['role'],
				'bg_color' => $post['bg_color'],
				'photo' => $fileName1
			);
			$this->admin->insert('advertisement', $data);
			$this->session->set_flashdata('success','Advertisement Add Successfully!!');
		    redirect(base_url('Master/add/add'));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Field First!!');
		    redirect(base_url('Master/add/add'));
		}
	}

	public function edit($id){
		$data['title'] = "Edit Advertisement";
		$data['cur_page'] = 'add';
		$data['cur_sub_page'] = '';
		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/add/edit');
		$this->load->view('admin/inc/footer');
	}

	public function updateUser(){
		$post = $this->input->post();

		if( !empty($post['name']) && !empty($post['link']) && $post['role']){


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

			if( empty($post['link'])){
				$url_title1 = url_title($post['link'], "dash", TRUE);
			} else {
				$url_title1 = url_title($post['link'], "dash", TRUE);
			}
			$uniqSlug1 = $this->check_unique1('link',$url_title1,'advertisement', $post['id'], 'id'); 

			$data = array(
				'name' => $post['name'],
				'link' => $uniqSlug1,
				'role' => $post['role'],
				'active' => $post['status'],
				'bg_color' => $post['bg_color'],
				'photo' => $uploadImage1
			);

			$this->admin->update('advertisement', $data, $post['id']);
			$this->session->set_flashdata('success','Advertisement Update Successfully!!');
			redirect(base_url('Master/add/edit/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Field First!!');
		    redirect(base_url('Master/add/edit'));
		}

	}

	public function delete($id){
		
		$this->db->delete('advertisement', array('id' => $id));
		$this->session->set_flashdata('success','Add Delete Successfully!!');
	    redirect(base_url('Master/add/view'));
	}


	public function check_unique($key, $value, $table){
        $check = $this->admin->checkUnique($key, $value, $table);
        if( ! empty($check)){
        	$value1 = $value . '1';
            return $this->check_unique($key, $value1, $table);
        } else {
            return $value; 
        }
    }

    public function check_unique1($key, $value, $table, $id, $key2){
        $check = $this->admin->checkUnique2($key, $value, $table, $id, $key2);
        if( ! empty($check)){
        	$value1 = $value . '1';
            return $this->check_unique2($key, $value1, $table, $id, $key2);
        } else {
            return $value; 
        }
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
