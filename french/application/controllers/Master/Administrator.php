<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin');
	}

	public function index(){
		$data['title'] = "Login";
		$this->load->view('admin/pages/profile/login');
	}

	public function login(){
		$post = $this->input->post();

		$username = $this->security->xss_clean($this->input->post('email'));
        $password = md5($this->security->xss_clean($this->input->post('password')));
        if( !empty($username) && !empty($password)){
	        $Login = $this->admin->Login($username, $password);
	        if(count($Login) >= 1){
	        	foreach ($Login as $row) {
	        		$userid = $row->id;
	                $name = $row->name;
	                $username = $row->email;
	                $userimage = $row->photo;
	                $role = $row->role;
	        	}
	        	$data = array(
	                'userid' => $userid,
	                'name' => $name,
	                'username' => $username,
	                'userimage' => $userimage,
	                'role' => $role
	            );
	            $this->session->set_userdata($data);
	            redirect(base_url('Master/home'));
	        } else {
	        	$this->session->set_flashdata('error', 'Invalid User or Password!!'); 
	        	redirect(base_url('Administrator'));
	        }
    	} else { $this->session->set_flashdata('error', 'Please Fill User Name and Password!!');
    		redirect(base_url('Administrator'));
    	}
	}


	public function logout(){
    	$this->session->sess_destroy();
    	return redirect(base_url('Administrator'));
    }
}
