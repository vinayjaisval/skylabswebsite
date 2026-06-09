<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		date_default_timezone_set('Asia/Calcutta');
		$this->load->library('email');
	}

	public function index(){

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
		$this->load->view('pages/inc/slider');
		$this->load->view('pages/home');
		$this->load->view('pages/inc/footer');
	}


// 	public function contactSubmit(){
// 		$post = $this->input->post();
// 		$setting = $this->home_model->fetch_data('tbl_settings', 'id');
// 		foreach ($setting as $row) {
// 			$email_to = $row->receive_email;
// 			$email_from = $row->sender_email;
// 			$subject_to = $row->receive_email_subject;
// 			$thanks_msg_to = $row->receive_email_thank_you_message;
// 		}
		

// 		if( !empty($post['name']) && !empty($post['email']) && !empty($post['phone'])){
// 			// Mail Send 
//             $config = array (
//                 'mailtype' => 'html',
//                 'charset'  => 'utf-8',
//                 'priority' => '1'
//             );
            
//             $bodyMsg = "<p> 
//             Name : ".$post['name']." <br>
//             Email : ".$post['email']." <br>
//             Phone : ".$post['phone']." <br>
//             Message : ".$post['message']."</p>";
                                
//             $dataMail = array(
//                 'topMsg'    => 'Hi', 
//                 'bodyMsg'   => $bodyMsg, 
//                 'thanksMsg' => 'Best regards,', 
//                 'delimeter' => $subject_to
//             );
                
//             $this->email->initialize($config);
//             $this->email->from($email_from, $subject_to);
//             $this->email->to($email_to);
//             $this->email->subject($subject_to);
//             $message = $this->load->view('pages/mailHtml', $dataMail, TRUE);
//             $this->email->message($bodyMsg);
//             $sendMail = $this->email->send();  

// 			$this->session->set_flashdata('success', $thanks_msg_to);
		   
