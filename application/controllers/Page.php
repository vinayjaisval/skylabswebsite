<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		date_default_timezone_set('Asia/Calcutta');
		$this->load->library('email');
	}

	public function pages($url){
		//echo $url; die;
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
			$data['contact_map_iframe'] = $row->contact_map_iframe;
		}

		
		$data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
		$data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
		$data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());

		$data['url12'] = $url;

		$url = str_replace(".html","", $url);
		$page = $this->home_model->get_where('tbl_page', 'page_slug', $url);
		if ( !empty($page) ){
			
			foreach ($page as $row) {
				$pageLayout = $row->page_layout;
				
				$data['title'] = $row->page_name; 

				$data['meta_keyword'] = $row->meta_keyword;
				$data['meta_description'] = $row->meta_description;
				$data['meta_title'] = $row->meta_title;


				$data['menu'] = $row->id;
				if( $pageLayout == 'Full Width Page Layout'){
					$data['content'] = $page;
					foreach ($data['content'] as $contnt) {
						$data['menu_slug'] = $contnt->page_slug;
					}

					$this->load->view('pages/inc/header', $data);
					$this->load->view('pages/pages');
					$this->load->view('pages/inc/footer');

				} else if( $pageLayout == 'Product Page Layout') {
					$data['banner'] = $row->banner;
					$data['name'] = $row->page_name;
					$data['page_content'] = $row->page_content;
					$data['short_content'] = $row->short_content;
				// 	$sql = "SELECT t1.prod_id, t1.prod_title, t1.tags, t1.status, t1.prod_code, t1.trending, t1.photo FROM tbl_products t1";
				$sql = "SELECT * FROM tbl_products";
$query = $this->db->query($sql);
$data['products'] = $query->result_array();

					
					$this->load->view('pages/inc/header', $data);
					$this->load->view('pages/productlist');
					$this->load->view('pages/inc/footer');



				} else if( $pageLayout == 'About Us Page Layout') {
					$data['banner'] = $row->banner;
					$data['name'] = $row->page_name;
					$data['page_content'] = $row->page_content;
					$data['short_content'] = $row->short_content;

					$this->load->view('pages/inc/header', $data);
					$this->load->view('pages/about');
					$this->load->view('pages/inc/footer');


					
				} else if( $pageLayout == 'product') {
					$data['banner'] = $row->banner;
					$data['name'] = $row->page_name;
					$data['page_content'] = $row->page_content;
					$data['short_content'] = $row->short_content;

					$this->load->view('pages/inc/header', $data);
					$this->load->view('pages/about');
					$this->load->view('pages/inc/footer');
				} else if( $pageLayout == 'Contact Us Page Layout'){
					$data['banner'] = $row->banner;
					$data['name'] = $row->page_name;

					$this->load->view('pages/inc/header', $data);
					$this->load->view('pages/contact');
					$this->load->view('pages/inc/footer');
				} else if( $pageLayout == 'Team Layout'){
					$data['banner'] = $row->banner;
					$data['name'] = $row->page_name;
					$data['short_content'] = $row->short_content;
					$data['page_content'] = $row->page_content;

					$this->load->view('pages/inc/header', $data);
					$this->load->view('pages/team');
					$this->load->view('pages/inc/footer');
				} else if( $pageLayout == 'Partner Layout'){
					$data['banner'] = $row->banner;
					$data['name'] = $row->page_name;
					$data['short_content'] = $row->short_content;
					$data['page_content'] = $row->page_content;

					$this->load->view('pages/inc/header', $data);
					$this->load->view('pages/partner');
					$this->load->view('pages/inc/footer');
				} else if( $pageLayout == 'Client Layout'){
					$data['banner'] = $row->banner;
					$data['name'] = $row->page_name;
					$data['short_content'] = $row->short_content;
					$data['page_content'] = $row->page_content;

					$this->load->view('pages/inc/header', $data);
					$this->load->view('pages/clients');
					$this->load->view('pages/inc/footer');
				} else if( $pageLayout == 'Career Layout'){
					$data['banner'] = $row->banner;
					$data['name'] = $row->page_name;
					$data['short_content'] = $row->short_content;
					$data['page_content'] = $row->page_content;

					$this->load->view('pages/inc/header', $data);
					$this->load->view('pages/career');
					$this->load->view('pages/inc/footer');
				} else if( $pageLayout == 'Timeline Page Layout'){
					$data['banner'] = $row->banner;
					$data['name'] = $row->page_name;
					$data['short_content'] = $row->short_content;
					$data['page_content'] = $row->page_content;

					$this->load->view('pages/inc/header', $data);
					$this->load->view('pages/timeline');
					$this->load->view('pages/inc/footer');
				} else if( $pageLayout == 'Service Page Layout'){
					$data['page_id'] = $row->id;
					$data['banner'] = $row->banner;
					$data['name'] = $row->page_name;
					$data['short_content'] = $row->short_content;
					$data['page_content'] = $row->page_content;

					$this->load->view('pages/inc/header', $data);
					$this->load->view('pages/service');
					$this->load->view('pages/inc/footer');
				}  else if ( $pageLayout == 'Success Story Page Layout'){
					
					$data['banner'] = $row->banner;
					$data['name'] = $row->page_name;
					$data['short_content'] = $row->short_content;

					$data['blog_category'] = $this->home_model->fetch_data('tbl_category', 'category_id');
					$data['latest'] = $this->home_model->view_limit('tbl_news', 'news_id', '0', '3');
					$data['random'] = $this->home_model->fetch_random('tbl_news', 'news_id', '0', '3');


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
 
					$data['url'] = $url.'.html';
					$data['getPage'] = $getPage;
					$data['offset'] = 15;

					$data['page'] = $getPage;
					if($data['page'] == "" || $data['page'] == "0" || $data['page'] == "1"){
					    $data['page1']=0;
					    $data['z'] = 0;
					} else {
					    $data['page1'] = ($data['page']*$data['offset'])-$data['offset'];
					    $data['z'] = ($data['page']*$data['offset'])-$data['offset'];
					}

					$data['news'] = $this->home_model->view_limit_join('tbl_news', 'category_id', 'news_id', 'tbl_category', 'category_id', $data['page1'], $data['offset'], 2, 'category_id', $data['key_get'], 'news_title');
					$data['catNumRows'] = $this->home_model->count_join('tbl_news', 'category_id', 'news_id', 'tbl_category', 'category_id', 2, 'category_id', $data['key_get'], 'news_title');

					//===================

					$this->load->view('pages/inc/header', $data);
					$this->load->view('pages/blog');
					$this->load->view('pages/inc/footer');
				}  else if ( $pageLayout == 'Blog Page Layout'){
					
					$data['banner'] = $row->banner;
					$data['name'] = $row->page_name;
					$data['short_content'] = $row->short_content;

					$data['blog_category'] = $this->home_model->fetch_data('tbl_category', 'category_id');
					$data['latest'] = $this->home_model->view_limit('tbl_news', 'news_id', '0', '3');
					$data['random'] = $this->home_model->fetch_random('tbl_news', 'news_id', '0', '3');


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
 
					$data['url'] = $url.'.html';
					$data['getPage'] = $getPage;
					$data['offset'] = 15;

					$data['page'] = $getPage;
					if($data['page'] == "" || $data['page'] == "0" || $data['page'] == "1"){
					    $data['page1']=0;
					    $data['z'] = 0;
					} else {
					    $data['page1'] = ($data['page']*$data['offset'])-$data['offset'];
					    $data['z'] = ($data['page']*$data['offset'])-$data['offset'];
					}

					$data['news'] = $this->home_model->view_limit_join('tbl_news', 'category_id', 'news_id', 'tbl_category', 'category_id', $data['page1'], $data['offset'], 1, 'category_id', $data['key_get'], 'news_title');
					$data['catNumRows'] = $this->home_model->count_join('tbl_news', 'category_id', 'news_id', 'tbl_category', 'category_id', 1, 'category_id', $data['key_get'], 'news_title');

					//===================

					$this->load->view('pages/inc/header', $data);
					$this->load->view('pages/blog');
					$this->load->view('pages/inc/footer');
				}  else {
					$data['meta_title'] = 'Layout Not Found';
					$data['meta_keyword'] = '';
					$data['meta_description'] = '';

					$this->load->view('pages/inc/header', $data);
					$this->load->view('pages/page_not_found');
					$this->load->view('pages/inc/footer');
				}
			}


		} else{
			$data['meta_title'] = 'Page Not Found';
			$data['meta_keyword'] = '';
			$data['meta_description'] = '';

			$this->load->view('pages/inc/header', $data);
			$this->load->view('pages/page_not_found');
			$this->load->view('pages/inc/footer');
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


public function details($url,$step2){
		
		// $sql = "SELECT t1.prod_id, t1.prod_title, t1.tags, t1.status, t1.prod_code, t1.trending, t1.photo FROM tbl_products t1 WHERE 1 ORDER BY t1.prod_slug = $url";
		$sql = "SELECT * FROM tbl_products";
		$sqlsecond = "SELECT * FROM tbl_products WHERE prod_slug = '$step2'";
		$qry = $this->db->query($sqlsecond);
		$query = $this->db->query($sql);
		$data['products'] = $query->result_array();
        $data['product'] = $qry->result_array();
		// echo "<pre>"; print_r($data['product']); die;
		$this->load->view('pages/inc/header', $data);
		$this->load->view('pages/productlist');
		$this->load->view('pages/inc/footer');
	}

}
