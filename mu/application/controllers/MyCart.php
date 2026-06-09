<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyCart extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('cart_model');
		$this->load->model('home_model');
		date_default_timezone_set('Asia/Calcutta');
		$this->load->library('email');
	}

	public function index(){}


	// My Cart

	public function cart(){
		$data['meta_title'] = 'Cart';
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
		}

		
		$data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
		$data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
		$data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());

		if( $data['cart_count'] <= 0 ){
			$this->session->set_flashdata('error', 'You don\'t have any product in cart list !!!');
			redirect(base_url());
		}

		// coupon amount
		$c_amount = $this->cart_model->getCouponAmount($this->user_ip_address());
		if( !empty($c_amount)){
			$data['c_availble'] = 1;
			foreach ($c_amount as $row) {
				$data['c_id'] = $row->id;
				$data['c_name'] = $row->name;
				$data['c_amount'] = $row->amount;
				$data['c_type'] = $row->dis_type;
			}
		} else {
			$data['c_availble'] = 0;
			$data['c_id'] = "";
			$data['c_name'] = "";
			$data['c_amount'] = "";
			$data['c_type'] = "";
		}

		$this->load->view('pages/inc/header', $data);
		$this->load->view('pages/cart/cart');
		$this->load->view('pages/inc/footer');
	}


	public function add_cart(){
		$post = $this->input->post();

		//if( $this->cart_model->find_val1('tbl_prod_cart', 'prod_id', $this->input->post('id'), 'user_ip', $this->user_ip_address(), 'size', $this->input->post('size') ) ){
			
		//} else {
			$data = array(
				'prod_id' => $this->input->post('id'),
				'prod_title' => $this->input->post('prod_title'),
				'prod_slug' => $this->input->post('prod_slug'),
				'prod_price' => $this->input->post('prod_price'),
				'prod_content_short' => $this->input->post('prod_content_short'),
				'prod_image' => $this->input->post('prod_image'),
				'size' => $this->input->post('size'),
				'colors' => $this->input->post('colors'),
				'qty' => 1,
				'cup_type' => $this->input->post('cup_type'),
				'user_ip' => $this->user_ip_address()
			);
			$this->cart_model->insert('tbl_prod_cart', $data);
		//}

	}

	public function remove_cart_prod($url, $id){
		$this->db->delete('tbl_prod_cart', array('id' => $id));
		$this->session->set_flashdata('success', 'Product Remove from Cart List!!!');
	    redirect(base_url('cart.html'));
	}

	public function change_cart_qty(){
		$post = $this->input->post();

		if($post['change_type'] == 'plus'){
			$newQty = ($post['count']+1);
		} else {
			if($post['count'] == '1'){
				$newQty = ($post['count']);
			} else {
				$newQty = ($post['count']-1);
			}
		}

		$data = array(
			'qty' => $newQty
		);

		$this->home_model->update('tbl_prod_cart', $data, $post['id']);
	}

	
	// Compare Lists -----------
	public function comapre(){
		$data['meta_title'] = 'Compare Products';
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
		}

		
		$data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
		$data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
		$data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());


		$data['compare'] = $this->home_model->get_where('tbl_prod_compare', 'user_ip', $this->user_ip_address());

		if( empty( $data['compare'] )){
			$this->session->set_flashdata('error', 'Add Alteast One Product in Compare List!!!');
			redirect(base_url());
		}

		$this->load->view('pages/inc/header', $data);
		$this->load->view('pages/cart/comapre');
		$this->load->view('pages/inc/footer');	
	}


	public function add_compare(){
		$post = $this->input->post();
		//print_r($post); die();

		if( $this->cart_model->find_val('tbl_prod_compare', 'prod_id', $this->input->post('id'), 'user_ip', $this->user_ip_address() ) ){

		} else {
			$data = array(
				'prod_id' => $this->input->post('id'),
				'prod_title' => $this->input->post('prod_title'),
				'prod_slug' => $this->input->post('prod_slug'),
				'prod_price' => $this->input->post('prod_price'),
				'prod_content_short' => $this->input->post('prod_content_short'),
				'prod_image' => $this->input->post('prod_image'),
				'user_ip' => $this->user_ip_address()
			);
			$this->cart_model->insert('tbl_prod_compare', $data);
		}
	}

	public function remove_compare($url, $id){
		$this->db->delete('tbl_prod_compare', array('id' => $id));
		$this->session->set_flashdata('success', 'Product Remove from Compare List!!!');
	    redirect(base_url('compare.html'));
	}


	// Wishlist -----------
	public function wishlist(){
		$data['meta_title'] = 'Wishlist';
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
		}

		$data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
		$data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
		$data['compare_count'] = $this->home_model->get_where_count('tbl_prod_compare', 'user_ip', $this->user_ip_address());


		$data['wishlist'] = $this->home_model->get_where('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());

		if( empty( $data['wishlist'] )){
			$this->session->set_flashdata('error', 'Add Alteast One Product in Wishlist List!!!');
			redirect(base_url());
		}

		$this->load->view('pages/inc/header', $data);
		$this->load->view('pages/cart/wishlist');
		$this->load->view('pages/inc/footer');
	}

	public function add_wishlist(){
		$post = $this->input->post();

		if( $this->cart_model->find_val('tbl_prod_whishlist', 'id', $this->input->post('id'), 'user_ip', $this->user_ip_address() ) ){
			//echo $this->db->last_query();
		} else {
			$data = array(
				'prod_id' => $this->input->post('id'),
				'prod_title' => $this->input->post('prod_title'),
				'prod_slug' => $this->input->post('prod_slug'),
				'prod_price' => $this->input->post('prod_price'),
				'prod_content_short' => $this->input->post('prod_content_short'),
				'prod_image' => $this->input->post('prod_image'),
				'qty' => 1,
				'size' => $this->input->post('size'),
				'colors' => $this->input->post('colors'),
				'user_ip' => $this->user_ip_address()
			);
			$this->cart_model->insert('tbl_prod_whishlist', $data);
		}
	}

	public function remove_wishlist($url, $id){
		$this->db->delete('tbl_prod_whishlist', array('id' => $id));
		$this->session->set_flashdata('success', 'Product Remove from WishList!!!');
	    redirect(base_url('wishlist.html'));
	}

	public function change_wishlist_qty(){
		$post = $this->input->post();

		if($post['change_type'] == 'plus'){
			$newQty = ($post['count']+1);
		} else {
			if($post['count'] == '1'){
				$newQty = ($post['count']);
			} else {
				$newQty = ($post['count']-1);
			}
		}

		$data = array(
			'qty' => $newQty
		);

		$this->home_model->update('tbl_prod_whishlist', $data, $post['id']);
	}



	

	// checkout page =====================
	public function checkout(){
		$data['meta_title'] = 'Checkout';
		$data['meta_keyword'] = '';
		$data['meta_description'] = '';

		$n=4;
		$data['order_id'] = $this->getName($n).''.time();

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

		if( $data['cart_count'] <= 0 ){
			$this->session->set_flashdata('error', 'You don\'t have any product in cart list !!!');
			redirect(base_url());
		}

		// coupon amount
		$c_amount = $this->cart_model->getCouponAmount($this->user_ip_address());
		if( !empty($c_amount)){
			$data['c_availble'] = 1;
			foreach ($c_amount as $row) {
				$data['c_id'] = $row->h_id;
				$data['c_name'] = $row->name;
				$data['c_amount'] = $row->amount;
				$data['c_type'] = $row->dis_type;
			}
		} else {
			$data['c_availble'] = 0;
			$data['c_id'] = "";
			$data['c_name'] = "";
			$data['c_amount'] = "";
			$data['c_type'] = "";
		}


		
		$data['user_ip'] = $this->user_ip_address();
		$data['user_cur_date'] = $this->currentDate();


		$this->load->view('pages/inc/header', $data);
		$this->load->view('pages/cart/checkout');
		$this->load->view('pages/inc/footer');	
	}


	function getName($n) { 
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
	    $randomString = ''; 
	  
	    for ($i = 0; $i < $n; $i++) { 
	        $index = rand(0, strlen($characters) - 1); 
	        $randomString .= $characters[$index]; 
	    } 
	  
	    return $randomString; 
	}

	public function sendsms($number, $message){
		echo $url="http://justgosms.com/http-api.php?username=rahul19trans&password=r123456&senderid=FOCEAN&route=6&number=".urlencode($number)."&message=".urlencode($message);
		$aa=file_get_contents($url);
	}

	public function order_placed_final(){
		$post = $this->input->post();
		
		$n=4;
		//$order_id = $this->getName($n).''.time();
		$order_id = $post['txnid'];

		

		foreach ($post['prod_id'] as $row) {
			$dataOrder = array(
				'order_id' => $order_id,
				'prod_id' => $row,
				'user_id' => $this->session->userdata('end_user_id'),
				'country' => $post['country'],
				'address' => $post['address'],
				'payment_desc' => $post['payment_desc'],
				'sub_total' => $post['subtotal'],
				'discount' => $post['discount'],
				'total_price' => $post['total'],
				'prod_price' => $post['prod_price'][$row],
				'prod_qty' => $post['prod_qty'][$row],
				'prod_color' => $post['prod_color'][$row],
				'prod_size' => $post['prod_size'][$row],
				'status' => 0,
				'order_type' => $post['payment_method'],
				'order_date' => $this->currentDate(),
				'user_ip' => $this->user_ip_address()
			);
			$sqlchk = $this->db->query("SELECT id FROM `tbl_prod_order` WHERE `order_id` = '".$order_id."'");
			if($sqlchk->num_rows() > 0){
				$this->home_model->update1('tbl_prod_order', $dataOrder, 'order_id', $order_id);
			} else {
				$this->home_model->insert('tbl_prod_order', $dataOrder);
				$this->db->delete('tbl_prod_cart', array('prod_id' => $row));
			}
			
				
		}

		
		// Update Coupon History
		$dataCpn = array(
			'status' => '2',
			'order_id' => $order_id
		);
		$this->home_model->update('tbl_coupon_history', $dataCpn, $post['coupon_id']);
		$dataCpn1 = array(
			'status' => '2'
		);
		$this->home_model->update1('tbl_coupon_history', $dataCpn1, 'user_ip', $this->user_ip_address());


	}




	public function thankyou(){
	    
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

		$data['meta_title'] = "Thank You";
		$data['meta_keyword'] = "";
		$data['meta_description'] = "";
		$data['page_image'] = "";
		$data['page_title'] = "Thank you";

		$data['trending'] = $this->home_model->get_where('tbl_news', 'trending', '1');
		$data['category'] = $this->home_model->get_where('tbl_category_prod', 'status', '1');
		$data['cart_count'] = $this->home_model->get_where_count('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['cart_prod'] = $this->home_model->get_where('tbl_prod_cart', 'user_ip', $this->user_ip_address());
		$data['wishlist_count'] = $this->home_model->get_where_count('tbl_prod_whishlist', 'user_ip', $this->user_ip_address());
		


	    
	    if($this->input->get('payment_status') == 'Failed'){
			$this->load->view('pages/inc/header', $data);
	        $this->load->view('pages/thankyouerror');
	        $this->load->view('pages/inc/footer');
		} else {
			// Payment Success
			require_once(APPPATH."views/instamojo.php");

			$api = new Instamojo\Instamojo('test_37c9d16f988ac936a0ebafaff1d', 'test_75f95496dfd8cb7a50b35e836f1','https://test.instamojo.com/api/1.1/');

			$payid = $this->input->get("payment_request_id");

			try {
			    $response = $api->paymentRequestStatus($payid);
			}
			catch (Exception $e) {
			    //print('Error: ' . $e->getMessage());
			}
			// Update Order table if online payment successs---

			$order_id = $response['buyer_name'];

			$order = $this->home_model->get_where_limit_order('tbl_prod_order', 'order_id', $order_id, '0', '1', 'id');
			foreach ($order as $row2) {
				$o_id = $row2->id;
			}

			$dataUpd = array(
				'status' => '1',
				'payment_id' => $payid
			);
			$this->home_model->update('tbl_prod_order', $dataUpd, $o_id);

			// Send SMS FOR ORDER PRODUCTS
			$message = "Your order has been Successfully Placed. Your Order Id is-".$order_id;
			$this->sendsms($post['phone'], $message);

			// Payment Success
			$this->load->view('pages/inc/header', $data);
	        $this->load->view('pages/thankyou');
	        $this->load->view('pagesinc/footer');
		}

	}

	public function applyCoupon(){
		$coupon = $this->input->post('coupon');

		$date1 = date('Y-m-d');

		$sql = "SELECT * FROM tbl_coupon WHERE name = '".$coupon."' AND (s_date <= '".$date1."' AND e_date >= '".$date1."')";
		$coponn = $this->db->query($sql);
		if($coponn->num_rows() > 0){
			foreach($coponn->result() as $col){ 
				$coupon_id = $col->id;
			}
			if( $this->cart_model->find_val1('tbl_coupon_history', 'coupon_id', $coupon_id, 'user_ip', $this->user_ip_address(), 'status', '1')){
				$this->session->set_flashdata('success', 'You have already use this Coupon !!!');
			} else {
				$dataCpn1 = array(
					'status' => '2'
				);
				$this->home_model->update1('tbl_coupon_history', $dataCpn1, 'user_ip', $this->user_ip_address());
				$data = array(
					'coupon_id' => $coupon_id,
					'status' => '1',
					'user_ip' => $this->user_ip_address()
				);
				$this->cart_model->insert('tbl_coupon_history', $data);
				$this->session->set_flashdata('success', 'Coupon Apply Successfully !!!');
			}
		} else {
			$this->session->set_flashdata('error', 'Invalid Coupon !!!');
		}
		redirect(base_url('cart.html'));
	}


	//===============
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

	public function currentDate(){
    	date_default_timezone_set('Asia/Calcutta');
    	return $date=date("Y-m-d H:i:s");
    }

}