// 			$referred_from = $this->session->userdata('referred_from'); 
// 			redirect($referred_from, 'refresh');
// 		} else {
// 			$this->session->set_flashdata('error','Please Fill Correct Details!!' );
// 		   	$referred_from = $this->session->userdata('referred_from'); 
// 			redirect($referred_from, 'refresh');
// 		}
// 	}
     public function contactSubmit(){
		$post = $this->input->post();
		$setting = $this->home_model->fetch_data('tbl_settings', 'id');
		foreach ($setting as $row) {
			$email_to = $row->receive_email;
			$email_from = $row->sender_email;
			$subject_to = $row->receive_email_subject;
			$thanks_msg_to = $row->receive_email_thank_you_message;
		}
		

		if( !empty($post['name']) && !empty($post['email']) && !empty($post['phone'])){   
            $bodyMsg = "<p> 
            Name : ".$post['name']." <br>
            Email : ".$post['email']." <br>
            Phone : ".$post['phone']." <br>
            Message : ".$post['message']."</p>";
                                
            $dataMail = array(
                'topMsg'    => 'Hi', 
                'bodyMsg'   => $bodyMsg, 
                'thanksMsg' => 'Best regards,', 
                'delimeter' => $subject_to
            );
			$this->load->library('email');
			$this->load->helper('url');
			$this->load->helper('form');
			$config = Array(
				'protocol'=>'smtp',
				'smtp_host'=>'mail27.skylabstech.com',
				'smtp_port'=>'587',
				// 'smtp_user'=>'skylabs.solutions.pvt.ltd@gmail.com',
				// 'smtp_pass'=>'uing zwjj oafk jphv',
				'smtp_user'=>'enquiry@skylabstech.com',
				'smtp_pass'=>'Tech123!@#',
				'smtp_crypto' => 'tls',
				'mailtype'=>'html',
				'smtp_timeout' => '4', 
				'charset' => 'iso-8859-1',
				'wordwrap' => 'true',
				'newline'=>"\r\n"
			);
			// $this->load->library('email','$config');
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");
			// $this->email->from('kamalsainiofficals@gmail.com', $subject_to);
            // $this->email->to($email_to);
            // $this->email->subject($subject_to);
            // $message = $this->load->view('pages/mailHtml', $dataMail, TRUE);
            // $this->email->message($bodyMsg);
			$this->email->from('enquiry@skylabstech.com',$subject_to);
			$this->email->to('info@skylabstech.com');
			$this->email->subject($subject_to);
			$this->email->message($bodyMsg);
			if($this->email->send())
			{
				// echo "your mail send";
			}else
			{
			    	// 	$this->session->set_flashdata('success', $thanks_msg_to);		
			 //   print_r('success');die;
				show_error($this->email->print_debugger());
			}   
            // $this->email->initialize($config);
            // $this->email->from($email_from, $subject_to);
            // $this->email->to($email_to);
            // $this->email->subject($subject_to);
            // $message = $this->load->view('pages/mailHtml', $dataMail, TRUE);
            // $this->email->message($bodyMsg);
            // $sendMail = $this->email->send();  

			$this->session->set_flashdata('success', $thanks_msg_to);
		   
			$referred_from = $this->session->userdata('referred_from'); 
			redirect($referred_from, 'refresh');
		} else {
			$this->session->set_flashdata('error','Please Fill Correct Details!!' );
		   	$referred_from = $this->session->userdata('referred_from'); 
			redirect($referred_from, 'refresh');
		}
	}

      public function career()
	{
	    
	    error_reporting(0);
		$post = $this->input->post();
	    
		if(!empty($_FILES['cv_upload']['name']))
		{	
			$imageTmpName = $_FILES['cv_upload']['tmp_name'];
			$imageName = rand(0,1000000).$_FILES['cv_upload']['name'];
			$uploadFolder = './assets/assets/resume/';	
			$result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);
    		
			
			// echo './assets/assets/resume/'.$imageName;
			// die;
		}
		if( !empty($post['name']) && !empty($post['email']) && !empty($post['phone'])){   
            $bodyMsg = "<p> 
            Name :".$post['name']." <br>
            Email :".$post['email']." <br>
            Phone :".$post['phone']." <br>
			Experience :".$post['experience']."<br>
			post_applied:".$post['post_applied']."<br>
            Message : ".$post['message']."</p>";
                                
            $dataMail = array(
                'topMsg'    => 'Hi', 
                'bodyMsg'   => $bodyMsg, 
                'thanksMsg' => 'Best regards,', 
                'delimeter' => $subject_to
            );
			$this->load->library('email');
			$this->load->helper('url');
			$this->load->helper('form');
			$config = Array(
				'protocol'=>'smtp',
				'smtp_host'=>'smtp.gmail.com',
				'smtp_port'=>'587',
				'smtp_user'=>'kamalsainiofficals@gmail.com',
				'smtp_pass'=>'ukmu jcuu thmr evwo',
				'smtp_crypto' => 'tls',
				'mailtype'=>'html',
				'smtp_timeout' => '4', 
				'charset' => 'iso-8859-1',
				'wordwrap' => 'true',
				'newline'=>"\r\n"
			);
            

   
			// $this->load->library('email','$config');
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");
			$this->email->from('kamalsainiofficals@gmail.com',"test");
			$this->email->to('kamalsainiofficals@gmail.com');
			$this->email->attach('./assets/assets/resume/'.$imageName);
			$this->email->subject('resume');
			$this->email->message($bodyMsg);
			if($this->email->send())
			{
				$this->session->set_flashdata('msg','Resume Send Successfully');

			}else
			{
				show_error($this->email->print_debugger());
			}   
			$this->session->set_flashdata('success', $thanks_msg_to);
		  // error_reporting(0);
			$referred_from = $this->session->userdata('referred_from'); 
			redirect($referred_from, 'refresh');
		} else {
			$this->session->set_flashdata('error','Please Fill Correct Details!!' );
		   	$referred_from = $this->session->userdata('referred_from'); 
			redirect($referred_from, 'refresh');
		}
	}
	public function saveNewsLetter(){
		$post = $this->input->post();
		//print_r($post); 
		$setting = $this->home_model->fetch_data('tbl_settings', 'id');
		foreach ($setting as $row) {
			$email_to = $row->receive_email;
			$email_from = $row->sender_email;
			$subject_to = $row->receive_email_subject;
			$thanks_msg_to = $row->receive_email_thank_you_message;
		}
		

		if( !empty($post['email_id']) ){
			$dataN = array(
				'subs_email' => $post['email_id'],
				'subs_active' => 1
			);
			$this->home_model->insert('tbl_subscriber', $dataN);

			// Mail Send 
            $config = array (
                'mailtype' => 'html',
                'charset'  => 'utf-8',
                'priority' => '1'
            );
            
            $bodyMsg = "<p> 
            Email : ".$post['email_id']."</p>";
                                
            $dataMail = array(
                'topMsg'    => 'Hi', 
                'bodyMsg'   => $bodyMsg, 
                'thanksMsg' => 'Best regards,', 
                'delimeter' => $subject_to
            );
                
            $this->email->initialize($config);
            $this->email->from($email_from, $subject_to);
            $this->email->to($email_to);
            $this->email->subject($subject_to);
            $message = $this->load->view('pages/mailHtml', $dataMail, TRUE);
            $this->email->message($bodyMsg);
            $sendMail = $this->email->send();  

			$this->session->set_flashdata('success', $thanks_msg_to);
			$referred_from = $this->session->userdata('referred_from'); 
			redirect($referred_from, 'refresh');
		} else {
			$this->session->set_flashdata('error','Please Fill Correct Details!!' );
		   	$referred_from = $this->session->userdata('referred_from'); 
			redirect($referred_from, 'refresh');
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

	public function currentDate(){
    	date_default_timezone_set('Asia/Calcutta');
    	return $date=date("Y-m-d H:i:s");
    }




}
