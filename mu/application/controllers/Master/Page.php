<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
		$this->load->model('home_model');
	}

	public function index(){	}

	public function page(){

		$data['title'] = "Pages";
		$data['cur_page'] = 'page';
		$data['cur_sub_page'] = '';


		$data['pages'] = $this->admin->fetch_data('tbl_page');

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/page/page');
		$this->load->view('admin/inc/footer');
	}

	public function page_add(){
		$data['title'] = "Add New Page";
		$data['cur_page'] = 'page';
		$data['cur_sub_page'] = '';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/page/page_add');
		$this->load->view('admin/inc/footer');
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


	public function savePage(){
		$post = $this->input->post();
		$name_file = $_FILES['banner']['name'];

		if( !empty($post['page_slug'])){
			$url_title = url_title($post['page_slug'], "dash", TRUE);
		} else{
			$url_title = url_title($post['page_name'], "dash", TRUE);
		}
		$uniqSlug = $this->check_unique('page_slug',$url_title,'tbl_page');

		if(!empty($post['page_name']) ){
			$pageNameCheck = $this->admin->findValue($post['page_name'], 'page_name', 'tbl_page');
			if( !empty($pageNameCheck)){
				$this->session->set_flashdata('error','Page Name Already Exists!!');
	    		redirect(base_url('Master/page/page_add'));
	    		die();
			}

			// Image Uploads
			$this->_do_upload('banner');
			if( !empty($name_file)){
				$fileName1 = $this->upload->data('file_name');
			} else {
				$fileName1 = '';
			}

			$data = array(
				'page_name' => $post['page_name'],
				'page_slug' => $uniqSlug,
				'page_layout' => $post['page_layout'],
				'page_content' => $post['page_content'],
				'status' => $post['status'],
				'meta_title' =>$post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'related_page' => $post['related_page'],
				'short_content' => $post['short_content'],
				'meta_description' => $post['meta_description'],
				'banner' => $fileName1
			);

			$this->admin->insert('tbl_page', $data);
			$this->session->set_flashdata('success','Page Add Successfully!!');
	    	redirect(base_url('Master/page/page_add'));
		} else {	
			$this->session->set_flashdata('error','Page Name and Banner Can not Blank!!');
	    	redirect(base_url('Master/page/page_add'));
		}
	}

	public function page_edit($id){
		$data['id'] = $id;
		$data['title'] = "Edit Page";
		$data['cur_page'] = 'page';
		$data['cur_sub_page'] = '';


		$page = $this->admin->editValue($id, 'tbl_page');

		foreach ($page as $row) {
			$data['page_name']        = $row->page_name;
			$data['page_slug']        = $row->page_slug;
			$data['page_content']     = $row->page_content;
			$data['page_layout']      = $row->page_layout;
			$data['banner']           = $row->banner;
			$data['status']           = $row->status;
			$data['meta_title']       = $row->meta_title;
			$data['meta_keyword']     = $row->meta_keyword;
			$data['meta_description'] = $row->meta_description;
			$data['related_page'] = $row->related_page;
			$data['short_content'] = $row->short_content;
		}

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/page/page_edit');
		$this->load->view('admin/inc/footer');
	}

	public function check_unique1($key, $value, $table, $id){
        $check = $this->admin->checkUnique1($key, $value, $table, $id);
        if( ! empty($check)){
        	$value1 = $value . '1';
            return $this->check_unique1($key, $value1, $table, $id);
        } else {
            return $value; 
        }
    }

	public function updatePage(){
		$post = $this->input->post();

		if( !empty($post['page_slug'])){
			$url_title1 = url_title($post['page_slug'], "dash", TRUE);
		} else{
			$url_title1 = url_title($post['page_name'], "dash", TRUE);
		}
		$uniqSlug1 = $this->check_unique1('page_slug',$url_title1,'tbl_page', $post['id']);

		//echo $uniqSlug; die();
		
		if(!empty($post['page_name'])){
			$pageName = $this->admin->findValue_isnot($post['page_name'], 'page_name', $post['id'], 'id', 'tbl_page');
			if( !empty($pageName)){
				$this->session->set_flashdata('error','Page Name <b>('.$post["page_name"].')</b> Already Exists!!');
	    		redirect(base_url('Master/page/page_edit/'.$post['id']));
	    		die();
			}
			// Update Image
	    	if( $this->_do_upload('banner')){
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

			// Data Update
			$data = array(
				'page_name' => $post['page_name'],
				'page_slug' => $uniqSlug1,
				'page_layout' => $post['page_layout'],
				'page_content' => $post['page_content'],
				'status' => $post['status'],
				'short_content' => $post['short_content'],
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'related_page' => $post['related_page'],
				'meta_description' => $post['meta_description'],
				'banner' => $uploadImage1
			);

			
			$this->admin->update('tbl_page', $data, $post['id']);
			$this->session->set_flashdata('success','Page Content Update Successfully!!');
	    	redirect(base_url('Master/page/page_edit/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Page Name Can not Blank!!');
	    	redirect(base_url('Master/page/page_edit/'.$post['id']));
		}
	}

	public function deletePage($id){

		$this->db->delete('tbl_page', array('id' => $id));
		$this->session->set_flashdata('success','Page Delete Successfully!!');
	    redirect(base_url('Master/page/page'));
	}

	
	//===============================


	public function service_page(){

		$data['title'] = "Service Pages";
		$data['cur_page'] = 'serv_page';
		$data['cur_sub_page'] = '';


		$data['pages'] = $this->home_model->get_where('tbl_page', 'page_layout', 'Service Page Layout');

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/page/service_page');
		$this->load->view('admin/inc/footer');
	}

	public function add_content($id){
		$data['id'] = $id;
		$data['title'] = "Edit Page";
		$data['cur_page'] = 'serv_page';
		$data['cur_sub_page'] = '';


		$page = $this->admin->editValue($id, 'tbl_page');

		foreach ($page as $row) {
			$data['page_name']        = $row->page_name;
			$data['page_slug']        = $row->page_slug;
			$data['page_content']     = $row->page_content;
			$data['page_layout']      = $row->page_layout;
			$data['banner']           = $row->banner;
			$data['status']           = $row->status;
			$data['meta_title']       = $row->meta_title;
			$data['meta_keyword']     = $row->meta_keyword;
			$data['meta_description'] = $row->meta_description;
			$data['related_page'] = $row->related_page;
			$data['short_content'] = $row->short_content;
		}

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/page/page_edit_service');
		$this->load->view('admin/inc/footer');
	}

	public function updatePageContent(){
		$post = $this->input->post();

		// Update Image
		if( $this->_do_upload('page8')){
			$fileName1 = $this->upload->data('file_name');
			if( ! empty($fileName1)){
				$uploadImage1 = $fileName1;
			} else {
				$uploadImage1 = $this->input->post('page8_old');
			}
		} else{
			$uploadImage1 = $this->input->post('page8_old');
		}

		// Data Update
		$data = array(
			'page_id' => $post['page_id'],
			'page1' => $post['page1'],
			'page2' => $post['page2'],
			'page3' => $post['page3'],
			'page4' => $post['page4'],
			'page5' => $post['page5'],
			'page6' => $post['page6'],
			'page7' => $post['page7'],
			'page8' => $uploadImage1
		);

		$sql = $this->db->query("SELECT id FROM tbl_page_content WHERE page_id = '".$_POST['page_id']."'");
		
		
		if($sql->num_rows() > 0){
			$this->admin->update1('tbl_page_content', $data, $post['page_id'], 'page_id');
		} else {
			$this->admin->insert('tbl_page_content', $data);
		}
		
		
		$this->session->set_flashdata('success','Page Content Update Successfully!!');
		redirect(base_url('Master/page/add_content/'.$post['page_id']));
		
		
	}

	//===============

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
