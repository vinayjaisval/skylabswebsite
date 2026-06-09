<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
	}

	public function index(){	}

	public function view(){

		

		$data['title'] = "Products";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'product';

		
		//===================

		if( !empty($this->input->get('page'))){
			$getPage = $this->input->get('page');
		} else{
			$getPage = 0;
		}
		

		
		
		$data['getPage'] = $getPage;
		$data['offset'] = 20;

		$data['page'] = $getPage;
		if($data['page'] == "" || $data['page'] == "0" || $data['page'] == "1"){
			$data['page1']=0;
			$data['z'] = 0;
		} else {
			$data['page1'] = ($data['page']*$data['offset'])-$data['offset'];
			$data['z'] = ($data['page']*$data['offset'])-$data['offset'];
		}

		
		

		$data['productss'] = $this->admin->products1($data['page1'], $data['offset']);
		$data['catNumRows'] = $this->admin->products_count1();
		//===================

		
		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/prod/view');
		$this->load->view('admin/inc/footer');
	}

	public function add(){
		$data['title'] = "Add Products";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'product';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/prod/add');
		$this->load->view('admin/inc/footer');
	}

	public function addProductComp(){
		$post = $this->input->post();
		
		if( empty($post['news_slug'])){
			$url_title = url_title($post['news_title'], "dash", TRUE);
		} else {
			$url_title = url_title($post['news_slug'], "dash", TRUE);
		}
		$uniqSlug = $this->check_unique('prod_slug',$url_title,'tbl_products');

		if( !empty($post['news_title']) && !empty($post['news_content']) && !empty($post['category_id']) ){

			$this->_do_upload('photo');
			$fileName1 = $this->upload->data('file_name');

			$data1 = array(
				'prod_title' => $post['news_title'],
				'prod_slug' => $uniqSlug,
				'prod_code' => $post['prod_code'],

				'prod_content' => $post['news_content'],
				'tags' => $post['tags'],

				'category_id' => $post['category_id'],
				'photo' => $fileName1,
				
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description'],

				'status' => 1
			);
			$this->admin->insert('tbl_products', $data1);

			$this->session->set_flashdata('success','Product Add Successfully!!');
		    redirect(base_url('Master/products/add'));
		} else {
			$this->session->set_flashdata('error','Fill Required Fiels!!');
		    redirect(base_url('Master/products/add'));
		}
	}

	public function addProduct(){
		$post = $this->input->post();
		
		$chkSize=$post['size'];  
		$size="";
		foreach($chkSize as $chk){  
		   $size .= $chk.",";
		}
		$size = trim($size, ",");

		$chkColor=$post['color'];  
		$color="";
		$rel_prod_code="";
		foreach($chkColor as $chk2){  
		   $color .= $chk2.",";
		   if($post['rel_prod_code_'.$chk2] ){
		      	$rel_prod_code .= $post['rel_prod_code_'.$chk2]."@#@#";
		   } else {
		      	$rel_prod_code .= "0"."@#@#";
		   }
		}
		$color = trim($color, ",");
		$rel_prod_code = trim($rel_prod_code, "@#@#");

		if( empty($post['news_slug'])){
			$url_title = url_title($post['news_title'], "dash", TRUE);
		} else {
			$url_title = url_title($post['news_slug'], "dash", TRUE);
		}
		$uniqSlug = $this->check_unique('prod_slug',$url_title,'tbl_products');

		if( !empty($post['news_title']) && !empty($post['news_content']) && !empty($post['category_id']) && !empty($post['colorss']) ){

			$data1 = array(
				'prod_title' => $post['news_title'],
				'prod_slug' => $uniqSlug,
				'prod_code' => $post['prod_code'],

				'prod_content' => $post['news_content'],
				'tags' => $post['tags'],
				'colors' => $color,
				'size' => $size,
				'colorss' => $post['colorss'],
				'rel_prod_code' => $rel_prod_code,

				'prod_price' => $post['prod_price'],
				'prod_price_old' => $post['prod_price_old'],

				'category_id' => $post['category_id'],
				'sub_category_id' => $post['sub_cat_name'],
				'sub_sub_category_id' => $post['sub_sub_category_id'],
				
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description'],

				'status' => 1
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
						// resize image
						$this->resizeImage($uploadData['file_name']);
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
		    redirect(base_url('Master/products/add'));
		} else {
			$this->session->set_flashdata('error','Fill Required Fiels!!');
		    redirect(base_url('Master/products/add'));
		}
	}

	public function edit($id){
		$data['title'] = "Edit Product";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'product';
		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/prod/edit');
		$this->load->view('admin/inc/footer');
	}


	public function updateProductSS(){
		ignore_user_abort(true);
		$post = $this->input->post();


		if( empty($post['news_slug'])){
			$url_title1 = url_title($post['news_title'], "dash", TRUE);
		} else {
			$url_title1 = url_title($post['news_slug'], "dash", TRUE);
		}
		$uniqSlug1 = $this->check_unique1('prod_slug',$url_title1,'tbl_products', $post['id'], 'prod_id'); 

		if( !empty($post['news_title']) && !empty($post['category_id']) ){

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
			
			$data1 = array(
				'prod_title' => $post['news_title'],
				'prod_slug' => $uniqSlug1,
				'prod_code' => $post['prod_code'],

				'prod_content' => $post['news_content'],
				'tags' => $post['tags'],
				'photo' => $uploadImage1,

				

				'category_id' => $post['category_id'],
				
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description'],
			);
			$this->admin->update1('tbl_products', $data1, $post['id'], 'prod_id');

			$this->session->set_flashdata('success','Product Update Successfully!!');
			redirect(base_url('Master/products/edit/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Fields!!');
			redirect(base_url('Master/products/edit/'.$post['id']));
		}

	}

	

	public function updateProduct(){
		ignore_user_abort(true);
		$post = $this->input->post();


		$chkSize=$post['size'];  
		$size="";
		$rel_prod_code="";
		foreach($chkSize as $chk){  
		   $size .= $chk.",";
		}
		$size = trim($size, ",");

		$chkColor=$post['color'];  
		$color="";
		foreach($chkColor as $chk2){  
		   $color .= $chk2.",";

		   if($post['rel_prod_code_'.$chk2] ){
		      	$rel_prod_code .= $post['rel_prod_code_'.$chk2]."@#@#";
		   } else {
		      	$rel_prod_code .= "0"."@#@#";
		   }
		}
		$color = trim($color, ",");
		$rel_prod_code = trim($rel_prod_code, "@#@#");

		if( empty($post['news_slug'])){
			$url_title1 = url_title($post['news_title'], "dash", TRUE);
		} else {
			$url_title1 = url_title($post['news_slug'], "dash", TRUE);
		}
		$uniqSlug1 = $this->check_unique1('prod_slug',$url_title1,'tbl_products', $post['id'], 'prod_id'); 

		if( !empty($post['news_title']) && !empty($post['category_id']) ){
			
			$data1 = array(
				'prod_title' => $post['news_title'],
				'prod_slug' => $url_title1,
				'prod_code' => $post['prod_code'],

				'prod_content' => $post['news_content'],
				'tags' => $post['tags'],
				'colors' => $color,
				'size' => $size,
				'colorss' => $post['colorss'],
				'rel_prod_code' => $rel_prod_code,

				'prod_price' => $post['prod_price'],
				'prod_price_old' => $post['prod_price_old'],

				'category_id' => $post['category_id'],
				'sub_category_id' => $post['sub_cat_name'],
				'sub_sub_category_id' => $post['sub_sub_category_id'],
				
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description'],
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
					$config['file_name'] = time().'-'.$_FILES['files']['name'][$i];
					//Load upload library
					$this->load->library('upload',$config);
					// File upload
					$resizFile="";
					if($this->upload->do_upload('file')){
						// Get data about the file
						$uploadData = $this->upload->data();
						$filename = $uploadData['file_name'];
						$resizFile = $uploadData['file_name'];
						
						// Initialize array
						$data['filenames'][] = $filename;
						
						$data2 = array(
							'image' => $filename,
							'prod_id' => $post['id'],
							'status' => 1
						);

						$this->admin->insert('tbl_prod_image', $data2);
						$this->resizeImage($resizFile);
					}
				}   
			}

			$this->session->set_flashdata('success','Product Update Successfully!!');
			redirect(base_url('Master/products/edit/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Fields!!');
			redirect(base_url('Master/products/edit/'.$post['id']));
		}

	}

	

	public function delete($id){
		
		$data1 = array(
			'status' => 0 
		);
		$this->admin->update1('tbl_products', $data1, $id, 'prod_id');
		$this->session->set_flashdata('success','Product Delete Successfully!!');
	    redirect(base_url('Master/products/view'));
	}

	public function delete_image($id, $prod_id){
		$data1 = array(
			'status' => 0 
		);
		$this->admin->update1('tbl_prod_image', $data1, $id, 'id');
		$this->session->set_flashdata('success','Product Image Delete Successfully!!');
	    redirect(base_url('Master/products/photos/'.$prod_id));
	}

	public function delete_image1($id, $prod_id){
		$data1 = array(
			'status' => 0 
		);
		$this->admin->update1('tbl_prod_image', $data1, $id, 'id');
		$this->session->set_flashdata('success','Product Image Delete Successfully!!');
	    redirect(base_url('edit-product.html?id='.$prod_id));
	}
	


	// Product Category
	public function category(){
		$data['title'] = "Product Category";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'pro_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/cat/view');
		$this->load->view('admin/inc/footer');
	}

	public function add_category(){
		$data['title'] = "Add Product Category";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'pro_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/cat/add');
		$this->load->view('admin/inc/footer');
	}

	public function addCatValues(){
		$post = $this->input->post();

		if( empty($post['category_slug'])){
			$url_title = url_title($post['category_name'], "dash", TRUE);
		} else {
			$url_title = url_title($post['category_slug'], "dash", TRUE);
		}

		$uniqSlug = $this->check_unique('category_slug',$url_title,'tbl_category_prod');

		if( !empty($post['category_name'])){
			$Check = $this->admin->findValue($post['category_name'], 'category_name', 'tbl_category_prod');
			if( !empty($Check)){
				$this->session->set_flashdata('error','Name Already Exists!!');
	    		redirect(base_url('Master/products/add_category'));
	    		die();
			}

			$this->_do_upload('photo');
			$banner_file = $this->upload->data('file_name');
			if( empty($banner_file)){
				$fileName4 = '';
			} else{
				$fileName4 = $banner_file;
			}

			$data = array(
				'category_name' => $post['category_name'],
				'category_slug' => $uniqSlug,
				'category_perc' => $post['category_perc'],
				'photo' => $fileName4,
				'description' => $post['description'],
				'cat_order' => $post['cat_order'],
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description'],
				'status' => 1
			);

			$this->admin->insert('tbl_category_prod', $data);
			$this->session->set_flashdata('success','Product Category Add Successfully!!');
		    redirect(base_url('Master/products/add_category'));

		}else{
			$this->session->set_flashdata('error','Please Fill Category Name!!');
			redirect(base_url('Master/products/add_category'));
		}
	}

	public function edit_category($id){
		$data['id'] = $id;
		$data['title'] = "Edit Product Category";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'pro_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/cat/edit');
		$this->load->view('admin/inc/footer');
	}

	public function updateCategory(){
		$post = $this->input->post();

		if( empty($post['category_slug'])){
			$url_title1 = url_title($post['category_name'], "dash", TRUE);
		} else {
			$url_title1 = url_title($post['category_slug'], "dash", TRUE);
		}
		$uniqSlug1 = $this->check_unique1('category_slug',$url_title1,'tbl_category_prod', $post['id'], 'category_id');

		if(  !empty($post['category_name']) ){
			$pageName = $this->admin->findValue_isnot($post['category_name'], 'category_name', $post['id'], 'category_id', 'tbl_category_prod');
			if( !empty($pageName)){
				$this->session->set_flashdata('error','Name <b>('.$post["category_name"].')</b> Already Exists!!');
	    		redirect(base_url('Master/products/edit_category/'.$post['id']));
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

			$data = array(
				'category_name' => $post['category_name'],
				'category_slug' => $uniqSlug1,
				'category_perc' => $post['category_perc'],
				'photo' => $uploadImage2,
				'cat_order' => $post['cat_order'],
				'description' => $post['description'],
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description']
			);
			$this->admin->update1('tbl_category_prod', $data, $post['id'], 'category_id');
			$this->session->set_flashdata('success','Product Categorys Update Successfully!!');
			redirect(base_url('Master/products/edit_category/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Fields!!');
			redirect(base_url('Master/products/edit_category/'.$post['id']));
		}	
	}


	public function delete_category($id){

		$data1 = array(
			'status' => 0 
		);
		$this->admin->update1('tbl_category_prod', $data1, $id, 'category_id');
		
		$this->session->set_flashdata('success','Product Category, product Sub Category and Products in this Catehory Delete Successfully!!');
	    redirect(base_url('Master/products/category'));
	}

	// Product Sub Category
	public function sub_category(){
		$data['title'] = "Product Sub Category";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'pro_sub_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/sub_cat/view');
		$this->load->view('admin/inc/footer');
	}

	public function add_sub_category(){
		$data['title'] = "Add Product Sub Category";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'pro_sub_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/sub_cat/add');
		$this->load->view('admin/inc/footer');
	}

	public function addSubCatValues(){
		$post = $this->input->post();

		if( empty($post['category_slug'])){
			$url_title = url_title($post['category_name'], "dash", TRUE);
		} else {
			$url_title = url_title($post['category_slug'], "dash", TRUE);
		}

		$uniqSlug = $this->check_unique('slug',$url_title,'tbl_sub_category_prod');

		if( !empty($post['category_name']) && !empty($post['category_id'])){
			$Check = $this->admin->findValue($post['category_name'], 'name', 'tbl_sub_category_prod');
			if( !empty($Check)){
				$this->session->set_flashdata('error','Name Already Exists!!');
	    		redirect(base_url('Master/products/add_sub_category'));
	    		die();
			}

			$data = array(
				'name' => $post['category_name'],
				'slug' => $uniqSlug,
				'category_id' => $post['category_id'],
				'cat_order' => $post['cat_order'],
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description'],
				'status' => 1
			);

			$this->admin->insert('tbl_sub_category_prod', $data);
			$this->session->set_flashdata('success','Product Sub Category Add Successfully!!');
		    redirect(base_url('Master/products/add_sub_category'));

		}else{
			$this->session->set_flashdata('error','Please Fill Required Fields!!');
			redirect(base_url('Master/products/add_sub_category'));
		}
	}

	public function edit_sub_category($id){
		$data['id'] = $id;
		$data['title'] = "Edit Product Sub Category";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'pro_sub_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/sub_cat/edit');
		$this->load->view('admin/inc/footer');
	}

	public function updateSubCategory(){
		$post = $this->input->post();

		if( empty($post['category_slug'])){
			$url_title1 = url_title($post['category_name'], "dash", TRUE);
		} else {
			$url_title1 = url_title($post['category_slug'], "dash", TRUE);
		}
		$uniqSlug1 = $this->check_unique1('slug',$url_title1,'tbl_sub_category_prod', $post['id'], 'id');

		if(  !empty($post['category_name']) && !empty($post['category_id']) ){
			$pageName = $this->admin->findValue_isnot($post['category_name'], 'name', $post['id'], 'id', 'tbl_sub_category_prod');
			if( !empty($pageName)){
				$this->session->set_flashdata('error','Name <b>('.$post["category_name"].')</b> Already Exists!!');
	    		redirect(base_url('Master/products/edit_sub_category/'.$post['id']));
	    		die();
			}

			$data = array(
				'name' => $post['category_name'],
				'slug' => $uniqSlug1,
				'category_id' => $post['category_id'],
				'cat_order' => $post['cat_order'],
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description']
			);
			$this->admin->update1('tbl_sub_category_prod', $data, $post['id'], 'id');
			$this->session->set_flashdata('success','Product Sub Category Update Successfully!!');
			redirect(base_url('Master/products/edit_sub_category/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Fields!!');
			redirect(base_url('Master/products/edit_sub_category/'.$post['id']));
		}
	}

	public function delete_sub_category($id){

		$data1 = array(
			'status' => 0 
		);
		$this->admin->update1('tbl_sub_category_prod', $data1, $id, 'id');

		$this->session->set_flashdata('success','Product Sub Category and Product in this Catehory Delete Successfully!!');
	    redirect(base_url('Master/products/sub_category'));
	}

	// Product Sub Sub Category
	public function view_sub(){

		$data['title'] = "Sub Category";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'pro_sub_sub_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/sub/view');
		$this->load->view('admin/inc/footer');
	}

	public function add_sub(){
		$data['title'] = "Add Sub Category";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'pro_sub_sub_cat';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/sub/add');
		$this->load->view('admin/inc/footer');
	}

	

	public function addSub(){
		$post = $this->input->post();
		

		if( empty($post['news_slug'])){
			$url_title = url_title($post['news_title'], "dash", TRUE);
		} else {
			$url_title = url_title($post['news_slug'], "dash", TRUE);
		}
		$uniqSlug = $this->check_unique('slug',$url_title,'tbl_sub_sub_category_prod');

		if( !empty($post['news_title']) && !empty($post['category_id']) && !empty($post['sub_cat_name']) ){

			$Check = $this->admin->findValue($post['news_title'], 'name_sub', 'tbl_sub_sub_category_prod');
			if( !empty($Check)){
				$this->session->set_flashdata('error','Name Already Exists!!');
	    		redirect(base_url('Master/products/add_sub'));
	    		die();
			}


			$data1 = array(
				'name_sub' => $post['news_title'],
				'slug' => $uniqSlug,
				'category_id' => $post['category_id'],
				'sub_category_id' => $post['sub_cat_name'],
				
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description'],
				'status' => 1
			);
			$this->admin->insert('tbl_sub_sub_category_prod', $data1);

			$this->session->set_flashdata('success','Category Add Successfully!!');
		    redirect(base_url('Master/products/add_sub'));
		} else {
			$this->session->set_flashdata('error','Fill Required Fiels!!');
		    redirect(base_url('Master/products/add_sub'));
		}
	}

	public function edit_sub($id){
		$data['title'] = "Edit Product";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'pro_sub_sub_cat';
		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/sub/edit');
		$this->load->view('admin/inc/footer');
	}

	

	public function updateSub(){
		$post = $this->input->post();

		if( empty($post['news_slug'])){
			$url_title1 = url_title($post['news_title'], "dash", TRUE);
		} else {
			$url_title1 = url_title($post['news_slug'], "dash", TRUE);
		}
		$uniqSlug1 = $this->check_unique1('slug',$url_title1,'tbl_sub_sub_category_prod', $post['id'], 'id'); 

		if( !empty($post['news_title']) && !empty($post['category_id']) ){


			$pageName = $this->admin->findValue_isnot($post['news_title'], 'name_sub', $post['id'], 'id', 'tbl_sub_sub_category_prod');
			if( !empty($pageName)){
				$this->session->set_flashdata('error','Name <b>('.$post["news_title"].')</b> Already Exists!!');
	    		redirect(base_url('Master/products/edit_sub/'.$post['id']));
	    		die();
			}
			
			$data1 = array(
				'name_sub' => $post['news_title'],
				'slug' => $url_title1,
				
				'category_id' => $post['category_id'],
				'sub_category_id' => $post['sub_cat_name'],

				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description']
			);
			$this->admin->update1('tbl_sub_sub_category_prod', $data1, $post['id'], 'id');

			$this->session->set_flashdata('success','Category Update Successfully!!');
			redirect(base_url('Master/products/edit_sub/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Fields!!');
			redirect(base_url('Master/products/edit_sub/'.$post['id']));
		}

	}

	

	public function delete_sub($id){
		
		$data1 = array(
			'status' => 0 
		);
		$this->admin->update1('tbl_sub_sub_category_prod', $data1, $id, 'id');
		$this->session->set_flashdata('success','Category Delete Successfully!!');
	    redirect(base_url('Master/products/view_sub'));
	}


	// Update Trending, Popular
	public function addPopular($id){
		$data = array(
			'popular' => '1'
		);
		$this->admin->update1('tbl_products', $data, $id, 'prod_id');
		$this->session->set_flashdata('success','Product Add in Popular Successfully!!');
		redirect(base_url('Master/products/view'));
	}

	public function addTrending($id){
		$data = array(
			'trending' => '1'
		);
		$this->admin->update1('tbl_products', $data, $id, 'prod_id');
		$this->session->set_flashdata('success','Product Add in Trending Successfully!!');
		redirect(base_url('Master/products/view'));
	}

	public function addBest($id){
		$data = array(
			'best' => '1'
		);
		$this->admin->update1('tbl_products', $data, $id, 'prod_id');
		$this->session->set_flashdata('success','Product Add in Best Product Successfully!!');
		redirect(base_url('Master/products/view'));
	}

	public function removePopular($id){
		$data = array(
			'popular' => '0'
		);
		$this->admin->update1('tbl_products', $data, $id, 'prod_id');
		$this->session->set_flashdata('success','Product Remove in Popular Successfully!!');
		redirect(base_url('Master/products/view'));
	}

	public function removeTrending($id){
		$data = array(
			'trending' => '0'
		);
		$this->admin->update1('tbl_products', $data, $id, 'prod_id');
		$this->session->set_flashdata('success','Product Remove in Trending Successfully!!');
		redirect(base_url('Master/products/view'));
	}

	public function removeBest($id){
		$data = array(
			'best' => '0'
		);
		$this->admin->update1('tbl_products', $data, $id, 'prod_id');
		$this->session->set_flashdata('success','Best Popular Remove in Trending Successfully!!');
		redirect(base_url('Master/products/view'));
	}


	// Update Trending Popular #END

	public function popular(){
		$data['title'] = "Popular Products";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'popular';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/prod/popular');
		$this->load->view('admin/inc/footer');
	}

	public function trending(){
		$data['title'] = "Trending Products";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'trending';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/prod/trending');
		$this->load->view('admin/inc/footer');
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


    public function ajaxSubCat(){
		$categoryId = $this->input->post('categoryId');
		if(!empty($categoryId)){
			$sql = $this->db->query('select * from tbl_sub_category_prod WHERE category_id = '.$categoryId.' and status = "1" order by id asc');
			$Subcat = $sql->result();
			echo "<option value=''>Select Sub Category</option>";
			foreach ($Subcat as $sCat) {
				echo "<option value='". $sCat->id ."'>" .$sCat->name."</option>";
			}
		}
	}

	public function ajaxsub_sub_cat(){
		$sub_cat = $this->input->post('sub_cat');
		if(!empty($sub_cat)){
			 $sql = $this->db->query("select id, name_sub from tbl_sub_sub_category_prod WHERE FIND_IN_SET({$sub_cat}, sub_category_id) AND status = '1' order by id asc");
			$Subcat = $sql->result();
			echo "<option>Select Sub Sub Category</option>";
			foreach ($Subcat as $sCat) {
				echo "<option value='". $sCat->id ."'>" .$sCat->name_sub."</option>";
			}
		}
	}


	

	public function activate_prod($id){
		$data1 = array(
			'status' => 1
		);
		$this->admin->update1('tbl_products', $data1, $id, 'prod_id');
		$this->session->set_flashdata('success','Product Activate Successfully!!');
	    redirect(base_url('Master/products/vendor_prod'));
	}



	/// ======= Products ===
	public function price($id){
		$data['title'] = "Add Products";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'product';

		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/prod/prod/price');
		$this->load->view('admin/inc/footer');
	}

	public function cats($id){
		$data['title'] = "Add Products";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'product';

		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/prod/prod/cats');
		$this->load->view('admin/inc/footer');
	}


	public function size($id){
		$data['title'] = "Add Products";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'product';

		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/prod/prod/size');
		$this->load->view('admin/inc/footer');
	}

	public function color($id){
		$data['title'] = "Add Products";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'product';

		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/prod/prod/color');
		$this->load->view('admin/inc/footer');
	}


	public function rel_prod($id){
		$data['title'] = "Add Products";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'product';

		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/prod/prod/rel_prod');
		$this->load->view('admin/inc/footer');
	}

	public function photos($id){
		$data['title'] = "Add Products";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'product';

		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/prod/prod/photos');
		$this->load->view('admin/inc/footer');
	}

	public function prod_content($id){
		$data['title'] = "Add Products";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'product';

		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/prod/prod/prod_content');
		$this->load->view('admin/inc/footer');
	}

	public function seo($id){
		$data['title'] = "Add Products";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'product';

		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/prod/prod/seo');
		$this->load->view('admin/inc/footer');
	}

	public function prod_detail($id){
		$data['title'] = "Add Products";
		$data['cur_page'] = 'product';
		$data['cur_sub_page'] = 'product';

		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/products/prod/prod/prod_detail');
		$this->load->view('admin/inc/footer');
	}
	

	public function addProduct1(){
		$post = $this->input->post();

		if( empty($post['news_slug'])){
			$url_title = url_title($post['news_title'], "dash", TRUE);
		} else {
			$url_title = url_title($post['news_slug'], "dash", TRUE);
		}
		$uniqSlug = $this->check_unique('prod_slug',$url_title,'tbl_products');

		if( !empty($post['news_title']) ){

			$data1 = array(
				'prod_title' => $post['news_title'],
				'prod_slug' => $uniqSlug,
				'prod_code' => $post['prod_code'],
				'tags' => $post['tags']
			);
			$this->admin->insert('tbl_products', $data1);
			$last_id = $this->db->insert_id();

			$this->session->set_flashdata('success','Product Add Successfully!!');
		    redirect(base_url('Master/products/price/'.$last_id));
		} else {
			$this->session->set_flashdata('error','Fill Required Fiels!!');
		    redirect(base_url('Master/products/add'));
		}
	}

	public function addProduct1_1(){
		$post = $this->input->post();

		if( empty($post['news_slug'])){
			$url_title1 = url_title($post['news_title'], "dash", TRUE);
		} else {
			$url_title1 = url_title($post['news_slug'], "dash", TRUE);
		}
		$uniqSlug1 = $this->check_unique1('prod_slug',$url_title1,'tbl_products', $post['id'], 'prod_id');

		if( !empty($post['news_title']) ){
			
			$data1 = array(
				'prod_title' => $post['news_title'],
				'prod_slug' => $uniqSlug1,
				'prod_code' => $post['prod_code'],
				'tags' => $post['tags']
			);
			$this->admin->update1('tbl_products', $data1, $post['id'], 'prod_id');

			$this->session->set_flashdata('success','Product Update Successfully!!');
			redirect(base_url('Master/products/price/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Product Update Successfully!!');
			redirect(base_url('Master/products/prod_detail/'.$post['id']));
		}
	}


	public function addProduct2(){
		$post = $this->input->post();
			
		$data1 = array(
			'prod_price' => $post['prod_price'],
			'prod_price_old' => $post['prod_price_old']
		);
		$this->admin->update1('tbl_products', $data1, $post['id'], 'prod_id');

		$this->session->set_flashdata('success','Product Update Successfully!!');
		redirect(base_url('Master/products/cats/'.$post['id']));

	}

	public function addProduct3(){
		$post = $this->input->post();

		if( !empty($post['category_id']) ){
			
			$data1 = array(
				'category_id' => $post['category_id'],
				'sub_category_id' => $post['sub_cat_name'],
				'sub_sub_category_id' => $post['sub_sub_category_id']
			);
			$this->admin->update1('tbl_products', $data1, $post['id'], 'prod_id');

			$this->session->set_flashdata('success','Product Update Successfully!!');
			redirect(base_url('Master/products/size/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Fields!!');
			redirect(base_url('Master/products/cats/'.$post['id']));
		}
			

	}

	public function addProduct4(){
		$post = $this->input->post();

		$chkSize=$post['size'];  
		$size="";
		$rel_prod_code="";
		foreach($chkSize as $chk){  
		   $size .= $chk.",";
		}
		$size = trim($size, ",");

		if( !empty($size) ){
			
			$data1 = array(
				'size' => $size
			);
			$this->admin->update1('tbl_products', $data1, $post['id'], 'prod_id');

			$this->session->set_flashdata('success','Product Update Successfully!!');
			redirect(base_url('Master/products/color/'.$post['id']));

		} else {
			$this->session->set_flashdata('error','Please Fill Required Fields!!');
			redirect(base_url('Master/products/size/'.$post['id']));
		}

	}

	public function addProduct5(){
		$post = $this->input->post();

		$chkSize=$post['colors'];  
		$color="";
		$rel_prod_code="";
		foreach($chkSize as $chk){  
		   $color .= $chk.",";
		}
		$color = trim($color, ",");

		if( !empty($color) ){
			
			$data1 = array(
				'colors' => $color
			);
			$this->admin->update1('tbl_products', $data1, $post['id'], 'prod_id');

			$this->session->set_flashdata('success','Product Update Successfully!!');
			redirect(base_url('Master/products/photos/'.$post['id']));

		} else {
			$this->session->set_flashdata('error','Please Fill Required Fields!!');
			redirect(base_url('Master/products/color/'.$post['id']));
		}

		

	}


	public function addProduct6(){
		$post = $this->input->post();

		$chkColor=$post['color'];  
		$color="";
		foreach($chkColor as $chk2){  
		   $color .= $chk2.",";

		   if($post['rel_prod_code_'.$chk2] ){
		      	$rel_prod_code .= $post['rel_prod_code_'.$chk2]."@#@#";
		   } else {
		      	$rel_prod_code .= "0"."@#@#";
		   }
		}
		$color = trim($color, ",");
		$rel_prod_code = trim($rel_prod_code, "@#@#");

		
			
		$data1 = array(
			'rel_prod_code' => $rel_prod_code,
			'colors' => $color
		);
		$this->admin->update1('tbl_products', $data1, $post['id'], 'prod_id');


			

		$this->session->set_flashdata('success','Product Update Successfully!!');
		redirect(base_url('Master/products/photos/'.$post['id']));

	}

	public function addProduct7(){
		$post=$this->input->post();
		$name_file = $_FILES['files']['name'];



		if( !empty($name_file) ){

			// Image Uploads
			$this->_do_upload('files');
			if( !empty($name_file)){
				$fileName1 = $this->upload->data('file_name');
			} else {
				$fileName1 = '';
			}
			
			$data2 = array(
				'image' => $fileName1,
				'prod_id' => $post['id'],
				'status' => 1
			);

			$this->admin->insert('tbl_prod_image', $data2);
			$this->resizeImage($fileName1);

			$this->session->set_flashdata('success','Product Image Update Successfully!!');
			redirect(base_url('Master/products/photos/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Fields!!');
			redirect(base_url('Master/products/photos/'.$post['id']));
		}
	}

	public function addProduct8(){
		
		$post = $this->input->post();
			
		$data1 = array(
			'prod_content' => $post['news_content'],
			'description' => $post['description'],
			'details' => $post['details'],
			'video_link' => $post['video_link']
		);
		$this->admin->update1('tbl_products', $data1, $post['id'], 'prod_id');

		$this->session->set_flashdata('success','Product Update Successfully!!');
		redirect(base_url('Master/products/seo/'.$post['id']));
	}


	public function addProduct9(){
		$post = $this->input->post();

		if( !empty($post['meta_title']) ){
			
			$data1 = array(
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description'],
				'status' => 1
			);
			$this->admin->update1('tbl_products', $data1, $post['id'], 'prod_id');

			$this->session->set_flashdata('success','Product Update Successfully!!');
			redirect(base_url('Master/products/view'));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Fields!!');
			redirect(base_url('Master/products/seo/'.$post['id']));
		}

	}

	public function make_dulicate($id){
		echo $id;
	}


	public function resizeImage($filename){
      $source_path = './assets/admin/uploads/'.$filename;
      $target_path = './assets/admin/uploads/thumbnail/';
      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          'create_thumb' => TRUE,
          'thumb_marker' => '',
          'width' => 181,
          'height' => 268
      );

      $this->load->library('image_lib', $config_manip);
      if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
      }
      $this->image_lib->clear();
      echo $filename; echo "<br>";
   }

}
