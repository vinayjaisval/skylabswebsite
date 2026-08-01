<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
	}

	public function index(){

	}


	// ============ Setting Section ======

	public function setting(){
		$data['title'] = "Setting";
		$data['cur_page'] = 'setting';
		$data['cur_sub_page'] = '';

		$setting = $this->admin->fetch_data('tbl_settings');
		foreach ($setting as $row) {
			$data['logo'] = $row->logo;
			$data['favicon'] = $row->favicon;
			$data['footer_about'] = $row->footer_about;
			$data['footer_copyright'] = $row->footer_copyright;
			$data['contact_address'] = $row->contact_address;
			$data['contact_email'] = $row->contact_email;
			$data['contact_phone'] = $row->contact_phone;
			$data['contact_fax'] = $row->contact_fax;
			$data['contact_map_iframe'] = $row->contact_map_iframe;
			$data['receive_email'] = $row->receive_email;
			$data['sender_email'] = $row->sender_email;
			$data['receive_email_subject'] = $row->receive_email_subject	;
			$data['receive_email_thank_you_message'] = $row->receive_email_thank_you_message;
			$data['total_recent_news_footer'] = $row->total_recent_news_footer;
			$data['total_popular_news_footer'] = $row->total_popular_news_footer;
			$data['total_recent_news_sidebar'] = $row->total_recent_news_sidebar;
			$data['total_popular_news_sidebar'] = $row->total_popular_news_sidebar;
			$data['total_recent_news_home_page'] = $row->total_recent_news_home_page;
			$data['meta_title_home'] = $row->meta_title_home;
			$data['meta_keyword_home'] = $row->meta_keyword_home;
			$data['meta_description_home'] = $row->meta_description_home;
			$data['home_title_service'] = $row->home_title_service;
			$data['home_subtitle_service'] = $row->home_subtitle_service;
			$data['home_status_service'] = $row->home_status_service;
			$data['home_title_team_member'] = $row->home_title_team_member;
			$data['home_subtitle_team_member'] = $row->home_subtitle_team_member;
			$data['home_status_team_member'] = $row->home_status_team_member;

			$data['counter_1_title'] = $row->counter_1_title;
			$data['counter_1_value'] = $row->counter_1_value;
			$data['counter_2_title'] = $row->counter_2_title;
			$data['counter_2_value'] = $row->counter_2_value;
			$data['counter_3_title'] = $row->counter_3_title;
			$data['counter_3_value'] = $row->counter_3_value;
			$data['counter_4_title'] = $row->counter_4_title;
			$data['counter_4_value'] = $row->counter_4_value;
			$data['counter_status'] = $row->counter_status;

			$data['home_title_testimonial'] = $row->home_title_testimonial;
			$data['home_subtitle_testimonial'] = $row->home_subtitle_testimonial;
			$data['home_photo_testimonial'] = $row->home_photo_testimonial;
			$data['home_status_testimonial'] = $row->home_status_testimonial;
			$data['home_title_news'] = $row->home_title_news;
			$data['home_subtitle_news'] = $row->home_subtitle_news	;
			$data['home_status_news'] = $row->home_status_news;
			$data['home_title_partner'] = $row->home_title_partner;
			$data['home_subtitle_partner'] = $row->home_subtitle_partner	;
			$data['home_status_partner'] = $row->home_status_partner;
			$data['newsletter_title'] = $row->newsletter_title;
			$data['newsletter_text'] = $row->newsletter_text;
			$data['newsletter_photo'] = $row->newsletter_photo;
			$data['newsletter_status'] = $row->newsletter_status;
			$data['mod_rewrite'] = $row->mod_rewrite;
			$data['banner_search'] = $row->banner_search;
			$data['banner_category'] = $row->banner_category;
			$data['color'] = $row->color;
			$data['counter_photo'] = $row->counter_photo;
			$data['other1'] = $row->other1;
			$data['other2'] = $row->other2;
		}


		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/setting/setting');
		$this->load->view('admin/inc/footer');
	}

	public function logoUpdate(){
		$post = $this->input->post();
		if( $this->_do_upload('photo_logo')){
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
		$data = array(
			'logo' => $uploadImage1
		);
		$this->admin->update('tbl_settings', $data, 1);

		$this->session->set_flashdata('success','Logo Update successfully!!');
	    redirect(base_url('Master/setting/setting'));
	}


	public function faviconUpdate(){
		$post = $this->input->post();

		if( $this->_do_upload('photo_favicon')){
		    $fileName2 = $this->upload->data('file_name');
		    if( ! empty($fileName2)){

		    	// Remove Old Image if new one is updated
				$imageRemove1 = $this->input->post('oldFile1');
				$imageLink1=base_url("assets/admin/uploads/".$imageRemove1);
				$dd1 = substr($imageLink1, strlen(base_url()));
		        unlink($dd1);

		        $uploadImage2 = $fileName2;
		    } else {
		        $uploadImage2 = $this->input->post('oldFile1');
		    }
		} else{
			$uploadImage2 = $this->input->post('oldFile1');
		}
		$data = array(
			'favicon' => $uploadImage2
		);
		$this->admin->update('tbl_settings', $data, 1);

		$this->session->set_flashdata('success','Favicon Update successfully!!');
	    redirect(base_url('Master/setting/setting'));
	}

	public function generalContent(){
		$post = $this->input->post();
		$data = array(
			'footer_about' => $post['footer_about'],
			'footer_copyright' => $post['footer_copyright'],
			'contact_address' => $post['contact_address'],
			'contact_email' => $post['contact_email'],
			'contact_phone' => $post['contact_phone'],
			'contact_fax' => $post['contact_fax'],
			'contact_map_iframe' => $post['contact_map_iframe']
		);

		$this->admin->update('tbl_settings', $data, 1);
		$this->session->set_flashdata('success','General Content Update successfully!!');
	    redirect(base_url('Master/setting/setting'));

	}

	public function emailSettingUpdate(){
		$post = $this->input->post();

		$data = array(
			'receive_email' => $post['receive_email'],
			'sender_email' => $post['sender_email'],
			'receive_email_subject' => $post['receive_email_subject'],
			'receive_email_thank_you_message' => $post['receive_email_thank_you_message']
		);

		$this->admin->update('tbl_settings', $data, 1);
		$this->session->set_flashdata('success','Email Setting Update successfully!!');
	    redirect(base_url('Master/setting/setting'));
	}

	
	public function metaSectionHome(){
		$post = $this->input->post();
		$data = array(
			'meta_title_home' => $post['meta_title_home'],
			'meta_keyword_home' => $post['meta_keyword_home'],
			'meta_description_home' => $post['meta_description_home']
		);

		$this->admin->update('tbl_settings', $data, 1);
		$this->session->set_flashdata('success','Meta Section Update successfully!!');
	    redirect(base_url('Master/setting/setting'));
	}

	

	

	

	public function bannerUpdate1(){
		$post = $this->input->post();		
		
		if( $this->_do_upload('photo1')){
		    $fileName2 = $this->upload->data('file_name');
		    if( ! empty($fileName2)){

		    	// Remove Old Image if new one is updated
				$imageRemove1 = $this->input->post('oldFile5');
				$imageLink1=base_url("assets/admin/uploads/".$imageRemove1);
				$dd1 = substr($imageLink1, strlen(base_url()));
		        unlink($dd1);

		        $uploadImage2 = $fileName2;
		    } else {
		        $uploadImage2 = $this->input->post('oldFile5');
		    }
		} else{
			$uploadImage2 = $this->input->post('oldFile5');
		}



		$data = array(
			'banner_search' => $uploadImage2
		);

		$this->admin->update('tbl_settings', $data, 1);
		$this->session->set_flashdata('success','Search Banner Update successfully!!');
	    redirect(base_url('Master/setting/setting'));
	}

	public function bannerUpdate2(){
		$post = $this->input->post();		
		
		if( $this->_do_upload('photo2')){
		    $fileName2 = $this->upload->data('file_name');
		    if( ! empty($fileName2)){

		    	// Remove Old Image if new one is updated
				$imageRemove1 = $this->input->post('oldFile6');
				$imageLink1=base_url("assets/admin/uploads/".$imageRemove1);
				$dd1 = substr($imageLink1, strlen(base_url()));
		        unlink($dd1);

		        $uploadImage2 = $fileName2;
		    } else {
		        $uploadImage2 = $this->input->post('oldFile6');
		    }
		} else{
			$uploadImage2 = $this->input->post('oldFile6');
		}



		$data = array(
			'banner_category' => $uploadImage2
		);

		$this->admin->update('tbl_settings', $data, 1);
		$this->session->set_flashdata('success','Banner Category Update successfully!!');
	    redirect(base_url('Master/setting/setting'));
	}

	public function other2_update(){
		$post = $this->input->post();


		if( $this->_do_upload('home_3')){
		    $fileName1 = $this->upload->data('file_name');
		    if( ! empty($fileName1)){
		        $uploadImage1 = $fileName1;
		    } else {
		        $uploadImage1 = $this->input->post('home_3_old');
		    }
		} else{
			$uploadImage1 = $this->input->post('home_3_old');
		}


		if( $this->_do_upload('home_6')){
		    $fileName2 = $this->upload->data('file_name');
		    if( ! empty($fileName2)){
		        $uploadImage2 = $fileName2;
		    } else {
		        $uploadImage2 = $this->input->post('home_6_old');
		    }
		} else{
			$uploadImage2 = $this->input->post('home_6_old');
		}


		if( $this->_do_upload('home_9')){
		    $fileName3 = $this->upload->data('file_name');
		    if( ! empty($fileName3)){
		        $uploadImage3 = $fileName3;
		    } else {
		        $uploadImage3 = $this->input->post('home_9_old');
		    }
		} else{
			$uploadImage3 = $this->input->post('home_9_old');
		}

		if( $this->_do_upload('home_12')){
		    $fileName4 = $this->upload->data('file_name');
		    if( ! empty($fileName4)){
		        $uploadImage4 = $fileName4;
		    } else {
		        $uploadImage4 = $this->input->post('home_12_old');
		    }
		} else{
			$uploadImage4 = $this->input->post('home_12_old');
		}


		if( $this->_do_upload('home_20')){
		    $fileName5 = $this->upload->data('file_name');
		    if( ! empty($fileName5)){
		        $uploadImage5 = $fileName5;
		    } else {
		        $uploadImage5 = $this->input->post('home_20_old');
		    }
		} else{
			$uploadImage5 = $this->input->post('home_20_old');
		}

		if( $this->_do_upload('home_36')){
		    $fileName6 = $this->upload->data('file_name');
		    if( ! empty($fileName6)){
		        $uploadImage6 = $fileName6;
		    } else {
		        $uploadImage6 = $this->input->post('home_36_old');
		    }
		} else{
			$uploadImage6 = $this->input->post('home_36_old');
		}

		

		$data = array(
			'home_1' => $post['home_1'],
			'home_2' => $post['home_2'],
			'home_3' => $uploadImage1,
			'home_4' => $post['home_4'],
			'home_5' => $post['home_5'],
			'home_6' => $uploadImage2,
			'home_7' => $post['home_7'],
			'home_8' => $post['home_8'],
			'home_9' => $uploadImage3,
			'home_10' => $post['home_10'],
			'home_11' => $post['home_11'],
			'home_12' => $uploadImage4,
			'home_13' => $post['home_13'],
			'home_14' => $post['home_14'],
			'home_15' => $post['home_15'],
			'home_16' => $post['home_16'],
			'home_17' => $post['home_17'],
			'home_18' => $post['home_18'],
			'home_19' => $post['home_19'],
			'home_20' => $uploadImage5,
			'home_21' => $post['home_21'],
			'home_22' => $post['home_22'],
			'home_23' => $post['home_23'],
			'home_24' => $post['home_24'],
			'home_25' => $post['home_25'],
			'home_26' => $post['home_26'],
			'home_27' => $post['home_27'],
			'home_28' => $post['home_28'],
			'home_29' => $post['home_29'],
			'home_30' => $post['home_30'],
			'home_31' => $post['home_31'],
			'home_32' => $post['home_32'],
			'home_33' => $post['home_33'],
			'home_34' => $post['home_34'],
			'home_35' => $post['home_35'],
			'home_36' => $uploadImage6,
			'home_37' => $post['home_37'],
			'home_38' => $post['home_38']

		);

		$this->admin->update('tbl_settings_home', $data, 1);
		$this->session->set_flashdata('success','Home Page Update successfully!!');
	    redirect(base_url('Master/setting/setting'));
	}

	public function other1_update(){
		$post = $this->input->post();


		if( $this->_do_upload('about2')){
		    $fileName1 = $this->upload->data('file_name');
		    if( ! empty($fileName1)){
		        $uploadImage1 = $fileName1;
		    } else {
		        $uploadImage1 = $this->input->post('about2_old');
		    }
		} else{
			$uploadImage1 = $this->input->post('about2_old');
		}


		if( $this->_do_upload('about5')){
		    $fileName2 = $this->upload->data('file_name');
		    if( ! empty($fileName2)){
		        $uploadImage2 = $fileName2;
		    } else {
		        $uploadImage2 = $this->input->post('about5_old');
		    }
		} else{
			$uploadImage2 = $this->input->post('about5_old');
		}


		if( $this->_do_upload('about8')){
		    $fileName3 = $this->upload->data('file_name');
		    if( ! empty($fileName3)){
		        $uploadImage3 = $fileName3;
		    } else {
		        $uploadImage3 = $this->input->post('about8_old');
		    }
		} else{
			$uploadImage3 = $this->input->post('about8_old');
		}
		

		$data = array(
			'about1' => $post['about1'],
			'about2' => $uploadImage1,
			'about3' => $post['about3'],
			'about4' => $post['about4'],
			'about5' => $uploadImage2,
			'about6' => $post['about6'],
			'about7' => $post['about7'],
			'about8' => $uploadImage3,
			'about9' => $post['about9'],
			'about10' => $post['about10'],
			'about11' => $post['about11'],
			'about12' => $post['about12'],
			'about13' => $post['about13'],
			'about14' => $post['about14'],
			'about15' => $post['about15'],
			'about16' => $post['about16'],
			'about17' => $post['about17'],
			'about18' => $post['about18'],
			'about19' => $post['about19'],
			'about20' => $post['about20'],
			'about21' => $post['about21'],
			'about22' => $post['about22'],
			'about23' => $post['about23'],
			'about24' => $post['about24'],
			'about25' => $post['about25'],
			'about26' => $post['about26'],
			'about27' => $post['about27'],
			'about28' => $post['about28'],
			'about29' => $post['about29'],
			'about30' => $post['about30'],
			'about31' => $post['about31'],
			'about32' => $post['about32'],
			'about33' => $post['about33'],
			'about34' => $post['about34'],
			'about35' => $post['about35']
		);

		$this->admin->update('tbl_settings_about', $data, 1);
		$this->session->set_flashdata('success','About Page Update successfully!!');
	    redirect(base_url('Master/setting/setting'));
	}


	public function other3_update(){
		$post = $this->input->post();

		$data = array(
			'contact1' => $post['contact1'],
			'contact2' => $post['contact2'],
			'contact3' => $post['contact3'],
			'contact4' => $post['contact4'],
			'contact5' => $post['contact5'],
			'contact6' => $post['contact6'],
			'contact7' => $post['contact7'],
			'contact8' => $post['contact8'],
			'contact9' => $post['contact9'],
			'contact10' => $post['contact10'],
			'contact11' => $post['contact11'],
			'contact12' => $post['contact12'],
			'contact13' => $post['contact13'],
			'contact14' => $post['contact14'],
			'contact15' => $post['contact15'],
			'contact16' => $post['contact16'],
			'contact10_1' => $post['contact10_1'],
			'contact11_1' => $post['contact11_1'],
			'contact12_1' => $post['contact12_1'],
			'contact13_1' => $post['contact13_1'],
			'contact14_1' => $post['contact14_1'],
			'contact15_1' => $post['contact15_1'],
			'contact16_1' => $post['contact16_1'],
			'contact17' => $post['contact17'],
			'contact18' => $post['contact18'],
			'contact19' => $post['contact19'],
			'contact20' => $post['contact20'],
			'contact21' => $post['contact21'],
			'contact22' => $post['contact22'],
			'contact23' => $post['contact23'],
			'contact24' => $post['contact24'],
			'contact25' => $post['contact25'],
			'contact26' => $post['contact26'],
			'contact27' => $post['contact27'],
			'contact28' => $post['contact28'],
			'contact29' => $post['contact29'],
			'contact30' => $post['contact30']
		);

		$this->admin->update('tbl_settings_contact', $data, 1);
		$this->session->set_flashdata('success','Contact Page Update successfully!!');
	    redirect(base_url('Master/setting/setting'));
	}

	//===============================

	public function _do_upload($filename){
		$config['upload_path']          = './assets/admin/uploads/';
		$config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload($filename)){
            return false;
        } else {
            $data = array('upload_data' => $this->upload->data());
            return $post[$filename] = $data['upload_data']['file_name'];
        }
    }

	
}
