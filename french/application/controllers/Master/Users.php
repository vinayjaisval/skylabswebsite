<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
	}

	public function index(){	}

	public function view(){

		$data['title'] = "Users";
		$data['cur_page'] = 'user';
		$data['cur_sub_page'] = 'admin';
		$data['menu'] = $this->admin->fetch_data('tbl_user');

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/users/view');
		$this->load->view('admin/inc/footer');
	}

	public function add(){
		$data['title'] = "Add User";
		$data['cur_page'] = 'user';
		$data['cur_sub_page'] = 'admin';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/users/add');
		$this->load->view('admin/inc/footer');
	}

	public function addNewUser(){
		$post = $this->input->post();

		if( !empty($post['name']) && !empty($post['email']) && !empty($post['password']) && $post['role']){

			$Check = $this->admin->findValue($post['email'], 'email', 'tbl_user');
			if( !empty($Check)){
				$this->session->set_flashdata('error', 'Email (<b>'.$post['email'].'</b>) Already Exists!!');
	    		redirect(base_url('Master/users/add'));
	    		die();
			}


			// Image Uploads
			$this->_do_upload('photo');
			$fileName1 = $this->upload->data('file_name');

			$data = array(
				'name' => $post['name'],
				'email' => $post['email'],
				'password' => md5($post['password']),
				'role' => $post['role'],
				'status' => $post['status'],
				'photo' => $fileName1
			);
			$this->admin->insert('tbl_user', $data);
			$this->session->set_flashdata('success','User Add Successfully!!');
		    redirect(base_url('Master/users/add'));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Field First!!');
		    redirect(base_url('Master/users/add'));
		}
	}

	public function edit($id){
		$data['title'] = "Edit User";
		$data['cur_page'] = 'user';
		$data['cur_sub_page'] = 'admin';
		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/users/edit');
		$this->load->view('admin/inc/footer');
	}

	public function updateUser(){
		$post = $this->input->post();

		if( !empty($post['name']) && !empty($post['email']) && $post['role']){

			$ckeck = $this->admin->findValue_isnot($post['email'], 'email', $post['id'], 'id', 'tbl_user');
			if( !empty($ckeck)){
				$this->session->set_flashdata('error','Email <b>('.$post["email"].')</b> Already Exists!!');
	    		redirect(base_url('Master/users/edit/'.$post['id']));
	    		die();
			}


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

			if( !empty($post['password']) ){
				$data = array(
					'name' => $post['name'],
					'email' => $post['email'],
					'password' => md5($post['password']),
					'role' => $post['role'],
					'status' => $post['status'],
					'photo' => $uploadImage1
				);
			} else {
				$data = array(
					'name' => $post['name'],
					'email' => $post['email'],
					'role' => $post['role'],
					'status' => $post['status'],
					'photo' => $uploadImage1
				);
			}

			$this->admin->update('tbl_user', $data, $post['id']);
			$this->session->set_flashdata('success','User Update Successfully!!');
			redirect(base_url('Master/users/edit/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Field First!!');
		    redirect(base_url('Master/users/edit'));
		}

	}

	

	public function delete($id){
		
		$this->db->delete('tbl_user', array('id' => $id));
		$this->session->set_flashdata('success','User Delete Successfully!!');
	    redirect(base_url('Master/users/view'));
	}

	public function set_permission($id){

		if( $this->session->userdata('role') != 'Admin'){
          	return  redirect(base_url('Master/users/view'));
        }


		$data['title'] = "Set Permissions";
		$data['cur_page'] = 'user';
		$data['cur_sub_page'] = 'admin';
		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/users/set_permission');
		$this->load->view('admin/inc/footer');
	}

	public function updatePermission(){
		$post = $this->input->post();
		if(!empty($post['menu'])){
			$menu = implode(",",$post['menu']);
		} else {
			$menu = "";
		}

		if(!empty($post['submenu'])){
			$submenu = implode(",",$post['submenu']);
		} else {
			$submenu = "";
		}

		$data = array(
			'permission_menu' => $menu,
			'permission_sub_menu' => $submenu
		);
		
		$this->admin->update('tbl_user', $data, $post['id']);
		$this->session->set_flashdata('success','User Permission Update Successfully!!');
		redirect(base_url('Master/users/set_permission/'.$post['id']));


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
