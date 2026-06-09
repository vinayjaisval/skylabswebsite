<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
	}

	public function index(){	}

	public function view(){

		$data['title'] = "Faq";
		$data['cur_page'] = 'faq';
		$data['cur_sub_page'] = 'faq';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/faq/view');
		$this->load->view('admin/inc/footer');
	}

	public function add(){
		$data['title'] = "Add Faq";
		$data['cur_page'] = 'faq';
		$data['cur_sub_page'] = 'faq';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/faq/add');
		$this->load->view('admin/inc/footer');
	}

	

	public function addFaq(){
		$post = $this->input->post();

		if( !empty($post['faq_title']) && !empty($post['faq_content']) && !empty($post['faq_category_id']) ){

			$data = array(
				'faq_title' => $post['faq_title'],
				'faq_content' => $post['faq_content'],
				'faq_category_id' => $post['faq_category_id']
			);
			$this->admin->insert('tbl_faq', $data);
			$this->session->set_flashdata('success','Faq Add Successfully!!');
		    redirect(base_url('Master/faq/add'));
		} else {
			$this->session->set_flashdata('error','All Fiels are Required!!');
		    redirect(base_url('Master/faq/add'));
		}
	}

	public function edit($id){
		$data['title'] = "Edit Faq";
		$data['cur_page'] = 'faq';
		$data['cur_sub_page'] = 'faq';
		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/faq/edit');
		$this->load->view('admin/inc/footer');
	}

	

	public function updateFaq(){
		$post = $this->input->post();

		if( !empty($post['faq_title']) && !empty($post['faq_content']) && !empty($post['faq_category_id']) ){
			
			$data = array(
				'faq_title' => $post['faq_title'],
				'faq_content' => $post['faq_content'],
				'faq_category_id' => $post['faq_category_id']
			);
			$this->admin->update1('tbl_faq', $data, $post['id'], 'faq_id');
			$this->session->set_flashdata('success','Faq Update Successfully!!');
			redirect(base_url('Master/faq/edit/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill All Fields!!');
			redirect(base_url('Master/faq/edit/'.$post['id']));
		}

	}

	

	public function delete($id){
		
		$this->db->delete('tbl_faq', array('faq_id' => $id));
		$this->session->set_flashdata('success','Faq Delete Successfully!!');
	    redirect(base_url('Master/faq/view'));
	}


	// FAQ Category
	public function category(){
		$data['title'] = "Faq Category";
		$data['cur_page'] = 'faq';
		$data['cur_sub_page'] = 'cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/faq/category');
		$this->load->view('admin/inc/footer');
	}

	public function addFaqCat(){
		$data['title'] = "Add Faq Category";
		$data['cur_page'] = 'faq';
		$data['cur_sub_page'] = 'cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/faq/add_category');
		$this->load->view('admin/inc/footer');
	}

	public function addFaqCatValue(){
		$faq_category_name = $this->input->post('faq_category_name');

		if( !empty($faq_category_name)){
			$Check = $this->admin->findValue($faq_category_name, 'faq_category_name', 'tbl_faq_category');
			if( !empty($Check)){
				$this->session->set_flashdata('error','Name Already Exists!!');
	    		redirect(base_url('Master/faq/addFaqCat'));
	    		die();
			}

			$data = array(
				'faq_category_name' => $faq_category_name
			);

			$this->admin->insert('tbl_faq_category', $data);
			$this->session->set_flashdata('success','Faq Category Add Successfully!!');
		    redirect(base_url('Master/faq/addFaqCat'));

		}else{
			$this->session->set_flashdata('error','Please Fill Name!!');
			redirect(base_url('Master/faq/addFaqCat'));
		}
	}

	public function editFaqCat($id){
		$data['id'] = $id;
		$data['title'] = "Add Faq Category";
		$data['cur_page'] = 'faq';
		$data['cur_sub_page'] = 'cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/faq/edit_category');
		$this->load->view('admin/inc/footer');
	}
	public function updateFaqCat(){
		$post = $this->input->post();

		if(  !empty($post['faq_category_name']) ){
			$pageName = $this->admin->findValue_isnot($post['faq_category_name'], 'faq_category_name', $post['id'], 'faq_category_id', 'tbl_faq_category');
			if( !empty($pageName)){
				$this->session->set_flashdata('error','Name <b>('.$post["faq_category_name"].')</b> Already Exists!!');
	    		redirect(base_url('Master/faq/editFaqCat/'.$post['id']));
	    		die();
			}

			$data = array(
				'faq_category_name' => $post['faq_category_name']
			);
			$this->admin->update1('tbl_faq_category', $data, $post['id'], 'faq_category_id');
			$this->session->set_flashdata('success','Faq Categorys Update Successfully!!');
			redirect(base_url('Master/faq/editFaqCat/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill All Fields!!');
			redirect(base_url('Master/faq/editFaqCat/'.$post['id']));
		}	
	}


	public function deleteFaq($id){
		
		$this->db->delete('tbl_faq_category', array('faq_category_id' => $id));
		$this->db->delete('tbl_faq', array('faq_category_id' => $id));
		$this->session->set_flashdata('success','Faq Category Delete Successfully!!');
	    redirect(base_url('Master/faq/category'));
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
