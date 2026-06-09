<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
	}

	public function index(){	}

	public function view(){

		$data['title'] = "Menu";
		$data['cur_page'] = 'menu';
		$data['cur_sub_page'] = '';
		$data['menu'] = $this->admin->fetch_data('tbl_menu');

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/menu/view');
		$this->load->view('admin/inc/footer');
	}

	public function menu_add(){
		$data['title'] = "Add New Menu";
		$data['cur_page'] = 'menu';
		$data['cur_sub_page'] = '';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/menu/add');
		$this->load->view('admin/inc/footer');
	}

	public function saveFirstMenu(){
		$post = $this->input->post();

		if( !empty($post['page_id']) && !empty($post['menu_order']) && is_numeric($post['menu_order'])) {

			if( $_POST['menu_parent'] == '') {
				$this->session->set_flashdata('error','Menu Parent Can not be blank');
	    		redirect(base_url('Master/menu/menu_add'));
			} else{

				// Image Uploads
				$this->_do_upload('menu_img');
				$fileName1 = $this->upload->data('file_name');

				$data = array(
					'menu_type' => 'Page',
					'page_id' => $post['page_id'],
					'menu_parent' => $post['menu_parent'],
					'menu_order' => $post['menu_order'],
					'menu_img' => $fileName1
				);

				$this->admin->insert('tbl_menu', $data);
				$this->session->set_flashdata('success','Menu Add Successfully!!');
		    	redirect(base_url('Master/menu/menu_add'));
			}
        } else {
        	$this->session->set_flashdata('error','Page, Parent, Order Can not be blank and Order Should be numeric Also!!');
	    	redirect(base_url('Master/menu/menu_add'));
        }
	}


	public function saveSecondMenu(){
		$post = $this->input->post();
		//print_r($post); die();

		if( !empty($post['menu_name']) && !empty($post['menu_url']) && !empty($post['menu_order']) && is_numeric($post['menu_order'])) {

			if( $_POST['menu_parent'] == '') {
				$this->session->set_flashdata('error','Menu Parent Can not be blank');
	    		redirect(base_url('Master/menu/menu_add'));
			} else{

				// Image Uploads
				$this->_do_upload('menu_img');
				$fileName1 = $this->upload->data('file_name');

				$data = array(
					'menu_type' => 'Other',
					'page_id' => 0,
					'menu_name' => $post['menu_name'],
					'menu_url' => $post['menu_url'],
					'menu_order' => $post['menu_order'],
					'menu_parent' => $post['menu_parent'],
					'menu_target' => $post['menu_target'],
					'menu_img' => $fileName1
				);

				$this->admin->insert('tbl_menu', $data);
				$this->session->set_flashdata('success','Menu Add Successfully!!');
		    	redirect(base_url('Master/menu/menu_add'));
			}

        } else {
        	$this->session->set_flashdata('error','Page, Parent, Order, Url Can not be blank and Order Should be numeric Also!!');
	    	redirect(base_url('Master/menu/menu_add'));
        }
	}

	public function menu_edit($id){
		$data['id'] = $id;
		$data['title'] = "Edit Menu";
		$data['cur_page'] = 'menu';
		$data['cur_sub_page'] = '';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/menu/edit');
		$this->load->view('admin/inc/footer');
	}

	public function updateFirstMenu(){
		$post = $this->input->post();

		if(!empty($post['menu_order']) && is_numeric($post['menu_order'])){

			if( $this->_do_upload('menu_img')){
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
				'menu_type'=>'Page', 
	            'page_id'=>$post['page_id'], 
	            'menu_name'=>'',
	            'menu_url'=>'',
	            'menu_order'=>$post['menu_order'],
	            'menu_parent'=>$post['menu_parent'],
				'menu_img' => $uploadImage1
			);

			$this->admin->update('tbl_menu', $data, $post['id']);

			$this->session->set_flashdata('success','Menu is updated successfully!!');
		    redirect(base_url('Master/menu/menu_edit/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Page, Parent, Order, Url Can not be blank and Order Should be numeric Also!!');
		    redirect(base_url('Master/menu/menu_edit/'.$post['id']));
		}
	}

	public function updateSecondMenu(){
		$post = $this->input->post();

		if(!empty($post['menu_order']) && is_numeric($post['menu_order'])){

			if( $this->_do_upload('menu_img')){
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
				'menu_type'=>'Other', 
	            'page_id'=>'', 
	            'menu_name'=>$post['menu_name'],
	            'menu_url'=>$post['menu_url'],
	            'menu_order'=>$post['menu_order'],
	            'menu_parent'=>$post['menu_parent'],
	            'menu_target' => $post['menu_target'],
				'menu_img' => $uploadImage1
			);

			$this->admin->update('tbl_menu', $data, $post['id']);

			$this->session->set_flashdata('success','Menu is updated successfully!!');
		    redirect(base_url('Master/menu/menu_edit/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Page, Parent, Order, Url Can not be blank and Order Should be numeric Also!!');
		    redirect(base_url('Master/menu/menu_edit/'.$post['id']));
		}
	}

	public function deleteMenu($id){
		$this->db->delete('tbl_menu', array('id' => $id));
		$this->session->set_flashdata('success','Menu Delete Successfully!!');
	    redirect(base_url('Master/menu/view'));
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
