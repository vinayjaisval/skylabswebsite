<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('cart_model');
		date_default_timezone_set('Asia/Calcutta');
		$this->load->library('email');
	}

	public function index(){

		
	}

	public function category($abc, $url){

		$url = str_replace(".html","", $url);

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
		$data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());

		$url = str_replace(".html","", $url);
		$data['url1'] = $url;
		
		
		$cat = $this->home_model->get_where('tbl_category_prod', 'category_slug', $url);
		if( !empty($cat)){
			foreach ($cat as $row) {
				$id = $row->category_id;
				$data['cat_id'] = $row->category_id;
				$data['name'] = $row->category_name;
				$data['title'] = $row->category_name;
				$data['menu'] = $row->category_id;
				$data['sub_menu'] = $row->category_id;
				$data['description'] = $row->description;

				$data['meta_title'] = $row->meta_title;
				$data['meta_keyword'] = $row->meta_keyword;
				$data['meta_description'] = $row->meta_description;
			}
			
		

			$data['menu_active'] = $id;

			//===================

			if( !empty($this->input->get('page'))){
				$getPage = $this->input->get('page');
			} else{
				$getPage = 0;
			}

			if( !empty($this->input->get('key'))){
				$search = $this->input->get('key');
			} else{
				$search = '';
			}

			
			$data['url'] = $url.'.html';
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

			$data['product_list'] = $this->home_model->getProducts('tbl_products', 'category_id', $id, 'prod_id', 'status', '1', 'prod_title', $search, $data['page1'], $data['offset']);
			$data['catNumRows'] = $this->home_model->getProductsCount('tbl_products', 'category_id', $id, 'prod_id', 'status', '1', 'prod_title', $search);
			//===================

			$this->load->view('pages/inc/header', $data);
			if($url == 'gps-hardware'){
				$this->load->view('pages/category_gps');
			} else {
				$this->load->view('pages/category');
			}
			
			$this->load->view('pages/inc/footer');


		} else{
			
			$data['meta_title'] = 'Category Not Found';
			$data['meta_keyword'] = '';
			$data['meta_description'] = '';

			$this->load->view('pages/inc/header', $data);
			$this->load->view('pages/page_not_found');
			$this->load->view('pages/inc/footer');
			

		}

		
	}

	public function sub_category($cat, $url){
		$data['cat_name'] = $cat;

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
		$data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());



		$url = str_replace(".html","", $url);
		$data['url1'] = $data['cat_name'].'/'.$url;
		
		
		$cat = $this->home_model->get_where('tbl_sub_category_prod', 'slug', $url);
		if( !empty($cat)){
			foreach ($cat as $row) {
				$id = $row->id;
				$data['sub_cat_id'] = $row->id;
				$data['name'] = $row->name;
				$data['cat_tag'] = $row->name;
				$data['slug'] = $row->slug;
				$data['meta_title'] = $row->meta_title;
				$data['meta_keyword'] = $row->meta_keyword;
				$data['meta_description'] = $row->meta_description;
			}
			//===================

			if( !empty($this->input->get('page'))){
				$getPage = $this->input->get('page');
			} else{
				$getPage = 0;
			}

			
			$data['url'] = $url.'.html';
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

			$data['product_list'] = $this->home_model->get_where_limit_order1('tbl_products', 'sub_category_id', $id, $data['page1'], $data['offset'], 'prod_id', 'status', '1');
			$data['catNumRows'] = $this->home_model->get_where_count1('tbl_products', 'sub_category_id', $id, 'status', '1');
			//===================

			$this->load->view('pages/inc/header', $data);
			$this->load->view('pages/sub_category');
			$this->load->view('pages/inc/footer');

		} else{

			$data['meta_title'] = 'Category Not Found';
			$data['meta_keyword'] = '';
			$data['meta_description'] = '';

			$this->load->view('pages/inc/header', $data);
			$this->load->view('pages/page_not_found');
			$this->load->view('pages/inc/footer');
		}
	}

	public function sub_sub_category($cat, $sub_cat, $url){
		$data['cat_name'] = $cat;
		$data['sub_cat_name'] = $sub_cat;

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
		$data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());



		$url = str_replace(".html","", $url);
		$data['url1'] = $data['cat_name'].'/'.$data['sub_cat_name'].'/'.$url;
		
		
		$cat = $this->home_model->get_where('tbl_sub_sub_category_prod', 'slug', $url);
		if( !empty($cat)){
			foreach ($cat as $row) {
				$id = $row->id;
				$data['sub_cat_id'] = $row->id;
				$data['name'] = $row->name_sub;
				$data['cat_tag'] = $row->name_sub;
				$data['slug'] = $row->slug;
				$data['meta_title'] = $row->meta_title;
				$data['meta_keyword'] = $row->meta_keyword;
				$data['meta_description'] = $row->meta_description;
			}
			//===================

			if( !empty($this->input->get('page'))){
				$getPage = $this->input->get('page');
			} else{
				$getPage = 0;
			}

			
			$data['url'] = $url.'.html';
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

			$data['product_list'] = $this->home_model->get_where_limit_order1('tbl_products', 'sub_sub_category_id', $id, $data['page1'], $data['offset'], 'prod_id', 'status', '1');
			$data['catNumRows'] = $this->home_model->get_where_count1('tbl_products', 'sub_sub_category_id', $id, 'status', '1');
			//===================

			$this->load->view('pages/inc/header', $data);
			$this->load->view('pages/sub_sub_category');
			$this->load->view('pages/inc/footer');

		} else{

			$data['meta_title'] = 'Category Not Found';
			$data['meta_keyword'] = '';
			$data['meta_description'] = '';

			$this->load->view('pages/inc/header', $data);
			$this->load->view('pages/page_not_found');
			$this->load->view('pages/inc/footer');
		}
	}


	public function product($prod, $url){
	    
	    $data['new_url'] = $prod.'/'.$url;

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
		$data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());



		$url = str_replace(".html","", $url);
		$data['url1'] = $url;
		
		
		$data['productss'] = $this->home_model->get_where('tbl_products', 'prod_slug', $url);
		if( !empty($data['productss'])){
			foreach ($data['productss'] as $row) {
				$id = $row->prod_id;
				$data['category_id'] = $row->category_id;
				$data['sub_category_id'] = $row->sub_category_id;
				$data['meta_title'] = $row->meta_title;
				$data['meta_keyword'] = $row->meta_keyword;
				$data['meta_description'] = $row->meta_description;

			}
			$cat_slug = $this->home_model->get_where('tbl_category_prod', 'category_id', $data['category_id']);
			$sub_cat_slug = $this->home_model->get_where('tbl_sub_category_prod', 'id', $data['sub_category_id']);
			foreach ($cat_slug as $c_slug) {
				$data['category_slug'] = $c_slug->category_slug;
			}
			foreach ($sub_cat_slug as $sc_slug) {
				$data['sub_category_slug'] = $sc_slug->slug;
			}
			//===================

			$data['prod_list'] = $this->home_model->prod_list($url);

			$data['related_product'] = $this->home_model->fetch_where_random('tbl_products', 'prod_id', 'category_id', $data['category_id'], 0, 8);
			//===================

			$this->load->view('pages/inc/header', $data);
			$this->load->view('pages/product_detail');
			$this->load->view('pages/inc/footer');

		} else{
			$data['meta_title'] = 'Product Not Found';
			$data['meta_keyword'] = '';
			$data['meta_description'] = '';

			$this->load->view('pages/inc/header', $data);
			$this->load->view('pages/page_not_found');
			$this->load->view('pages/inc/footer');
		}
	}

	public function product_quick_view(){
		

		$prod_slug = $this->input->post('prod_slug');
		$data['prod_list'] = $this->home_model->prod_list($prod_slug);
		$this->load->view('pages/product_quick_view', $data);
	}

	public function search(){
		$data['name'] = 'Products';
		$data['meta_title'] = 'Products';
		$data['meta_keyword'] = '';
		$data['meta_description'] = '';

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

		$data['url1'] = 'products';
		
		$data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
		$data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
		$data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
		
		
		if( !empty($this->input->get('page'))){
			$getPage = $this->input->get('page');
		} else{
			$getPage = 0;
		}

		if( !empty($this->input->get('key'))){
			$data['key'] = $this->input->get('key');
		} else{
			$data['key'] = '';
		}

		if( !empty($this->input->get('cat'))){
			$data['cat'] = $this->input->get('cat');
		} else{
			$data['cat'] = '';
		}

		if( !empty($this->input->get('price'))){
			$data['price'] = $this->input->get('price');
		} else{
			$data['price'] = '';
		}

		if( !empty($this->input->get('color'))){
			$data['color'] = $this->input->get('color');
		} else{
			$data['color'] = '';
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

		$data['product_list'] = $this->home_model->getProductsSearch($data['cat'], $data['key'], $data['color'], $data['price'], $data['page1'], $data['offset']);
		//echo $this->db->last_query(); die();
		$data['catNumRows'] = $this->home_model->getProductsSearchCount($data['cat'], $data['key'], $data['color'], $data['price']);
		//===================

		$this->load->view('pages/inc/header', $data);
		$this->load->view('pages/search');
		$this->load->view('pages/inc/footer');
	}

	public function submitProductReview(){
		$post = $this->input->post();
		
		if(!empty($post['name']) && !empty($post['email'])){
			$data1 = array(
				'product_id' => $post['product_id'],
				'rating' => $post['rating'],
				'message' => $post['message'],
				'name' => $post['name'],
				'email' => $post['email']
			);
			$this->home_model->insert('tbl_prod_review', $data1);
			$this->session->set_flashdata('success', 'Review Submit Successfully!!');
		} else {
			$this->session->set_flashdata('error', 'Please Fill Name & Email !!');
		}
		redirect(base_url($post['urlRef']));
	}

	public function addToCart(){
		$post = $this->input->post();
		
		if( $this->cart_model->find_val('tbl_prod_cart', 'prod_id', $this->input->post('prod_id'), 'user_ip', $this->user_ip_address() ) ){
			//echo $this->db->last_query();
		} else {
			$data = array(
				'prod_id' => $this->input->post('prod_id'),
				'prod_title' => $this->input->post('prod_title'),
				'prod_slug' => $this->input->post('prod_slug'),
				'prod_price' => $this->input->post('prod_price'),
				'prod_content_short' => $this->input->post('prod_content'),
				'prod_image' => $this->input->post('prod_image'),
				'qty' => $post['cartQty'],
				'colors' => $post['colors'],
				'size' => $post['size'],
				'cup_type' => "0",
				'user_ip' => $this->user_ip_address()
			);
			$this->home_model->insert('tbl_prod_cart', $data);
		}
		$this->session->set_flashdata('success', 'Add to cart Successfully!!');
		if( isset($post['buy_now'])){
			redirect(base_url('checkout.html'));
		} else {
			redirect(base_url($post['urlRef']));
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


	public function video(){
        $data['meta_title'] = "Home";
        $data['slider'] = $this->home_model->fetch_data('tbl_slider', 'id');
        $setting = $this->home_model->fetch_data('tbl_settings', 'id');
        foreach ($setting as $row) {
            $data['logo'] = $row->logo;
            $data['favicon'] = $row->favicon;
            $data['footer_about'] = $row->footer_about;
            $data['footer_copyright'] = $row->footer_copyright;
            $data['contact_email'] = $row->contact_email;
            $data['contact_address'] = $row->contact_address;
            $data['contact_phone'] = $row->contact_phone;
            $data['meta_keyword'] = $row->meta_keyword_home;
            $data['meta_description'] = $row->meta_description_home;
            $data['meta_title'] = $row->meta_title_home;
            $data['contact_fax'] = $row->contact_fax;
        }
        $data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
        $data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
        $data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
        $this->load->view('pages/inc/header', $data);
        // $this->load->view('pages/inc/slider');
        // $this->load->view('pages/cyber/security');
        $this->load->view('pages/category_video');
        $this->load->view('pages/inc/footer');
    }



/*************  ✨ Windsurf Command ⭐  *************/
/*******  71c9be46-fab2-4e7c-a31c-15e92f7004f8  *******/
public function all_pro(){
        $data['meta_title'] = "Home";
        $data['slider'] = $this->home_model->fetch_data('tbl_slider', 'id');
        $setting = $this->home_model->fetch_data('tbl_settings', 'id');
        foreach ($setting as $row) {
            $data['logo'] = $row->logo;
            $data['favicon'] = $row->favicon;
            $data['footer_about'] = $row->footer_about;
            $data['footer_copyright'] = $row->footer_copyright;
            $data['contact_email'] = $row->contact_email;
            $data['contact_address'] = $row->contact_address;
            $data['contact_phone'] = $row->contact_phone;
            $data['meta_keyword'] = $row->meta_keyword_home;
            $data['meta_description'] = $row->meta_description_home;
            $data['meta_title'] = $row->meta_title_home;
            $data['contact_fax'] = $row->contact_fax;
        }
        $data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
        $data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
        $data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
        $this->load->view('pages/inc/header', $data);
        // $this->load->view('pages/inc/slider');
        // $this->load->view('pages/cyber/security');
        $this->load->view('pages/cyber/prodct');
        $this->load->view('pages/inc/footer');
    }


public function all_vayupankh(){
        $data['meta_title'] = "Home";
        $data['slider'] = $this->home_model->fetch_data('tbl_slider', 'id');
        $setting = $this->home_model->fetch_data('tbl_settings', 'id');
        foreach ($setting as $row) {
            $data['logo'] = $row->logo;
            $data['favicon'] = $row->favicon;
            $data['footer_about'] = $row->footer_about;
            $data['footer_copyright'] = $row->footer_copyright;
            $data['contact_email'] = $row->contact_email;
            $data['contact_address'] = $row->contact_address;
            $data['contact_phone'] = $row->contact_phone;
            $data['meta_keyword'] = $row->meta_keyword_home;
            $data['meta_description'] = $row->meta_description_home;
            $data['meta_title'] = $row->meta_title_home;
            $data['contact_fax'] = $row->contact_fax;
        }
        $data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
        $data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
        $data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
        $this->load->view('pages/inc/header', $data);
        // $this->load->view('pages/inc/slider');
        // $this->load->view('pages/cyber/security');
        $this->load->view('pages/cyber/vayupank');
        $this->load->view('pages/inc/footer');
    }

	public function all_viyukishan(){
        $data['meta_title'] = "Home";
        $data['slider'] = $this->home_model->fetch_data('tbl_slider', 'id');
        $setting = $this->home_model->fetch_data('tbl_settings', 'id');
        foreach ($setting as $row) {
            $data['logo'] = $row->logo;
            $data['favicon'] = $row->favicon;
            $data['footer_about'] = $row->footer_about;
            $data['footer_copyright'] = $row->footer_copyright;
            $data['contact_email'] = $row->contact_email;
            $data['contact_address'] = $row->contact_address;
            $data['contact_phone'] = $row->contact_phone;
            $data['meta_keyword'] = $row->meta_keyword_home;
            $data['meta_description'] = $row->meta_description_home;
            $data['meta_title'] = $row->meta_title_home;
            $data['contact_fax'] = $row->contact_fax;
        }
        $data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
        $data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
        $data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
        $this->load->view('pages/inc/header', $data);
        // $this->load->view('pages/inc/slider');
        // $this->load->view('pages/cyber/security');
        $this->load->view('pages/cyber/viyukishan');
        $this->load->view('pages/inc/footer');
    }

public function all_viyusky(){
        $data['meta_title'] = "Home";
        $data['slider'] = $this->home_model->fetch_data('tbl_slider', 'id');
        $setting = $this->home_model->fetch_data('tbl_settings', 'id');
        foreach ($setting as $row) {
            $data['logo'] = $row->logo;
            $data['favicon'] = $row->favicon;
            $data['footer_about'] = $row->footer_about;
            $data['footer_copyright'] = $row->footer_copyright;
            $data['contact_email'] = $row->contact_email;
            $data['contact_address'] = $row->contact_address;
            $data['contact_phone'] = $row->contact_phone;
            $data['meta_keyword'] = $row->meta_keyword_home;
            $data['meta_description'] = $row->meta_description_home;
            $data['meta_title'] = $row->meta_title_home;
            $data['contact_fax'] = $row->contact_fax;
        }
        $data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
        $data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
        $data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
        $this->load->view('pages/inc/header', $data);
        // $this->load->view('pages/inc/slider');
        // $this->load->view('pages/cyber/security');
        $this->load->view('pages/cyber/viyuskylane');
        $this->load->view('pages/inc/footer');
    }

public function all_skycarter(){
        $data['meta_title'] = "Home";
        $data['slider'] = $this->home_model->fetch_data('tbl_slider', 'id');
        $setting = $this->home_model->fetch_data('tbl_settings', 'id');
        foreach ($setting as $row) {
            $data['logo'] = $row->logo;
            $data['favicon'] = $row->favicon;
            $data['footer_about'] = $row->footer_about;
            $data['footer_copyright'] = $row->footer_copyright;
            $data['contact_email'] = $row->contact_email;
            $data['contact_address'] = $row->contact_address;
            $data['contact_phone'] = $row->contact_phone;
            $data['meta_keyword'] = $row->meta_keyword_home;
            $data['meta_description'] = $row->meta_description_home;
            $data['meta_title'] = $row->meta_title_home;
            $data['contact_fax'] = $row->contact_fax;
        }
        $data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
        $data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
        $data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
        $this->load->view('pages/inc/header', $data);
        // $this->load->view('pages/inc/slider');
        // $this->load->view('pages/cyber/security');
        $this->load->view('pages/cyber/skycarter');
        $this->load->view('pages/inc/footer');
    }

public function all_skyheavy(){
        $data['meta_title'] = "Home";
        $data['slider'] = $this->home_model->fetch_data('tbl_slider', 'id');
        $setting = $this->home_model->fetch_data('tbl_settings', 'id');
        foreach ($setting as $row) {
            $data['logo'] = $row->logo;
            $data['favicon'] = $row->favicon;
            $data['footer_about'] = $row->footer_about;
            $data['footer_copyright'] = $row->footer_copyright;
            $data['contact_email'] = $row->contact_email;
            $data['contact_address'] = $row->contact_address;
            $data['contact_phone'] = $row->contact_phone;
            $data['meta_keyword'] = $row->meta_keyword_home;
            $data['meta_description'] = $row->meta_description_home;
            $data['meta_title'] = $row->meta_title_home;
            $data['contact_fax'] = $row->contact_fax;
        }
        $data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
        $data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
        $data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
        $this->load->view('pages/inc/header', $data);
        // $this->load->view('pages/inc/slider');
        // $this->load->view('pages/cyber/security');
        $this->load->view('pages/cyber/skyheavy');
        $this->load->view('pages/inc/footer');
    }

	public function all_skyteather(){
        $data['meta_title'] = "Home";
        $data['slider'] = $this->home_model->fetch_data('tbl_slider', 'id');
        $setting = $this->home_model->fetch_data('tbl_settings', 'id');
        foreach ($setting as $row) {
            $data['logo'] = $row->logo;
            $data['favicon'] = $row->favicon;
            $data['footer_about'] = $row->footer_about;
            $data['footer_copyright'] = $row->footer_copyright;
            $data['contact_email'] = $row->contact_email;
            $data['contact_address'] = $row->contact_address;
            $data['contact_phone'] = $row->contact_phone;
            $data['meta_keyword'] = $row->meta_keyword_home;
            $data['meta_description'] = $row->meta_description_home;
            $data['meta_title'] = $row->meta_title_home;
            $data['contact_fax'] = $row->contact_fax;
        }
        $data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
        $data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
        $data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
        $this->load->view('pages/inc/header', $data);
        // $this->load->view('pages/inc/slider');
        // $this->load->view('pages/cyber/security');
        $this->load->view('pages/cyber/skythether');
        $this->load->view('pages/inc/footer');
    }
public function all_carter30x(){
        $data['meta_title'] = "Home";
        $data['slider'] = $this->home_model->fetch_data('tbl_slider', 'id');
        $setting = $this->home_model->fetch_data('tbl_settings', 'id');
        foreach ($setting as $row) {
            $data['logo'] = $row->logo;
            $data['favicon'] = $row->favicon;
            $data['footer_about'] = $row->footer_about;
            $data['footer_copyright'] = $row->footer_copyright;
            $data['contact_email'] = $row->contact_email;
            $data['contact_address'] = $row->contact_address;
            $data['contact_phone'] = $row->contact_phone;
            $data['meta_keyword'] = $row->meta_keyword_home;
            $data['meta_description'] = $row->meta_description_home;
            $data['meta_title'] = $row->meta_title_home;
            $data['contact_fax'] = $row->contact_fax;
        }
        $data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
        $data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
        $data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
        $this->load->view('pages/inc/header', $data);
        // $this->load->view('pages/inc/slider');
        // $this->load->view('pages/cyber/security');
        $this->load->view('pages/cyber/carter-30x');
        $this->load->view('pages/inc/footer');
    }

	public function all_carter180(){
        $data['meta_title'] = "Home";
        $data['slider'] = $this->home_model->fetch_data('tbl_slider', 'id');
        $setting = $this->home_model->fetch_data('tbl_settings', 'id');
        foreach ($setting as $row) {
            $data['logo'] = $row->logo;
            $data['favicon'] = $row->favicon;
            $data['footer_about'] = $row->footer_about;
            $data['footer_copyright'] = $row->footer_copyright;
            $data['contact_email'] = $row->contact_email;
            $data['contact_address'] = $row->contact_address;
            $data['contact_phone'] = $row->contact_phone;
            $data['meta_keyword'] = $row->meta_keyword_home;
            $data['meta_description'] = $row->meta_description_home;
            $data['meta_title'] = $row->meta_title_home;
            $data['contact_fax'] = $row->contact_fax;
        }
        $data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
        $data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
        $data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
        $this->load->view('pages/inc/header', $data);
        // $this->load->view('pages/inc/slider');
        // $this->load->view('pages/cyber/security');
        $this->load->view('pages/cyber/carter180x');
        $this->load->view('pages/inc/footer');
    }


	public function all_carter24(){
        $data['meta_title'] = "Home";
        $data['slider'] = $this->home_model->fetch_data('tbl_slider', 'id');
        $setting = $this->home_model->fetch_data('tbl_settings', 'id');
        foreach ($setting as $row) {
            $data['logo'] = $row->logo;
            $data['favicon'] = $row->favicon;
            $data['footer_about'] = $row->footer_about;
            $data['footer_copyright'] = $row->footer_copyright;
            $data['contact_email'] = $row->contact_email;
            $data['contact_address'] = $row->contact_address;
            $data['contact_phone'] = $row->contact_phone;
            $data['meta_keyword'] = $row->meta_keyword_home;
            $data['meta_description'] = $row->meta_description_home;
            $data['meta_title'] = $row->meta_title_home;
            $data['contact_fax'] = $row->contact_fax;
        }
        $data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
        $data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
        $data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
        $this->load->view('pages/inc/header', $data);
        // $this->load->view('pages/inc/slider');
        // $this->load->view('pages/cyber/security');
        $this->load->view('pages/cyber/carter24');
        $this->load->view('pages/inc/footer');
    }

		public function all_carter640(){
        $data['meta_title'] = "Home";
        $data['slider'] = $this->home_model->fetch_data('tbl_slider', 'id');
        $setting = $this->home_model->fetch_data('tbl_settings', 'id');
        foreach ($setting as $row) {
            $data['logo'] = $row->logo;
            $data['favicon'] = $row->favicon;
            $data['footer_about'] = $row->footer_about;
            $data['footer_copyright'] = $row->footer_copyright;
            $data['contact_email'] = $row->contact_email;
            $data['contact_address'] = $row->contact_address;
            $data['contact_phone'] = $row->contact_phone;
            $data['meta_keyword'] = $row->meta_keyword_home;
            $data['meta_description'] = $row->meta_description_home;
            $data['meta_title'] = $row->meta_title_home;
            $data['contact_fax'] = $row->contact_fax;
        }
        $data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
        $data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
        $data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
        $this->load->view('pages/inc/header', $data);
        // $this->load->view('pages/inc/slider');
        // $this->load->view('pages/cyber/security');
        $this->load->view('pages/cyber/carter640');
        $this->load->view('pages/inc/footer');
    }


		public function all_Spectral(){
        $data['meta_title'] = "Home";
        $data['slider'] = $this->home_model->fetch_data('tbl_slider', 'id');
        $setting = $this->home_model->fetch_data('tbl_settings', 'id');
        foreach ($setting as $row) {
            $data['logo'] = $row->logo;
            $data['favicon'] = $row->favicon;
            $data['footer_about'] = $row->footer_about;
            $data['footer_copyright'] = $row->footer_copyright;
            $data['contact_email'] = $row->contact_email;
            $data['contact_address'] = $row->contact_address;
            $data['contact_phone'] = $row->contact_phone;
            $data['meta_keyword'] = $row->meta_keyword_home;
            $data['meta_description'] = $row->meta_description_home;
            $data['meta_title'] = $row->meta_title_home;
            $data['contact_fax'] = $row->contact_fax;
        }
        $data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
        $data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
        $data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
        $this->load->view('pages/inc/header', $data);
        // $this->load->view('pages/inc/slider');
        // $this->load->view('pages/cyber/security');
        $this->load->view('pages/cyber/spectral');
        $this->load->view('pages/inc/footer');
    }


		public function all_system(){
        $data['meta_title'] = "Home";
        $data['slider'] = $this->home_model->fetch_data('tbl_slider', 'id');
        $setting = $this->home_model->fetch_data('tbl_settings', 'id');
        foreach ($setting as $row) {
            $data['logo'] = $row->logo;
            $data['favicon'] = $row->favicon;
            $data['footer_about'] = $row->footer_about;
            $data['footer_copyright'] = $row->footer_copyright;
            $data['contact_email'] = $row->contact_email;
            $data['contact_address'] = $row->contact_address;
            $data['contact_phone'] = $row->contact_phone;
            $data['meta_keyword'] = $row->meta_keyword_home;
            $data['meta_description'] = $row->meta_description_home;
            $data['meta_title'] = $row->meta_title_home;
            $data['contact_fax'] = $row->contact_fax;
        }
        $data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
        $data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
        $data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
        $this->load->view('pages/inc/header', $data);
        // $this->load->view('pages/inc/slider');
        // $this->load->view('pages/cyber/security');
        $this->load->view('pages/cyber/systems');
        $this->load->view('pages/inc/footer');
    }


	public function all_freestyle (){
        $data['meta_title'] = "Home";
        $data['slider'] = $this->home_model->fetch_data('tbl_slider', 'id');
        $setting = $this->home_model->fetch_data('tbl_settings', 'id');
        foreach ($setting as $row) {
            $data['logo'] = $row->logo;
            $data['favicon'] = $row->favicon;
            $data['footer_about'] = $row->footer_about;
            $data['footer_copyright'] = $row->footer_copyright;
            $data['contact_email'] = $row->contact_email;
            $data['contact_address'] = $row->contact_address;
            $data['contact_phone'] = $row->contact_phone;
            $data['meta_keyword'] = $row->meta_keyword_home;
            $data['meta_description'] = $row->meta_description_home;
            $data['meta_title'] = $row->meta_title_home;
            $data['contact_fax'] = $row->contact_fax;
        }
        $data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
        $data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
        $data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
        $this->load->view('pages/inc/header', $data);
        // $this->load->view('pages/inc/slider');
        // $this->load->view('pages/cyber/security');
        $this->load->view('pages/cyber/freestyle');
        $this->load->view('pages/inc/footer');
    }


	public function all_kisanpro(){
        $data['meta_title'] = "Home";
        $data['slider'] = $this->home_model->fetch_data('tbl_slider', 'id');
        $setting = $this->home_model->fetch_data('tbl_settings', 'id');
        foreach ($setting as $row) {
            $data['logo'] = $row->logo;
            $data['favicon'] = $row->favicon;
            $data['footer_about'] = $row->footer_about;
            $data['footer_copyright'] = $row->footer_copyright;
            $data['contact_email'] = $row->contact_email;
            $data['contact_address'] = $row->contact_address;
            $data['contact_phone'] = $row->contact_phone;
            $data['meta_keyword'] = $row->meta_keyword_home;
            $data['meta_description'] = $row->meta_description_home;
            $data['meta_title'] = $row->meta_title_home;
            $data['contact_fax'] = $row->contact_fax;
        }
        $data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
        $data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
        $data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
        $this->load->view('pages/inc/header', $data);
        // $this->load->view('pages/inc/slider');
        // $this->load->view('pages/cyber/security');
        $this->load->view('pages/cyber/kisanpro');
        $this->load->view('pages/inc/footer');
    }



	public function all_freesheet (){
        $data['meta_title'] = "Home";
        $data['slider'] = $this->home_model->fetch_data('tbl_slider', 'id');
        $setting = $this->home_model->fetch_data('tbl_settings', 'id');
        foreach ($setting as $row) {
            $data['logo'] = $row->logo;
            $data['favicon'] = $row->favicon;
            $data['footer_about'] = $row->footer_about;
            $data['footer_copyright'] = $row->footer_copyright;
            $data['contact_email'] = $row->contact_email;
            $data['contact_address'] = $row->contact_address;
            $data['contact_phone'] = $row->contact_phone;
            $data['meta_keyword'] = $row->meta_keyword_home;
            $data['meta_description'] = $row->meta_description_home;
            $data['meta_title'] = $row->meta_title_home;
            $data['contact_fax'] = $row->contact_fax;
        }
        $data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
        $data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
        $data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
        $data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());
        $this->load->view('pages/inc/header', $data);
        // $this->load->view('pages/inc/slider');
        // $this->load->view('pages/cyber/security');
        $this->load->view('pages/cyber/freesky');
        $this->load->view('pages/inc/footer');
    }


}




