<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_account extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('admin');
		date_default_timezone_set('Asia/Calcutta');
		$this->load->library('email');
	}

	public function index(){
		$data['meta_keyword'] = '';
		$data['meta_description'] = '';
		$data['meta_title'] = 'My Account';

		$setting = $this->home_model->fetch_data('tbl_settings', 'id');
		foreach ($setting as $row) {
			$data['logo'] = $row->logo;
			$data['favicon'] = $row->favicon;
			$data['footer_about'] = $row->footer_about;
			$data['footer_copyright'] = $row->footer_copyright;
			$data['contact_email'] = $row->contact_email;
			$data['contact_address'] = $row->contact_address;
			$data['contact_phone'] = $row->contact_phone;
		}

		
		$data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
		$data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
		$data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
		$data['order_prod'] = $this->home_model->get_prod_order();

		if( $this->session->userdata('end_user_id')){
			$data['user_details'] = $this->home_model->get_where('tbl_user_end', 'id', $this->session->userdata('end_user_id'));
		}
		

		$this->load->view('pages/inc/header', $data);
		if( $this->session->userdata('end_user_id')){
			$this->load->view('pages/my_account');
		} else {
			$this->load->view('pages/login'); // if not login
		}
		$this->load->view('pages/inc/footer');
		
	}

	public function saveEndUser(){
		$post = $this->input->post();

		if( !empty($post['name']) && !empty($post['email']) && !empty($post['phone']) && !empty($post['password']) && !empty($post['user-type'])){

			$Check = $this->home_model->get_where('tbl_user_end', 'mobile', $post['phone']);
			if( !empty($Check)){
				$this->session->set_flashdata('error', 'Phone (<b>'.$post['phone'].'</b>) Already Exists!!');
	    		redirect(base_url('my-account.html'));
	    		die();
			}

			$data = array(
				'name' => $post['name'],
				'email' => $post['email'],
				'mobile' => $post['phone'],
				'user_pass' => md5($post['password']),
				'user_type' => $post['user-type'],
				'status' => 1
			);
			$this->home_model->insert('tbl_user_end', $data);
			$messages = "Your One Time Password is ".$post['name']." for login. Do not share the OTP with anyone for security reasons.";
			$this->sendsms($post['phone'], $messages);
			$this->session->set_flashdata('success','User Add Successfully!!');
		    redirect(base_url('my-account.html'));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Field First!!');
		    redirect(base_url('my-account.html'));
		}	
	}

	

	public function loginEndUser(){
		$post = $this->input->post();

		$username = $this->security->xss_clean($this->input->post('email'));
        $password = md5($this->security->xss_clean($this->input->post('password')));
        if( !empty($username) && !empty($password)){
	        $Login = $this->home_model->Login($username, $password);
	        if(count($Login) >= 1){
	        	foreach ($Login as $row) {
	        		$userid = $row->id;
	                $user_name = $row->name;
	                $user_email = $row->email;
	                $user_mobile = $row->mobile;
	                $user_type = $row->user_type;
	        	}
	        	$data = array(
	                'end_user_id' => $userid,
	                'end_user_name' => $user_name,
	                'end_user_email' => $user_email,
	                'end_user_mobile' => $user_mobile,
	                'end_user_type' => $user_type
	            );
	            $this->session->set_userdata($data);
	            redirect(base_url('my-account.html'));
	        } else {
	        	$this->session->set_flashdata('error', 'Invalid User or Password!!'); 
	        	redirect(base_url('my-account.html'));
	        }
    	} else { $this->session->set_flashdata('error', 'Please Fill User Name and Password!!');
    		redirect(base_url('my-account.html'));
    	}
	}

	public function updateEndUser(){
		$post = $this->input->post();


		if( !empty($post['name']) && !empty($post['email_id']) && $post['mobile']){

			$ckeck = $this->home_model->findValue_isnot($post['email_id'], 'email', $post['id'], 'id', 'tbl_user_end');
			if( !empty($ckeck)){
				$this->session->set_flashdata('error','Email <b>('.$post["email_id"].')</b> Already Exists!!');
	    		redirect(base_url('my-account.html'));
	    		die();
			}

			$ckeck1 = $this->home_model->findValue_isnot($post['mobile'], 'mobile', $post['id'], 'id', 'tbl_user_end');
			if( !empty($ckeck1)){
				$this->session->set_flashdata('error','Mobile <b>('.$post["mobile"].')</b> Already Exists!!');
	    		redirect(base_url('my-account.html'));
	    		die();
			}

			if( !empty($post['password']) ){
				$data = array(
					'name' => $post['name'],
					'email' => $post['email_id'],
					'user_pass' => md5($post['password']),
					'mobile' => $post['mobile'],
					'company_name' => $post['company_name'],
					'designation' => $post['designation'],
					'comp_type' => $post['comp_type'],
					'address' => $post['address'],
					'landmark' => $post['landmark'],
					'gst' => $post['gst'],
					'acc_name' => $post['acc_name'],
					'acc_no' => $post['acc_no'],
					'ifsc_code' => $post['ifsc_code'],
					'branch' => $post['branch']
				);
			} else {
				$data = array(
					'name' => $post['name'],
					'email' => $post['email_id'],
					'mobile' => $post['mobile'],
					'company_name' => $post['company_name'],
					'designation' => $post['designation'],
					'comp_type' => $post['comp_type'],
					'address' => $post['address'],
					'landmark' => $post['landmark'],
					'gst' => $post['gst'],
					'acc_name' => $post['acc_name'],
					'acc_no' => $post['acc_no'],
					'ifsc_code' => $post['ifsc_code'],
					'branch' => $post['branch']
				);
			}

			$this->home_model->update('tbl_user_end', $data, $post['id']);
			$this->session->set_flashdata('success','User Update Successfully!!');
			redirect(base_url('my-account.html'));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Field First!!');
		    redirect(base_url('my-account.html'));
		}
	}


	public function logout(){
		$this->session->sess_destroy();
    	return redirect(base_url());
	}

	//======
	public function add_product(){

		if( $this->session->userdata('end_user_type') != '2'){
			redirect(base_url('my-account.html'));
		} 
		$data['meta_keyword'] = '';
		$data['meta_description'] = '';
		$data['meta_title'] = 'Add New Product';

		

		$setting = $this->home_model->fetch_data('tbl_settings', 'id');
		foreach ($setting as $row) {
			$data['logo'] = $row->logo;
			$data['favicon'] = $row->favicon;
			$data['footer_about'] = $row->footer_about;
			$data['footer_copyright'] = $row->footer_copyright;
			$data['contact_email'] = $row->contact_email;
			$data['contact_address'] = $row->contact_address;
			$data['contact_phone'] = $row->contact_phone;
		}

		
		$data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
		$data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
		$data['order_prod'] = $this->home_model->get_prod_order();

		if( $this->session->userdata('end_user_id')){
			$data['user_details'] = $this->home_model->get_where('tbl_user_end', 'id', $this->session->userdata('end_user_id'));
		}
		

		$this->load->view('pages/inc/header', $data);
		$this->load->view('pages/add_product');
		$this->load->view('pages/inc/footer');
	}

	public function orders(){
		if( $this->session->userdata('end_user_type') != '2'){
			redirect(base_url('my-account.html'));
		} 
		$setting = $this->home_model->fetch_data('tbl_settings', 'id');
		foreach ($setting as $row) {
			$data['logo'] = $row->logo;
			$data['favicon'] = $row->favicon;
			$data['footer_about'] = $row->footer_about;
			$data['footer_copyright'] = $row->footer_copyright;
			$data['contact_email'] = $row->contact_email;
			$data['contact_address'] = $row->contact_address;
			$data['contact_phone'] = $row->contact_phone;
		}

		
		$data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
		$data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());

		$data['meta_title'] = 'View Products';
		$data['meta_keyword'] = '';
		$data['meta_description'] = '';
		
		
		if( !empty($this->input->get('page'))){
			$getPage = $this->input->get('page');
		} else{
			$getPage = 0;
		}

		
		$data['getPage'] = $getPage;
		$data['offset'] = 12;

		$data['page'] = $getPage;
		if($data['page'] == "" || $data['page'] == "0" || $data['page'] == "1"){
			$data['page1']=0;
			$data['z'] = 0;
		} else {
			$data['page1'] = ($data['page']*$data['offset'])-$data['offset'];
			$data['z'] = ($data['page']*$data['offset'])-$data['offset'];
		}

		$data['product_list'] = $this->home_model->get_where_limit_order('tbl_products', 'user_id', $this->session->userdata('end_user_id'), $data['page1'], $data['offset'], 'prod_id');
		$data['catNumRows'] = $this->home_model->get_where_count('tbl_products', 'user_id', $this->session->userdata('end_user_id'));
			//===================

		$this->load->view('pages/inc/header', $data);
		$this->load->view('pages/page_not_found');
		$this->load->view('pages/inc/footer');
	}

	public function view_product(){
		if( $this->session->userdata('end_user_type') != '2'){
			redirect(base_url('my-account.html'));
		} 
		$setting = $this->home_model->fetch_data('tbl_settings', 'id');
		foreach ($setting as $row) {
			$data['logo'] = $row->logo;
			$data['favicon'] = $row->favicon;
			$data['footer_about'] = $row->footer_about;
			$data['footer_copyright'] = $row->footer_copyright;
			$data['contact_email'] = $row->contact_email;
			$data['contact_address'] = $row->contact_address;
			$data['contact_phone'] = $row->contact_phone;
		}

		
		$data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
		$data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());

		$data['meta_title'] = 'View Products';
		$data['meta_keyword'] = '';
		$data['meta_description'] = '';
		
		
		if( !empty($this->input->get('page'))){
			$getPage = $this->input->get('page');
		} else{
			$getPage = 0;
		}

		
		$data['getPage'] = $getPage;
		$data['offset'] = 12;

		$data['page'] = $getPage;
		if($data['page'] == "" || $data['page'] == "0" || $data['page'] == "1"){
			$data['page1']=0;
			$data['z'] = 0;
		} else {
			$data['page1'] = ($data['page']*$data['offset'])-$data['offset'];
			$data['z'] = ($data['page']*$data['offset'])-$data['offset'];
		}

		$data['product_list'] = $this->home_model->get_where_limit_order('tbl_products', 'user_id', $this->session->userdata('end_user_id'), $data['page1'], $data['offset'], 'prod_id');
		$data['catNumRows'] = $this->home_model->get_where_count('tbl_products', 'user_id', $this->session->userdata('end_user_id'));
			//===================

		$this->load->view('pages/inc/header', $data);
		$this->load->view('pages/view_product');
		$this->load->view('pages/inc/footer');
	}
	public function edit_product(){
		if( $this->session->userdata('end_user_type') != '2'){
			redirect(base_url('my-account.html'));
		} 
		$data['meta_keyword'] = '';
		$data['meta_description'] = '';
		$data['meta_title'] = 'Add New Product';

		

		$setting = $this->home_model->fetch_data('tbl_settings', 'id');
		foreach ($setting as $row) {
			$data['logo'] = $row->logo;
			$data['favicon'] = $row->favicon;
			$data['footer_about'] = $row->footer_about;
			$data['footer_copyright'] = $row->footer_copyright;
			$data['contact_email'] = $row->contact_email;
			$data['contact_address'] = $row->contact_address;
			$data['contact_phone'] = $row->contact_phone;
		}

		
		$data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
		$data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
		$data['order_prod'] = $this->home_model->get_prod_order();

		if( $this->session->userdata('end_user_id')){
			$data['user_details'] = $this->home_model->get_where('tbl_user_end', 'id', $this->session->userdata('end_user_id'));
		}
		

		$this->load->view('pages/inc/header', $data);
		$this->load->view('pages/edit_product');
		$this->load->view('pages/inc/footer');
	}

	// Front Upload
	public function addProductFront(){
		$post = $this->input->post();
		$name_file = count($_FILES['files']['name']);
		$banner_file = $_FILES['banner']['name'];

		$chkSize=$post['size'];  
		$size="";
		$price="";
		$old_price="";
		foreach($chkSize as $chk1){  
		      $size .= $chk1.",";
		      if($post['price_'.$chk1] ){
		      	$price .= $post['price_'.$chk1].",";
		      } else {
		      	$price .= "0".",";
		      }
		      if($post['old_price_'.$chk1] ){
		      	$old_price .= $post['old_price_'.$chk1].",";
		      } else {
		      	$old_price .= "0".",";
		      }
		      
		}
		$size = trim($size, ",");
		$price = trim($price, ",");
		$old_price = trim($old_price, ",");

		$chkColor=$post['color'];  
		$color="";
		foreach($chkColor as $chk2){  
		   $color .= $chk2.",";
		}
		$color = trim($color, ",");

		for($i=0;$i<$name_file;$i++){
		  $fileRquired = $_FILES['files']['name'][$i];
		  if(!empty($fileRquired)){
		  	$fileReq = "1";
		  } else {
		  	$fileReq = "";
		  }
		 }

		if( empty($post['news_slug'])){
			$url_title = url_title($post['news_title'], "dash", TRUE);
		} else {
			$url_title = url_title($post['news_slug'], "dash", TRUE);
		}
		$uniqSlug = $this->check_unique('prod_slug',$url_title,'tbl_products');

		if( !empty($post['news_title']) && !empty($post['news_content']) && !empty($post['news_content_short']) && !empty($post['news_date']) && !empty($post['category_id']) && !empty($post['brand']) && !empty($fileReq) ){

			$Check = $this->admin->findValue($post['news_title'], 'prod_title', 'tbl_products');
			if( !empty($Check)){
				$this->session->set_flashdata('error','Name Already Exists!!');
	    		redirect(base_url('add-product.html'));
	    		die();
			}

			/*
			// Image Uploads
			$this->_do_upload('photo');
			$fileName1 = $this->upload->data('file_name');
			if( empty($name_file)){
				$fileName2 = '';
			} else{
				$fileName2 = $fileName1;
			}
			*/
			// Banner Uploads
			$this->_do_upload('banner');
			$banner_file = $this->upload->data('file_name');
			if( empty($banner_file)){
				$fileName4 = '';
			} else{
				$fileName4 = $banner_file;
			}

			$data1 = array(
				'prod_title' => $post['news_title'],
				'prod_slug' => $uniqSlug,
				'prod_content' => $post['news_content'],
				'prod_content_short' => $post['news_content_short'],
				'prod_date' => $post['news_date'],
				'category_id' => $post['category_id'],
				'sub_category_id' => $post['sub_cat_name'],
				'publisher' => $post['publisher'],
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description'],
				'banner' => $fileName4,
				'tags' => $post['tags'],
				'prod_price' => $price,
				'prod_price_old' => $old_price,
				'prod_qty' => $post['prod_qty'],
				'status' => 2,
				'user_id' => $post['user_id'],
				'brand' => $post['brand'],
				'return_days' => $post['return_days'],
				'colors' => $color,
				'size' => $size,
				'stocks' => $post['stocks']
			);
			$this->admin->insert('tbl_products', $data1);
			$last_id = $this->db->insert_id();


			// Uploads Multiple Images
			$data = array();
			// Count total files
			$countfiles = count($_FILES['files']['name']);
			// Looping all files
			for($i=0;$i<$countfiles;$i++){
			   	if(!empty($_FILES['files']['name'][$i])){
					// Define new $_FILES array - $_FILES['file']
			   		$_FILES['file']['name'] = $_FILES['files']['name'][$i];
			   		$_FILES['file']['type'] = $_FILES['files']['type'][$i];
			   		$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
			   		$_FILES['file']['error'] = $_FILES['files']['error'][$i];
			   		$_FILES['file']['size'] = $_FILES['files']['size'][$i];

					// Set preference
					$config['upload_path'] = './assets/admin/uploads/';	
					$config['allowed_types'] = '*';
					$config['file_name'] = $_FILES['files']['name'][$i];
					//Load upload library
					$this->load->library('upload',$config);
					// File upload
					if($this->upload->do_upload('file')){
						// Get data about the file
						$uploadData = $this->upload->data();
						$filename = $uploadData['file_name'];
						// Initialize array
						$data['filenames'][] = $filename;
						$data2 = array(
							'image' => $filename,
							'prod_id' => $last_id,
							'status' => 1
						);

						$this->admin->insert('tbl_prod_image', $data2);
					}
				}   
			}




			$this->session->set_flashdata('success','Product Add Successfully!!');
		    redirect(base_url('add-product.html'));
		} else {
			$this->session->set_flashdata('error','Fill Required Fiels!!');
		    redirect(base_url('add-product.html'));
		}
	}

	public function updateProductFront(){
		$post = $this->input->post();

		if( empty($post['news_slug'])){
			$url_title1 = url_title($post['news_title'], "dash", TRUE);
		} else {
			$url_title1 = url_title($post['news_slug'], "dash", TRUE);
		}
		$uniqSlug1 = $this->check_unique1('prod_slug',$url_title1,'tbl_products', $post['id'], 'prod_id'); 

		$chkSize=$post['size'];  
		$size="";
		$price="";
		$old_price="";
		foreach($chkSize as $chk1){  
		      $size .= $chk1.",";
		      if($post['price_'.$chk1] ){
		      	$price .= $post['price_'.$chk1].",";
		      } else {
		      	$price .= "0".",";
		      }
		      if($post['old_price_'.$chk1] ){
		      	$old_price .= $post['old_price_'.$chk1].",";
		      } else {
		      	$old_price .= "0".",";
		      }
		      
		}
		$size = trim($size, ",");
		$price = trim($price, ",");
		$old_price = trim($old_price, ",");

		$chkColor=$post['color'];  
		$color="";
		foreach($chkColor as $chk2){  
		   $color .= $chk2.",";
		}
		$color = trim($color, ",");

		if( !empty($post['news_title']) && !empty($post['news_content']) && !empty($post['news_content_short']) && !empty($post['news_date']) && !empty($post['category_id']) && !empty($post['brand']) ){


			$pageName = $this->admin->findValue_isnot($post['news_title'], 'prod_title', $post['id'], 'prod_id', 'tbl_products');
			if( !empty($pageName)){
				$this->session->set_flashdata('error','Name <b>('.$post["news_title"].')</b> Already Exists!!');
	    		redirect(base_url('edit-product.html?id='.$post['id']));
	    		die();
			}

			

			// Update Banner
		    if( $this->_do_upload('banner')){
			    $fileName2 = $this->upload->data('file_name');
			    if( ! empty($fileName2)){
			        $uploadImage2 = $fileName2;
			    } else {
			        $uploadImage2 = $this->input->post('previous_banner');
			    }
			} else{
				$uploadImage2 = $this->input->post('previous_banner');
			}
			
			$data1 = array(
				'prod_title' => $post['news_title'],
				'prod_slug' => $uniqSlug1,
				'prod_content' => $post['news_content'],
				'prod_content_short' => $post['news_content_short'],
				'prod_date' => $post['news_date'],
				'category_id' => $post['category_id'],
				'sub_category_id' => $post['sub_cat_name'],
				'publisher' => $post['publisher'],
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description'],
				'photo' => $uploadImage1,
				'banner' => $uploadImage2,
				'tags' => $post['tags'],
				'prod_price' => $price,
				'prod_price_old' => $old_price,
				'prod_qty' => $post['prod_qty'],
				'brand' => $post['brand'],
				'return_days' => $post['return_days'],
				'colors' => $color,
				'size' => $size,
				'stocks' => $post['stocks']
			);
			$this->admin->update1('tbl_products', $data1, $post['id'], 'prod_id');


			// Uploads Multiple Images
			$data = array();
			// Count total files
			$countfiles = count($_FILES['files']['name']);
			// Looping all files
			for($i=0;$i<$countfiles;$i++){
			   	if(!empty($_FILES['files']['name'][$i])){
					// Define new $_FILES array - $_FILES['file']
			   		$_FILES['file']['name'] = $_FILES['files']['name'][$i];
			   		$_FILES['file']['type'] = $_FILES['files']['type'][$i];
			   		$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
			   		$_FILES['file']['error'] = $_FILES['files']['error'][$i];
			   		$_FILES['file']['size'] = $_FILES['files']['size'][$i];

					// Set preference
					$config['upload_path'] = './assets/admin/uploads/';	
					$config['allowed_types'] = '*';
					$config['file_name'] = $_FILES['files']['name'][$i];
					//Load upload library
					$this->load->library('upload',$config);
					// File upload
					if($this->upload->do_upload('file')){
						// Get data about the file
						$uploadData = $this->upload->data();
						$filename = $uploadData['file_name'];
						// Initialize array
						$data['filenames'][] = $filename;
						$data2 = array(
							'image' => $filename,
							'prod_id' => $post['id'],
							'status' => 1
						);

						$this->admin->insert('tbl_prod_image', $data2);
					}
				}
			    
			}



			$this->session->set_flashdata('success','Product Update Successfully!!');
			redirect(base_url('edit-product.html?id='.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Fields!!');
			redirect(base_url('edit-product.html?id='.$post['id']));
		}

	}

	public function ajaxSubCat(){
		$categoryId = $this->input->post('categoryId');
		if(!empty($categoryId)){
			$sql = $this->db->query('select * from tbl_sub_category_prod WHERE category_id = '.$categoryId.' AND status = 1 order by id asc');
			$Subcat = $sql->result();
			echo "<option>Select Sub Category</option>";
			foreach ($Subcat as $sCat) {
				echo "<option value='". $sCat->id ."'>" .$sCat->name."</option>";
			}
		}
	}

	public function ajaxBrand(){
		$sub_cat = $this->input->post('sub_cat');
		if(!empty($sub_cat)){
			$sql = $this->db->query("select * from tbl_partner WHERE FIND_IN_SET({$sub_cat}, sub_categories) order by id asc");
			$Subcat = $sql->result();
			echo "<option>Select Brand</option>";
			foreach ($Subcat as $sCat) {
				echo "<option value='". $sCat->id ."'>" .$sCat->name."</option>";
			}
		}
	}

	public function ajaxSize(){
		$sub_cat = $this->input->post('sub_cat');
		if(!empty($sub_cat)){
			echo "<div class='row'>";
			 $sql = $this->db->query("select * from tbl_prod_size WHERE FIND_IN_SET({$sub_cat}, sub_categories) order by id asc");
			 foreach ($sql->result() as $row) {
			 ?>
			<div class="col-md-4" style="margin-bottom: 10px;">
            	<label>
            	<input type="checkbox" name="size[]" value="<?=$row->id;?>"> <?=$row->name;?></label>
            	<input type="text" name="price_<?=$row->id;?>" class="form-control" placeholder="Price of <?=$row->name;?>"> <br>
            	<input type="text" name="old_price_<?=$row->id;?>" class="form-control" placeholder="Old Price of <?=$row->name;?>">
            </div>
			<?php
			}
			echo "</div>";
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

    public function check_unique($key, $value, $table){
        $check = $this->admin->checkUnique($key, $value, $table);
        if( ! empty($check)){
        	$value1 = $value . '1';
            return $this->check_unique($key, $value1, $table);
        } else {
            return $value; 
        }
    }

    public function check_unique1($key, $value, $table, $id, $key2){
        $check = $this->admin->checkUnique2($key, $value, $table, $id, $key2);
        if( ! empty($check)){
        	$value1 = $value . '1';
            return $this->check_unique1($key, $value1, $table, $id, $key2);
        } else {
            return $value; 
        }
    }
	

	public function user_ip_address(){
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
	        //ip from share internet
	        $ip = $_SERVER['HTTP_CLIENT_IP'];
	    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
	        //ip pass from proxy
	        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    }else{
	        $ip = $_SERVER['REMOTE_ADDR'];
	    }
	    return $ip;
	}


	public function forgot_password(){
		$data['meta_keyword'] = '';
		$data['meta_description'] = '';
		$data['meta_title'] = 'My Account';

		$setting = $this->home_model->fetch_data('tbl_settings', 'id');
		foreach ($setting as $row) {
			$data['logo'] = $row->logo;
			$data['favicon'] = $row->favicon;
			$data['footer_about'] = $row->footer_about;
			$data['footer_copyright'] = $row->footer_copyright;
			$data['contact_email'] = $row->contact_email;
			$data['contact_address'] = $row->contact_address;
			$data['contact_phone'] = $row->contact_phone;
		}

		
		$data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
		$data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
		$data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
		$data['order_prod'] = $this->home_model->get_prod_order();

		$this->load->view('pages/inc/header', $data);
		$this->load->view('pages/forgot_password');
		$this->load->view('pages/inc/footer');
	}

	public function recoverPassword(){
		$post = $this->input->post();
		print_r($post);
		$sqlchk = $this->db->query("SELECT id FROM `tbl_user_end` WHERE `mobile` = '".$post['email']."' ");
		if($sqlchk->num_rows() > 0){
			if(!empty($post['real'])){

				$data = array(
					'user_pass' => md5($post['user_pass'])
				);
				if($post['otp'] == $post['real']){
					$this->home_model->update1('tbl_user_end', $data, 'mobile', $post['email']);
					$this->session->set_flashdata('success','User Password Update Successfully!!');
				} else {
					$this->session->set_flashdata('error','Invalid OTP!!');
				}
				redirect(base_url('forgot-password.html'));
			} else {
				// Send Message
				$otp = rand("2222", "9999");
				$messages = "Your One Time Password is ".$otp." for login. Do not share the OTP with anyone for security reasons.";
				$this->sendsms($post['email'], $messages);
				$this->session->set_flashdata('real_otp',$otp);
				$this->session->set_flashdata('success','Enter OTP!!');
				redirect(base_url('forgot-password.html?succ=1&phone='.$post['email']));
			}
			
		} else {
			$this->session->set_flashdata('error','Mobile No Not Available!!');
			redirect(base_url('forgot-password.html'));
		}
	}

	public function sendsms($number, $message){
		$url="http://sms.litostindia.com/sendsms/sendsms.php?username=LIAarvi&password=Lit123&type=TEXT&mobile=".$number."&sender=TEXTNG&message=".urlencode($message)."&PEID=1101468910000013829&HeaderId=1205160819159255816&TemplateId=1207161726625524504";
		$aa=file_get_contents($url);
	}

}
