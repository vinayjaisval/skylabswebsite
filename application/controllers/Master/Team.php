<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
	}

	public function index(){	}

	public function view(){

		$data['title'] = "Team Member";
		$data['cur_page'] = 'team';
		$data['cur_sub_page'] = 'tm';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/team/view');
		$this->load->view('admin/inc/footer');
	}

	public function add(){
		$data['title'] = "Add Team Member";
		$data['cur_page'] = 'team';
		$data['cur_sub_page'] = 'tm';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/team/add');
		$this->load->view('admin/inc/footer');
	}

	

	public function addTeam(){

		$post = $this->input->post();
		
		$name_file = $_FILES['photo']['name'];
		$name_file2 = $_FILES['banner']['name'];

		if( empty($post['slug'])){
			$slug = url_title($post['name'], "dash", TRUE);
		} else {
			$slug = url_title($post['slug'], "dash", TRUE);
		}

		if( !empty($name_file) && !empty($post['name']) && !empty($post['designation_id']) ){

			// Image Uploads
			$this->_do_upload('photo');
			$fileName1 = $this->upload->data('file_name');
			$this->_do_upload('banner');
			$fileName2 = $this->upload->data('file_name');

			$data = array(
				'name' => $post['name'],
				'slug' => $slug,
				'designation_id' => $post['designation_id'],
				'degree' => $post['degree'],
				'detail' => $post['detail'],
				'facebook' => $post['facebook'],
				'twitter' => $post['twitter'],
				'linkedin' => $post['linkedin'],
				'youtube' => $post['youtube'],
				'google_plus' => $post['google_plus'],
				'instagram' => $post['instagram'],
				'flickr' => $post['flickr'],
				'address' => $post['address'],
				'practice_location' => $post['practice_location'],
				'phone' => $post['phone'],
				'email' => $post['email'],
				'website' => $post['website'],
				'status' => $post['status'],
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description'],
				'photo' => $fileName1,
				'banner' => $fileName2,
				'month' => $this->currentMonth()
			);
			$this->admin->insert('tbl_team_member', $data);
			$this->session->set_flashdata('success','Team Member is added successfully!!');
		    redirect(base_url('Master/team/add'));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Fields!!');
		    redirect(base_url('Master/team/add'));
		}
	}

	public function edit($id){
		$data['title'] = "Edit Team Member";
		$data['cur_page'] = 'team';
		$data['cur_sub_page'] = 'tm';
		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/team/edit');
		$this->load->view('admin/inc/footer');
	}

	

	public function updateTeam(){
		$post = $this->input->post();
		if( empty($post['slug'])){
			$slug = url_title($post['name'], "dash", TRUE);
		} else {
			$slug = url_title($post['slug'], "dash", TRUE);
		}

		if( !empty($post['name']) && !empty($post['designation_id']) ){
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


			if( $this->_do_upload('banner')){
			    $fileName2 = $this->upload->data('file_name');
			    if( ! empty($fileName2)){
			    	// Remove Old Image if new one is updated
					$imageRemove2 = $this->input->post('current_banner');
					$imageLink2=base_url("assets/admin/uploads/".$imageRemove2);
					$dd2 = substr($imageLink2, strlen(base_url()));
			        unlink($dd2);

			        $uploadImage2 = $fileName2;
			    } else {
			        $uploadImage2 = $this->input->post('current_banner');
			    }
			} else{
				$uploadImage2 = $this->input->post('current_banner');
			}



			$data = array(
				'name' => $post['name'],
				'slug' => $slug,
				'designation_id' => $post['designation_id'],
				'degree' => $post['degree'],
				'detail' => $post['detail'],
				'facebook' => $post['facebook'],
				'twitter' => $post['twitter'],
				'linkedin' => $post['linkedin'],
				'youtube' => $post['youtube'],
				'google_plus' => $post['google_plus'],
				'instagram' => $post['instagram'],
				'flickr' => $post['flickr'],
				'address' => $post['address'],
				'practice_location' => $post['practice_location'],
				'phone' => $post['phone'],
				'email' => $post['email'],
				'website' => $post['website'],
				'status' => $post['status'],
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description'],
				'photo' => $uploadImage1,
				'banner' => $uploadImage2
			);
			$this->admin->update('tbl_team_member', $data, $post['id']);
			$this->session->set_flashdata('success','Team Member Update Successfully!!');
			redirect(base_url('Master/team/edit/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill All Fields!!');
			redirect(base_url('Master/team/edit/'.$post['id']));
		}

	}

	

	public function delete($id){
		
		$this->db->delete('tbl_team_member', array('id' => $id));
		$this->session->set_flashdata('success','Team Member Delete Successfully!!');
	    redirect(base_url('Master/team/view'));
	}


	// FAQ Category
	public function designation(){
		$data['title'] = "Designation";
		$data['cur_page'] = 'team';
		$data['cur_sub_page'] = 'team_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/team/category');
		$this->load->view('admin/inc/footer');
	}

	public function add_designation(){
		$data['title'] = "Add Designation";
		$data['cur_page'] = 'team';
		$data['cur_sub_page'] = 'team_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/team/add_designation');
		$this->load->view('admin/inc/footer');
	}

	public function designationAdd(){
		$designation_name = $this->input->post('designation_name');

		if( !empty($designation_name)){
			$Check = $this->admin->findValue($designation_name, 'designation_name', 'tbl_designation');
			if( !empty($Check)){
				$this->session->set_flashdata('error','Name Already Exists!!');
	    		redirect(base_url('Master/team/add_designation'));
	    		die();
			}

			$data = array(
				'designation_name' => $designation_name
			);

			$this->admin->insert('tbl_designation', $data);
			$this->session->set_flashdata('success','Designation Add Successfully!!');
		    redirect(base_url('Master/team/add_designation'));

		}else{
			$this->session->set_flashdata('error','Please Fill Name!!');
			redirect(base_url('Master/team/add_designation'));
		}
	}

	public function edit_designation($id){
		$data['id'] = $id;
		$data['title'] = "Edit Designation";
		$data['cur_page'] = 'team';
		$data['cur_sub_page'] = 'team_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/team/edit_designation');
		$this->load->view('admin/inc/footer');
	}
	public function update_designation(){
		$post = $this->input->post();

		if(  !empty($post['designation_name']) ){
			$pageName = $this->admin->findValue_isnot($post['designation_name'], 'designation_name', $post['id'], 'designation_id', 'tbl_designation');
			if( !empty($pageName)){
				$this->session->set_flashdata('error','Name <b>('.$post["designation_name"].')</b> Already Exists!!');
	    		redirect(base_url('Master/team/edit_designation/'.$post['id']));
	    		die();
			}

			$data = array(
				'designation_name' => $post['designation_name']
			);
			$this->admin->update1('tbl_designation', $data, $post['id'], 'designation_id');
			$this->session->set_flashdata('success','Designation Update Successfully!!');
			redirect(base_url('Master/team/edit_designation/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill All Fields!!');
			redirect(base_url('Master/team/edit_designation/'.$post['id']));
		}	
	}


	public function delete_designation($id){
		
		$this->db->delete('tbl_designation', array('designation_id' => $id));
		$this->db->delete('tbl_team_member', array('designation_id' => $id));
		$this->session->set_flashdata('success','Designation Delete Successfully!!');
	    redirect(base_url('Master/team/designation'));
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


    public function currentMonth(){
    	date_default_timezone_set('Asia/Calcutta');
    	return $date=date("M d, Y");
    }


}
