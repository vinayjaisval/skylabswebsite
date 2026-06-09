<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attribute extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
	}

	public function index(){	}

	public function size($id=""){

		$data['title'] = "Size";
		$data['cur_page'] = 'attribute';
		$data['cur_sub_page'] = 'size';
		
		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/attribute/size');
		$this->load->view('admin/inc/footer');
	}

	public function addValues(){
		$post = $this->input->post();
		if( !empty($post['name']) ){
			$data = array(
				'name' => $post['name'],
				'description' => $post['description']
			);
			if(!empty($post['id'])){
				$this->admin->update('tbl_prod_size', $data, $post['id']);
				$this->session->set_flashdata('success','Record Update Successfully!!');
			} else{
				$this->admin->insert('tbl_prod_size', $data);
				$this->session->set_flashdata('success','Record Add Successfully!!');
			}
		} else {
			$this->session->set_flashdata('error','Name  Field is Required!!');
		}
		redirect(base_url('Master/attribute/size'));
	}

	public function delete($id){
		$statement = $this->db->query("SELECT prod_id FROM tbl_products WHERE FIND_IN_SET({$id}, size)");
		if( $statement->num_rows() <= 0 ){
			$this->db->delete('tbl_prod_size', array('id' => $id));
			$this->session->set_flashdata('success','Record Delete Successfully!!');
		    redirect(base_url('Master/attribute/size'));
		} else {
			$this->session->set_flashdata('error','Record did not Delete, Because Size available in Products!!');
		    redirect(base_url('Master/attribute/size'));
		}
	}


	public function color($id=""){

		$data['title'] = "Color";
		$data['cur_page'] = 'attribute';
		$data['cur_sub_page'] = 'color';
		
		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/attribute/color');
		$this->load->view('admin/inc/footer');
	}

	public function addValues1(){
		$post = $this->input->post();
		if( !empty($post['name']) ){
			$data = array(
				'name' => $post['name']
			);
			if(!empty($post['id'])){
				$this->admin->update('tbl_prod_color', $data, $post['id']);
				$this->session->set_flashdata('success','Record Update Successfully!!');
			} else{
				$this->admin->insert('tbl_prod_color', $data);
				$this->session->set_flashdata('success','Record Add Successfully!!');
			}
		} else {
			$this->session->set_flashdata('error','Name  Field is Required!!');
		}
		redirect(base_url('Master/attribute/color'));
	}

	public function delete1($id){
		$statement = $this->db->query("SELECT prod_id FROM tbl_products WHERE FIND_IN_SET({$id}, colors)");
		if( $statement->num_rows() <= 0 ){
			$this->db->delete('tbl_prod_color', array('id' => $id));
			$this->session->set_flashdata('success','Record Delete Successfully!!');
		    redirect(base_url('Master/attribute/color'));
		} else {
			$this->session->set_flashdata('error','Record did not Delete, Because Color available in Products!!');
		    redirect(base_url('Master/attribute/color'));
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
