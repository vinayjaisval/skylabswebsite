<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		date_default_timezone_set('Asia/Calcutta');
		$this->load->library('email');
	}

	public function index(){

		$data['meta_title'] = 'Blogs';
		$data['meta_keyword'] = '';
		$data['meta_description'] = '';
		$data['cat1'] = '';

		$setting = $this->home_model->fetch_data('tbl_settings', 'id');
		foreach ($setting as $row) {
			$data['logo'] = $row->logo;
			$data['favicon'] = $row->favicon;
			$data['footer_about'] = $row->footer_about;
			$data['footer_copyright'] = $row->footer_copyright;
			$data['contact_email'] = $row->contact_email;
			$data['contact_address'] = $row->contact_address;
			$data['contact_phone'] = $row->contact_phone;
			$data['contact_fax'] = $row->contact_fax;
		}

		$data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
		$data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());

		$data['banner'] = '';
		$data['name'] = 'Blogs';

		$data['blog_category'] = $this->home_model->fetch_data('tbl_category', 'category_id');
		$data['category'] = $this->home_model->fetch_data('tbl_category_prod', 'category_id');
		$data['latest'] = $this->home_model->view_limit('tbl_news', 'news_id', '0', '3');
		$data['random'] = $this->home_model->fetch_random('tbl_news', 'news_id', '0', '3');
		$data['latest_comment'] = $this->home_model->latest_comments();
		


		//===================

		if( !empty($this->input->get('page'))){
			$getPage = $this->input->get('page');
		} else{
			$getPage = 0;
		}

		if( !empty($this->input->get('cat'))){
			$data['cat_get'] = $this->input->get('cat');
		} else{
			$data['cat_get'] = '';
		}

		if( !empty($this->input->get('key'))){
			$data['key_get'] = $this->input->get('key');
		} else{
			$data['key_get'] = '';
		}
 
		$data['url'] = 'blogs.html';
		$data['getPage'] = $getPage;
		$data['offset'] = 6;

		$data['page'] = $getPage;
		if($data['page'] == "" || $data['page'] == "0" || $data['page'] == "1"){
			$data['page1']=0;
			$data['z'] = 0;
		} else {
			$data['page1'] = ($data['page']*$data['offset'])-$data['offset'];
					    $data['z'] = ($data['page']*$data['offset'])-$data['offset'];
		}

		$data['news'] = $this->home_model->view_limit_join('tbl_news', 'category_id', 'news_id', 'tbl_category', 'category_id', $data['page1'], $data['offset'], $data['cat_get'], 'category_id', $data['key_get'], 'news_title');
		$data['catNumRows'] = $this->home_model->count_join('tbl_news', 'category_id', 'news_id', 'tbl_category', 'category_id', $data['cat_get'], 'category_id', $data['key_get'], 'news_title');

		//===================

		$this->load->view('pages/inc/header', $data);
		$this->load->view('pages/blog');
		$this->load->view('pages/inc/footer');
	}

	public function blog_details($blog, $url){
	
		$setting = $this->home_model->fetch_data('tbl_settings', 'id');
		foreach ($setting as $row) {
			$data['logo'] = $row->logo;
			$data['favicon'] = $row->favicon;
			$data['footer_about'] = $row->footer_about;
			$data['footer_copyright'] = $row->footer_copyright;
			$data['contact_email'] = $row->contact_email;
			$data['contact_address'] = $row->contact_address;
			$data['contact_phone'] = $row->contact_phone;
			$data['contact_fax'] = $row->contact_fax;
		}

		$data['trending'] = $this->home_model->get_where('tbl_news', 'trending', '1');
		$data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
		$data['latest_comment'] = $this->home_model->latest_comments();

		$data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());

		//===================
		$data['latest'] = $this->home_model->view_limit('tbl_news', 'news_id', '0', '5');

		$url = str_replace(".html","", $url);
		$data['url1'] = $url;
		
		
		$data['newss'] = $this->home_model->get_where('tbl_news', 'news_slug', $url);
		if( !empty($data['newss'])){
			foreach ($data['newss'] as $row) {
				$data['news_id'] = $row->news_id;
				$data['news_title'] = $row->news_title;
				$data['photo'] = $row->photo;
				$data['banner'] = $row->banner;
				$data['news_date'] =$row->news_date;
				$data['publisher'] = $row->publisher;
				$data['news_content_short'] =$row->news_content_short;
				$data['news_content'] = $row->news_content;

				$data['meta_title'] = $row->meta_title;
				$data['meta_keyword'] = $row->meta_keyword;
				$data['meta_description'] = $row->meta_description;

			}
			$data['comments'] = $this->home_model->get_where_active('tbl_comments', 'reference_id', $data['news_id']);
			$data['comments_count'] = $this->home_model->count_where_active('tbl_comments', 'reference_id', $data['news_id']);
			//===================

			$this->load->view('pages/inc/header', $data);
			$this->load->view('pages/blog_details');
			$this->load->view('pages/inc/footer');

		} else{
			$data['meta_title'] = 'Blog Not Found';
			$data['meta_keyword'] = '';
			$data['meta_description'] = '';

			$this->load->view('pages/inc/header', $data);
			$this->load->view('pages/page_not_found');
			$this->load->view('pages/inc/footer');
		}
	}
	

	public function saveComments(){
		$post = $this->input->post();

		$data = array(
			'name' => $post['name'],
			'email' => $post['email'],
			'mobile' => $post['mobile'],
			'message' => $post['message'],
			'reference_id' => $post['news_id'],
			'comment_type' => 'news',
			'comm_date' => date('Y-m-d')
		);

		if( !empty($post['name']) && !empty($post['email']) && !empty($post['mobile'])){

			$this->home_model->insert('tbl_comments', $data);
			$this->session->set_flashdata('success', 'Your Comment Save successfully. Please wait for Approve!!!');
		} else{
			$this->session->set_flashdata('error', 'Please Fill Details!!!');
		}
		   
		$referred_from = $this->session->userdata('referred_from'); 
		redirect($referred_from, 'refresh');
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

}
