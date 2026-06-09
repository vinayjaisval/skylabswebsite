<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_three extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
	}

	public function index(){	}

	public function view(){

		$data['title'] = "Menu Three";
		$data['cur_page'] = 'menu_three';
		$data['cur_sub_page'] = '';
		$data['menu'] = $this->admin->fetch_data('tbl_menu_three');

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/menu_three/view');
		$this->load->view('admin/inc/footer');
	}

	public function menu_add(){
		$data['title'] = "Add New Menu";
		$data['cur_page'] = 'menu_three';
		$data['cur_sub_page'] = '';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/menu_three/add');
		$this->load->view('admin/inc/footer');
	}

	public function saveFirstMenu(){
		$post = $this->input->post();

		if( !empty($post['page_id']) && !empty($post['menu_order']) && is_numeric($post['menu_order'])) {

			if( $_POST['menu_parent'] == '') {
				$this->session->set_flashdata('error','Menu Parent Can not be blank');
	    		redirect(base_url('Master/menu_three/menu_add'));
			} else{
				$data = array(
					'menu_type' => 'Page',
					'page_id' => $post['page_id'],
					'menu_parent' => $post['menu_parent'],
					'menu_order' => $post['menu_order']
				);

				$this->admin->insert('tbl_menu_three', $data);
				$this->session->set_flashdata('success','Menu Add Successfully!!');
		    	redirect(base_url('Master/menu_three/menu_add'));
			}
        } else {
        	$this->session->set_flashdata('error','Page, Parent, Order Can not be blank and Order Should be numeric Also!!');
	    	redirect(base_url('Master/menu_three/menu_add'));
        }
	}


	public function saveSecondMenu(){
		$post = $this->input->post();
		//print_r($post); die();

		if( !empty($post['menu_name']) && !empty($post['menu_url']) && !empty($post['menu_order']) && is_numeric($post['menu_order'])) {

			if( $_POST['menu_parent'] == '') {
				$this->session->set_flashdata('error','Menu Parent Can not be blank');
	    		redirect(base_url('Master/menu_three/menu_add'));
			} else{
				$data = array(
					'menu_type' => 'Other',
					'page_id' => 0,
					'menu_name' => $post['menu_name'],
					'menu_url' => $post['menu_url'],
					'menu_order' => $post['menu_order'],
					'menu_parent' => $post['menu_parent'],
					'menu_target' => $post['menu_target']
				);

				$this->admin->insert('tbl_menu_three', $data);
				$this->session->set_flashdata('success','Menu Add Successfully!!');
		    	redirect(base_url('Master/menu_three/menu_add'));
			}

        } else {
        	$this->session->set_flashdata('error','Page, Parent, Order, Url Can not be blank and Order Should be numeric Also!!');
	    	redirect(base_url('Master/menu_three/menu_add'));
        }
	}

	public function menu_edit($id){
		$data['id'] = $id;
		$data['title'] = "Edit Menu";
		$data['cur_page'] = 'menu_three';
		$data['cur_sub_page'] = '';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/menu_three/edit');
		$this->load->view('admin/inc/footer');
	}

	public function updateFirstMenu(){
		$post = $this->input->post();

		if(!empty($post['menu_order']) && is_numeric($post['menu_order'])){
			$data = array(
				'menu_type'=>'Page', 
	            'page_id'=>$post['page_id'], 
	            'menu_name'=>'',
	            'menu_url'=>'',
	            'menu_order'=>$post['menu_order'],
	            'menu_parent'=>$post['menu_parent']
			);

			$this->admin->update('tbl_menu_three', $data, $post['id']);

			$this->session->set_flashdata('success','Menu is updated successfully!!');
		    redirect(base_url('Master/menu_three/menu_edit/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Page, Parent, Order, Url Can not be blank and Order Should be numeric Also!!');
		    redirect(base_url('Master/menu_three/menu_edit/'.$post['id']));
		}
	}

	public function updateSecondMenu(){
		$post = $this->input->post();

		if(!empty($post['menu_order']) && is_numeric($post['menu_order'])){
			$data = array(
				'menu_type'=>'Other', 
	            'page_id'=>'', 
	            'menu_name'=>$post['menu_name'],
	            'menu_url'=>$post['menu_url'],
	            'menu_order'=>$post['menu_order'],
	            'menu_parent'=>$post['menu_parent'],
	            'menu_target' => $post['menu_target']
			);

			$this->admin->update('tbl_menu_three', $data, $post['id']);

			$this->session->set_flashdata('success','Menu is updated successfully!!');
		    redirect(base_url('Master/menu_three/menu_edit/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Page, Parent, Order, Url Can not be blank and Order Should be numeric Also!!');
		    redirect(base_url('Master/menu_three/menu_edit/'.$post['id']));
		}
	}

	public function deleteMenu($id){
		$this->db->delete('tbl_menu_three', array('id' => $id));
		$this->session->set_flashdata('success','Menu Delete Successfully!!');
	    redirect(base_url('Master/menu_three/view'));
	}


}
