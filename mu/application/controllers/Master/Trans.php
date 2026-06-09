<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trans extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
	}

	public function index(){	}

	public function category(){

		$data['title'] = "Category Trans";
		$data['cur_page'] = 'trans';
		$data['cur_sub_page'] = 'category';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/trans/category');
		$this->load->view('admin/inc/footer');
	}
	public function sub_category(){

		$data['title'] = "Category Trans";
		$data['cur_page'] = 'trans';
		$data['cur_sub_page'] = 'sub_category';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/trans/sub_category');
		$this->load->view('admin/inc/footer');
	}
	public function products(){

		$data['title'] = "Products Trans";
		$data['cur_page'] = 'trans';
		$data['cur_sub_page'] = 'product';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/trans/product');
		$this->load->view('admin/inc/footer');
	}

	
	public function sub_sub_category(){
		$data['title'] = "Sub Category Trans";
		$data['cur_page'] = 'trans';
		$data['cur_sub_page'] = 'sub_sub_category';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/trans/sub');
		$this->load->view('admin/inc/footer');
	}
	

	public function active_category($id){
		
		$data1 = array(
			'status' => 1
		);
		$this->admin->update1('tbl_category_prod', $data1, $id, 'category_id');
		$this->session->set_flashdata('success','Category Restore Successfully!!');
	    redirect(base_url('Master/trans/category'));
	}

	public function active_sub_category($id){
		
		$data1 = array(
			'status' => 1
		);
		$this->admin->update1('tbl_sub_category_prod', $data1, $id, 'id');
		$this->session->set_flashdata('success','Category Restore Successfully!!');
	    redirect(base_url('Master/trans/sub_category'));
	}

	public function active_product($id){
		
		$data1 = array(
			'status' => 1
		);
		$this->admin->update1('tbl_products', $data1, $id, 'prod_id');
		$this->session->set_flashdata('success','Product Restore Successfully!!');
	    redirect(base_url('Master/trans/products'));
	}

	public function delete_category($id){
		$this->db->delete('tbl_category_prod', array('category_id' => $id));
		$this->db->delete('tbl_sub_category_prod', array('category_id' => $id));
		$this->db->delete('tbl_products', array('category_id' => $id));
		$this->session->set_flashdata('success','Category Delete Successfully!!');
	    redirect(base_url('Master/trans/category'));
	}
	public function delete_sub_category($id){
		$this->db->delete('tbl_sub_category_prod', array('id' => $id));
		$this->db->delete('tbl_sub_sub_category_prod', array('sub_category_id' => $id));
		$this->db->delete('tbl_products', array('sub_category_id' => $id));
		$this->session->set_flashdata('success','Sub Category Delete Successfully!!');
	    redirect(base_url('Master/trans/sub_category'));
	}
	public function delete_product($id){
		$this->db->delete('tbl_products', array('prod_id' => $id));
		$this->db->delete('tbl_prod_image', array('prod_id' => $id));
		$this->session->set_flashdata('success','Products Delete Successfully!!');
	    redirect(base_url('Master/trans/products'));
	}

	public function active_sub($id){
		
		$data1 = array(
			'status' => 1
		);
		$this->admin->update1('tbl_sub_sub_category_prod', $data1, $id, 'id');
		$this->session->set_flashdata('success','Category Restore Successfully!!');
	    redirect(base_url('Master/trans/sub_sub_category'));
	}

	public function delete_sub($id){
		$this->db->delete('tbl_sub_sub_category_prod', array('id' => $id));
		$this->db->delete('tbl_products', array('sub_sub_category_id' => $id));
		$this->session->set_flashdata('success','Sub Category Delete Successfully!!');
	    redirect(base_url('Master/trans/sub_sub_category'));
	}

}
