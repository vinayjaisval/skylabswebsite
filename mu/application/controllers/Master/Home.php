<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
	}

	public function index(){

		$data['title'] = "Home";
		$data['cur_page'] = 'home';
		$data['cur_sub_page'] = '';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/home');
		$this->load->view('admin/inc/footer');
	}

	//==== Update Profile ===

	public function edit_profile(){
		$data['title'] = "Edit Profile";
		$data['cur_page'] = 'home';
		$data['cur_sub_page'] = '';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/profile/edit_profile');
		$this->load->view('admin/inc/footer');
	}

	public function updateEmail(){
		$email = $this->input->post('email');
		$name = $this->input->post('name');

		if(!empty($email)){
			$data = array(
				'name' => $name,
				'email' => $email
			);

			$this->admin->update('tbl_user', $data, $this->session->userdata('userid'));
			$dataSession = array(
	                'name' => $name,
	                'username' => $email
	        );
	        $this->session->set_userdata($dataSession);
			$this->session->set_flashdata('success','Email Update successfully!!');
	        redirect(base_url('Master/home/edit_profile'));
		} else {
			$this->session->set_flashdata('error','Please Fill Email Id!!');
	        redirect(base_url('Master/home/edit_profile'));
		}
	}

	public function updateImage(){
		$post = $this->input->post();
		if( $this->_do_upload('photo')){
		    $fileName1 = $this->upload->data('file_name');
		    if( ! empty($fileName1)){

		    	// Remove Old Image if new one is updated
				$imageRemove = $this->input->post('oldFile');
				$imageLink=base_url("assets/admin/uploads/".$imageRemove);
				$dd = substr($imageLink, strlen(base_url()));
		        unlink($dd);


		        $uploadImage1 = $fileName1;
		    } else {
		        $uploadImage1 = $this->input->post('oldFile');
		    }
		} else{
			$uploadImage1 = $this->input->post('oldFile');
		}
		$data = array(
			'photo' => $uploadImage1
		);
		$this->admin->update('tbl_user', $data, $this->session->userdata('userid'));

		$dataSession = array(
	        'userimage' => $uploadImage1
	    );
	    $this->session->set_userdata($dataSession);
		$this->session->set_flashdata('success','Image Update successfully!!');
	    redirect(base_url('Master/home/edit_profile'));
	}

	public function updatePassword(){
		$password = $this->input->post('password');
		$re_password = $this->input->post('re_password');

		if( !empty($password)) {
			if($password == $re_password){
				$data = array(
					'password' => md5($password)
				);

				$this->admin->update('tbl_user', $data, $this->session->userdata('userid'));
				$this->session->set_flashdata('success','Password update successfully!!');
		    	redirect(base_url('Master/home/edit_profile'));	
			} else{
				$this->session->set_flashdata('error','Password and Confirm Password do not match!!');
		    	redirect(base_url('Master/home/edit_profile'));	
			}
		} else {
			$this->session->set_flashdata('error','Password can not blank!!');
		    redirect(base_url('Master/home/edit_profile'));		
		}


		
	}


	

	//===============================

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
