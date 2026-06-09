<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscriber extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
	}

	public function index(){	}

	public function all(){

		$data['title'] = "Subscriber";
		$data['cur_page'] = 'subscriber';
		$data['cur_sub_page'] = 'all';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/subscriber/view');
		$this->load->view('admin/inc/footer');
	}
	public function send_email(){
		$data['title'] = "Send Email";
		$data['cur_page'] = 'subscriber';
		$data['cur_sub_page'] = 'email';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/subscriber/send_email');
		$this->load->view('admin/inc/footer');
	}

	public function remove(){
		$statement = $this->db->query("DELETE FROM tbl_subscriber WHERE subs_active=0");

		$this->session->set_flashdata('success','Subscriber Delete Successfully!!');
		redirect(base_url('Master/subscriber/all'));
	}

	public function delete($id){
		$statement = $this->db->query("DELETE FROM tbl_subscriber WHERE subs_id=".$id);

		$this->session->set_flashdata('success','Subscriber Delete Successfully!!');
		redirect(base_url('Master/subscriber/all'));
	}

	public function exportCsv(){

		$now = gmdate("D, d M Y H:i:s");
		header('Content-Type: text/csv; charset=utf-8');  
		header('Content-Disposition: attachment; filename=subscriber_list.csv');  
		$output = fopen("php://output", "w");  
		fputcsv($output, array('SL', 'Subscriber Email'));  
		$statement = $this->db->query("SELECT * FROM tbl_subscriber WHERE subs_active=1");							
		foreach ($statement->result() as $row) {
			fputcsv($output, array($row->subs_id,$row->subs_email));
		} 
		fclose($output);
	}


}