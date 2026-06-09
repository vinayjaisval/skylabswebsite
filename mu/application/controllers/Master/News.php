<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('userid')){
          	return  redirect(base_url('Administrator'));
        }
		$this->load->model('admin');
	}

	public function index(){	}

	public function view(){

		$data['title'] = "News";
		$data['cur_page'] = 'news';
		$data['cur_sub_page'] = 'news';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/news/view');
		$this->load->view('admin/inc/footer');
	}

	public function add(){
		$data['title'] = "Add News";
		$data['cur_page'] = 'news';
		$data['cur_sub_page'] = 'news';

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/news/add');
		$this->load->view('admin/inc/footer');
	}

	

	public function addNews(){
		$post = $this->input->post();
		$name_file = $_FILES['photo']['name'];
		$banner_file = $_FILES['banner']['name'];

		if( empty($post['news_slug'])){
			$url_title = url_title($post['news_title'], "dash", TRUE);
		} else {
			$url_title = url_title($post['news_slug'], "dash", TRUE);
		}
		$uniqSlug = $this->check_unique('news_slug',$url_title,'tbl_news');

		if( !empty($post['news_title']) && !empty($post['news_content']) && !empty($post['news_content_short']) && !empty($post['news_date']) && !empty($post['category_id']) ){

			$Check = $this->admin->findValue($post['news_title'], 'news_title', 'tbl_news');
			if( !empty($Check)){
				$this->session->set_flashdata('error','Name Already Exists!!');
	    		redirect(base_url('Master/news/add'));
	    		die();
			}

			// Image Uploads
			$this->_do_upload('photo');
			$fileName1 = $this->upload->data('file_name');
			if( empty($name_file)){
				$fileName2 = '';
			} else{
				$fileName2 = $fileName1;
			}

			// Banner Uploads
			$this->_do_upload('banner');
			$fileName3 = $this->upload->data('file_name');
			if( empty($banner_file)){
				$fileName4 = '';
			} else{
				$fileName4 = $fileName3;
			}

			$data = array(
				'news_title' => $post['news_title'],
				'news_slug' => $uniqSlug,
				'news_content' => $post['news_content'],
				'news_content_short' => $post['news_content_short'],
				'news_date' => $post['news_date'],
				'category_id' => $post['category_id'],
				'sub_category_id' => $post['sub_cat_name'],
				'publisher' => $post['publisher'],
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description'],
				'photo' => $fileName2,
				'banner' => $fileName4,
				'tags' => $post['tags']
			);
			$this->admin->insert('tbl_news', $data);
			$this->session->set_flashdata('success','News Add Successfully!!');
		} else {
			$this->session->set_flashdata('error','Fill Required Fiels!!');
		}
		redirect(base_url('Master/news/add'));
	}

	public function edit($id){
		$data['title'] = "Edit News";
		$data['cur_page'] = 'news';
		$data['cur_sub_page'] = 'news';
		$data['id'] = $id;

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/news/edit');
		$this->load->view('admin/inc/footer');
	}

	

	public function updateNews(){
		$post = $this->input->post();

		if( empty($post['news_slug'])){
			$url_title1 = url_title($post['news_title'], "dash", TRUE);
		} else {
			$url_title1 = url_title($post['news_slug'], "dash", TRUE);
		}
		$uniqSlug1 = $this->check_unique1('news_slug',$url_title1,'tbl_news', $post['id'], 'news_id'); 

		if( !empty($post['news_title']) && !empty($post['news_content']) && !empty($post['news_content_short']) && !empty($post['news_date']) && !empty($post['category_id']) ){


			$pageName = $this->admin->findValue_isnot($post['news_title'], 'news_title', $post['id'], 'news_id', 'tbl_news');
			if( !empty($pageName)){
				$this->session->set_flashdata('error','Name <b>('.$post["news_title"].')</b> Already Exists!!');
	    		redirect(base_url('Master/news/edit/'.$post['id']));
	    		die();
			}

			// Update Image
		    if( $this->_do_upload('photo')){
			    $fileName1 = $this->upload->data('file_name');
			    if( ! empty($fileName1)){
			    	// Remove Old Image if new one is updated
					$imageRemove = $this->input->post('previous_photo');
					$imageLink=base_url("assets/admin/uploads/".$imageRemove);
					$dd = substr($imageLink, strlen(base_url()));
			        unlink($dd);

			        $uploadImage1 = $fileName1;
			    } else {
			        $uploadImage1 = $this->input->post('previous_photo');
			    }
			} else{
				$uploadImage1 = $this->input->post('previous_photo');
			}

			// Update Banner
		    if( $this->_do_upload('banner')){
			    $fileName2 = $this->upload->data('file_name');
			    if( ! empty($fileName2)){
			    	// Remove Old Image if new one is updated
					$imageRemove = $this->input->post('previous_banner');
					$imageLink=base_url("assets/admin/uploads/".$imageRemove);
					$dd = substr($imageLink, strlen(base_url()));
			        unlink($dd);

			        $uploadImage2 = $fileName2;
			    } else {
			        $uploadImage2 = $this->input->post('previous_banner');
			    }
			} else{
				$uploadImage2 = $this->input->post('previous_banner');
			}
			
			$data = array(
				'news_title' => $post['news_title'],
				'news_slug' => $uniqSlug1,
				'news_content' => $post['news_content'],
				'news_content_short' => $post['news_content_short'],
				'news_date' => $post['news_date'],
				'category_id' => $post['category_id'],
				'sub_category_id' => $post['sub_cat_name'],
				'publisher' => $post['publisher'],
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description'],
				'photo' => $uploadImage1,
				'banner' => $uploadImage2,
				'tags' => $post['tags']
			);
			$this->admin->update1('tbl_news', $data, $post['id'], 'news_id');
			$this->session->set_flashdata('success','News Update Successfully!!');
			redirect(base_url('Master/news/edit/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Fields!!');
			redirect(base_url('Master/news/edit/'.$post['id']));
		}

	}

	

	public function delete($id){
		
		$this->db->delete('tbl_news', array('news_id' => $id));
		$this->session->set_flashdata('success','News Delete Successfully!!');
	    redirect(base_url('Master/news/view'));
	}

	// comment

	public function comment(){
		$data['title'] = "News Comments";
		$data['cur_page'] = 'news';
		$data['cur_sub_page'] = 'comment';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/news/comment');
		$this->load->view('admin/inc/footer');	
	}

	public function inActiveComment($id){
		$data = array(
			'active' => '0'
		);
		$this->admin->update1('tbl_comments', $data, $id, 'id');
		$this->session->set_flashdata('success','Comments In Active Successfully!!');
		redirect(base_url('Master/news/comment'));
	}
	public function activeComment($id){
		$data = array(
			'active' => '1'
		);
		$this->admin->update1('tbl_comments', $data, $id, 'id');
		$this->session->set_flashdata('success','Comments Active Successfully!!');
		redirect(base_url('Master/news/comment'));
	}


	// News Category
	public function category(){
		$data['title'] = "News Category";
		$data['cur_page'] = 'news';
		$data['cur_sub_page'] = 'news_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/news/category');
		$this->load->view('admin/inc/footer');
	}

	public function add_category(){
		$data['title'] = "Add News Category";
		$data['cur_page'] = 'news';
		$data['cur_sub_page'] = 'news_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/news/add_category');
		$this->load->view('admin/inc/footer');
	}

	public function addCatValues(){
		$post = $this->input->post();

		if( empty($post['category_slug'])){
			$url_title = url_title($post['category_name'], "dash", TRUE);
		} else {
			$url_title = url_title($post['category_slug'], "dash", TRUE);
		}

		$uniqSlug = $this->check_unique('category_slug',$url_title,'tbl_category');

		$abc = "{$uniqSlug}";

		if( !empty($post['category_name'])){
			$Check = $this->admin->findValue($post['category_name'], 'category_name', 'tbl_category');
			if( !empty($Check)){
				$this->session->set_flashdata('error','Name Already Exists!!');
	    		redirect(base_url('Master/news/add_category'));
	    		die();
			}

			$data = array(
				'category_name' => $post['category_name'],
				'category_slug' => $uniqSlug,
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description']
			);

			$this->admin->insert('tbl_category', $data);
			$this->session->set_flashdata('success','News Category Add Successfully!!');
		    redirect(base_url('Master/news/add_category'));

		}else{
			$this->session->set_flashdata('error','Please Fill Category Name!!');
			redirect(base_url('Master/news/add_category'));
		}
	}

	public function edit_category($id){
		$data['id'] = $id;
		$data['title'] = "Edit News Category";
		$data['cur_page'] = 'news';
		$data['cur_sub_page'] = 'news_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/news/edit_category');
		$this->load->view('admin/inc/footer');
	}

	public function updateCategory(){
		$post = $this->input->post();

		if( empty($post['category_slug'])){
			$url_title1 = url_title($post['category_name'], "dash", TRUE);
		} else {
			$url_title1 = url_title($post['category_slug'], "dash", TRUE);
		}
		$uniqSlug1 = $this->check_unique1('category_slug',$url_title1,'tbl_category', $post['id'], 'category_id');

		if(  !empty($post['category_name']) ){
			$pageName = $this->admin->findValue_isnot($post['category_name'], 'category_name', $post['id'], 'category_id', 'tbl_category');
			if( !empty($pageName)){
				$this->session->set_flashdata('error','Name <b>('.$post["category_name"].')</b> Already Exists!!');
	    		redirect(base_url('Master/news/edit_category/'.$post['id']));
	    		die();
			}

			$data = array(
				'category_name' => $post['category_name'],
				'category_slug' => $uniqSlug1,
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description']
			);
			$this->admin->update1('tbl_category', $data, $post['id'], 'category_id');
			$this->session->set_flashdata('success','News Categorys Update Successfully!!');
			redirect(base_url('Master/news/edit_category/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Fields!!');
			redirect(base_url('Master/news/edit_category/'.$post['id']));
		}	
	}


	public function delete_category($id){
		
		$this->db->delete('tbl_category', array('category_id' => $id));
		$this->db->delete('tbl_sub_category', array('category_id' => $id));
		$this->db->delete('tbl_news', array('category_id' => $id));
		$this->session->set_flashdata('success','News Category, News Sub Category and News in this Catehory Delete Successfully!!');
	    redirect(base_url('Master/news/category'));
	}

	// News Sub Category
	public function sub_category(){
		$data['title'] = "News Sub Category";
		$data['cur_page'] = 'news';
		$data['cur_sub_page'] = 'news_sub_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/news/sub_category');
		$this->load->view('admin/inc/footer');
	}

	public function add_sub_category(){
		$data['title'] = "Add News Sub Category";
		$data['cur_page'] = 'news';
		$data['cur_sub_page'] = 'news_sub_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/news/add_sub_category');
		$this->load->view('admin/inc/footer');
	}

	public function addSubCatValues(){
		$post = $this->input->post();

		if( empty($post['category_slug'])){
			$url_title = url_title($post['category_name'], "dash", TRUE);
		} else {
			$url_title = url_title($post['category_slug'], "dash", TRUE);
		}

		$uniqSlug = $this->check_unique('slug',$url_title,'tbl_sub_category');

		if( !empty($post['category_name']) && !empty($post['category_id'])){
			$Check = $this->admin->findValue($post['category_name'], 'name', 'tbl_sub_category');
			if( !empty($Check)){
				$this->session->set_flashdata('error','Name Already Exists!!');
	    		redirect(base_url('Master/news/add_sub_category'));
	    		die();
			}

			$data = array(
				'name' => $post['category_name'],
				'slug' => $uniqSlug,
				'category_id' => $post['category_id'],
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description']
			);

			$this->admin->insert('tbl_sub_category', $data);
			$this->session->set_flashdata('success','News Sub Category Add Successfully!!');
		    redirect(base_url('Master/news/add_sub_category'));

		}else{
			$this->session->set_flashdata('error','Please Fill Required Fields!!');
			redirect(base_url('Master/news/add_sub_category'));
		}
	}

	public function edit_sub_category($id){
		$data['id'] = $id;
		$data['title'] = "Edit News Sub Category";
		$data['cur_page'] = 'news';
		$data['cur_sub_page'] = 'news_sub_cat';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/news/edit_sub_category');
		$this->load->view('admin/inc/footer');
	}

	public function updateSubCategory(){
		$post = $this->input->post();

		if( empty($post['category_slug'])){
			$url_title1 = url_title($post['category_name'], "dash", TRUE);
		} else {
			$url_title1 = url_title($post['category_slug'], "dash", TRUE);
		}
		$uniqSlug1 = $this->check_unique1('slug',$url_title1,'tbl_sub_category', $post['id'], 'id');

		if(  !empty($post['category_name']) && !empty($post['category_id']) ){
			$pageName = $this->admin->findValue_isnot($post['category_name'], 'name', $post['id'], 'id', 'tbl_sub_category');
			if( !empty($pageName)){
				$this->session->set_flashdata('error','Name <b>('.$post["category_name"].')</b> Already Exists!!');
	    		redirect(base_url('Master/news/edit_sub_category/'.$post['id']));
	    		die();
			}

			$data = array(
				'name' => $post['category_name'],
				'slug' => $uniqSlug1,
				'category_id' => $post['category_id'],
				'meta_title' => $post['meta_title'],
				'meta_keyword' => $post['meta_keyword'],
				'meta_description' => $post['meta_description']
			);
			$this->admin->update1('tbl_sub_category', $data, $post['id'], 'id');
			$this->session->set_flashdata('success','News Sub Category Update Successfully!!');
			redirect(base_url('Master/news/edit_sub_category/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill Required Fields!!');
			redirect(base_url('Master/news/edit_sub_category/'.$post['id']));
		}
	}

	public function delete_sub_category($id){

		$this->db->delete('tbl_sub_category', array('id' => $id));
		$this->db->delete('tbl_news', array('sub_category_id' => $id));
		$this->session->set_flashdata('success','News Sub Category and News in this Catehory Delete Successfully!!');
	    redirect(base_url('Master/news/sub_category'));
	}


	// Live News --> 
	public function live_news(){

		$data['title'] = "Live News";
		$data['cur_page'] = 'news';
		$data['cur_sub_page'] = 'live_news';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/news/live_news');
		$this->load->view('admin/inc/footer');
	}

	public function add_live_news(){
		$data['title'] = "Add Live Video";
		$data['cur_page'] = 'news';
		$data['cur_sub_page'] = 'live_news';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/news/add_live_video');
		$this->load->view('admin/inc/footer');
	}

	

	public function addLiveVideo(){
		$post = $this->input->post();

		if( !empty($post['video_title']) && !empty($post['video_iframe']) && !empty($post['category_id']) ){

			$data = array(
				'video_title' => $post['video_title'],
				'video_iframe' => $post['video_iframe'],
				'category_id' => $post['category_id']
			);
			$this->admin->insert('tbl_live_video', $data);
			$this->session->set_flashdata('success','Video Add Successfully!!');
		    redirect(base_url('Master/news/add_live_news'));
		} else {
			$this->session->set_flashdata('error','All Fiels are Required!!');
		    redirect(base_url('Master/news/add_live_news'));
		}
	}

	public function edit_live_news($id){
		$data['id'] = $id;
		$data['title'] = "Edit Live Video";
		$data['cur_page'] = 'news';
		$data['cur_sub_page'] = 'live_news';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/news/edit_live_video');
		$this->load->view('admin/inc/footer');
	}

	

	public function updateLiveVideo(){
		$post = $this->input->post();

		if( !empty($post['video_title']) && !empty($post['video_iframe']) && !empty($post['category_id']) ){
			
			$data = array(
				'video_title' => $post['video_title'],
				'video_iframe' => $post['video_iframe'],
				'category_id' => $post['category_id']
			);
			$this->admin->update1('tbl_live_video', $data, $post['id'], 'video_id');
			$this->session->set_flashdata('success','Video Update Successfully!!');
			redirect(base_url('Master/news/edit_live_news/'.$post['id']));
		} else {
			$this->session->set_flashdata('error','Please Fill All Fields!!');
			redirect(base_url('Master/news/edit_live_news/'.$post['id']));
		}

	}

	

	public function delete_live_video($id){
		
		$this->db->delete('tbl_live_video', array('video_id' => $id));
		$this->session->set_flashdata('success','Live Video Delete Successfully!!');
	    redirect(base_url('Master/news/live_news'));
	}

	// Live News #END

	// Update Trending, Popular
	public function addPopular($id){
		$data = array(
			'popular' => '1'
		);
		$this->admin->update1('tbl_news', $data, $id, 'news_id');
		$this->session->set_flashdata('success','News Add in Popular Successfully!!');
		redirect(base_url('Master/news/view'));
	}

	public function addTrending($id){
		$data = array(
			'trending' => '1'
		);
		$this->admin->update1('tbl_news', $data, $id, 'news_id');
		$this->session->set_flashdata('success','News Add in Trending Successfully!!');
		redirect(base_url('Master/news/view'));
	}

	public function removePopular($id){
		$data = array(
			'popular' => '0'
		);
		$this->admin->update1('tbl_news', $data, $id, 'news_id');
		$this->session->set_flashdata('success','News Remove in Popular Successfully!!');
		redirect(base_url('Master/news/view'));
	}

	public function removeTrending($id){
		$data = array(
			'trending' => '0'
		);
		$this->admin->update1('tbl_news', $data, $id, 'news_id');
		$this->session->set_flashdata('success','News Remove in Trending Successfully!!');
		redirect(base_url('Master/news/view'));
	}


	// Update Trending Popular #END

	public function popular_news(){
		$data['title'] = "News";
		$data['cur_page'] = 'news';
		$data['cur_sub_page'] = 'popular';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/news/popular');
		$this->load->view('admin/inc/footer');
	}

	public function trending_news(){
		$data['title'] = "News";
		$data['cur_page'] = 'news';
		$data['cur_sub_page'] = 'trending';
		

		$this->load->view('admin/inc/header', $data);
		$this->load->view('admin/pages/news/trending');
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
            return $this->check_unique2($key, $value1, $table, $id, $key2);
        } else {
            return $value; 
        }
    }


    public function ajaxSubCat(){
		$categoryId = $this->input->post('categoryId');
		if(!empty($categoryId)){
			$sql = $this->db->query('select * from tbl_sub_category WHERE category_id = '.$categoryId.' order by id asc');
			$Subcat = $sql->result();
			echo "<option>Select Sub Category</option>";
			foreach ($Subcat as $sCat) {
				echo "<option value='". $sCat->id ."'>" .$sCat->name."</option>";
			}
		}
	}

	


}
