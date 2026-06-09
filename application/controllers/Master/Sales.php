<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
	}

	public function index(){	}

	public function orders(){

		$data['title'] = "Orders";
		$data['cur_page'] = 'sales';
		$data['cur_sub_page'] = 'order';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/sales/orders');
		$this->load->view('admin/inc/footer');
	}
	public function returns(){

		$data['title'] = "Orders";
		$data['cur_page'] = 'sales';
		$data['cur_sub_page'] = 'return';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/sales/return');
		$this->load->view('admin/inc/footer');
	}
	public function coupon($id=""){

		$data['title'] = "Orders";
		$data['cur_page'] = 'sales';
		$data['cur_sub_page'] = 'coupon';
		
		$data['id'] = $id;
		
		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/sales/coupon');
		$this->load->view('admin/inc/footer');
	}

	public function addCoupon(){
		$post = $this->input->post();
		
		$s_date = date("Y-m-d", strtotime($post['s_date']));
		$e_date = date("Y-m-d", strtotime($post['e_date']));
		
		if( !empty($post['name']) ){
			$data = array(
				'name' => $post['name'],
				'dis_type' => $post['dis_type'],
				'amount' => $post['amount'],
				's_date' => $s_date,
				'e_date' => $e_date
			);
			if(!empty($post['id'])){
				$this->admin->update('tbl_coupon', $data, $post['id']);
				$this->session->set_flashdata('success','Record Update Successfully!!');
			} else{
				$this->admin->insert('tbl_coupon', $data);
				$this->session->set_flashdata('success','Record Add Successfully!!');
			}
		} else {
			$this->session->set_flashdata('error','Name  Field is Required!!');
		}
		redirect(base_url('Master/sales/coupon'));
	}

	public function print_coupon($id){
		$val = $this->admin->findValue($id, 'id', 'tbl_coupon');
		foreach ($val as $row) {
			$data['name'] = $row->name;
			$data['dis_type'] = $row->dis_type;
			$data['discount'] = $row->amount;
			$data['s_date'] = $row->s_date;
			$data['e_date'] = $row->e_date;
		}
		$setting = $this->admin->fetch_data('tbl_settings');
		foreach ($setting as $row) {
			$data['logo'] = $row->logo;
		}
		$this->load->view('admin/pages/sales/gift', $data);
	}

	public function delete_coupon($id){
		$this->db->delete('tbl_coupon', array('id' => $id));
		$this->session->set_flashdata('success','Record Delete Successfully!!');
		redirect(base_url('Master/sales/coupon'));
	}

	public function ajaxStatusUpd(){
		$status = $this->input->post('status');
		$id = $this->input->post('id');
		$data = array(
			'status' => $status
		);
		$this->admin->update1('tbl_prod_order', $data, $id, 'order_id');
	}
	

	public function orders_details($url,$order_id){

		$data['title'] = "Orders Details";
		$data['cur_page'] = 'sales';
		$data['cur_sub_page'] = 'order';

		$data['order_id'] = $order_id;
		$setting = $this->admin->fetch_data('tbl_settings');
		foreach ($setting as $row) {
			$data['logo'] = $row->logo;
			$data['address'] = $row->contact_address;
			$data['contact_phone'] = $row->contact_phone;
			$data['contact_email'] = $row->contact_email;
		}
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/sales/orders_details');
		$this->load->view('admin/inc/footer');
	}

}
