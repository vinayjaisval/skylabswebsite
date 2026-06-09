<?php

	/**
	 * 
	 */
	class Home_model extends CI_Model{
		function __construct(){	}		

		public function fetch_data($table, $key){
			$q = $this->db
				->SELECT('*')
				->FROM($table)
				->ORDER_BY($key, 'DESC')
				->get();
			return $q->result();
		}

		public function insert($table, $data){
			return $this->db->insert($table, $data);
		}

		public function get_where($table, $key, $url){
			$q = $this->db
				->SELECT('*')
				->FROM($table)
				->where($key, $url)
				->get();
			return $q->result();
		}

		public function get_where1($table, $key, $url, $key2, $url2){
			$q = $this->db
				->SELECT('*')
				->FROM($table)
				->where($key, $url)
				->where($key2, $url2)
				->get();
			return $q->result();
		}

		public function View($table, $key, $limit, $offset){
			$q = $this->db
				->SELECT('*')
				->FROM($table)
				->ORDER_BY($key, 'DESC')
				->LIMIT($offset, $limit)
				->get();
			return $q->result();
		}

		public function fetch_data_join($table1, $joinKey1, $key1, $table2, $joinKey2){
			$q = $this->db
	 			->SELECT('*')
	 			->FROM($table1)
	 			->join($table2, $table2.'.'.$joinKey2 .' = '.$table1 .'.'.$joinKey1, 'left')
	 			->order_by($table1.'.'.$key1, 'DESC')
	 			->get();
 			return $q->result();
		}


		public function view_limit($table, $key, $limit, $offset){
			$q = $this->db
	 			->SELECT('*')
	 			->FROM($table)
	 			->order_by($key, 'desc')
	 			->LIMIT($offset, $limit)
	 			->get();
	 		return $q->result();
		}

		public function fetch_random($table, $key, $limit, $offset){
			$q = $this->db
	 			->SELECT('*')
	 			->FROM($table)
	 			->order_by($key, 'RANDOM')
	 			->LIMIT($offset, $limit)
	 			->get();
	 		return $q->result();
		}

		public function count($table, $key){
			$q = $this->db
				->SELECT($key)
				->FROM($table)
				->get();
			return $q->num_rows();
		}

		public function count_where($table, $key, $url){
			$q = $this->db
				->SELECT($key)
				->FROM($table)
				->where($key, $url)
				->get();
			return $q->num_rows();
		}

		public function view_limit_join($table1="", $joinKey1="", $key1="", $table2="", $joinKey2="", $limit="", $offset="", $category="", $key2="", $search="", $key3 = ""){
 			$sql = "SELECT * FROM $table1 a, $table2 b WHERE a.{$joinKey1} = b.{$joinKey2}";
 			if( !empty($search)){
 				$sql = $sql . " AND a.{$key3} LIKE '%{$search}%'";
 			}
 			if( !empty($category)){
 				$sql = $sql . " AND a.{$key2} = '{$category}'";
 			}
 			$sql = $sql . " order by {$key1} DESC LIMIT {$limit}, {$offset}";
 			$q = $this->db->query($sql);
 			return $q->result();
		}

		public function count_join($table1="", $joinKey1="", $key1="", $table2="", $joinKey2="", $category="", $key2="", $search="", $key3 = ""){
			$sql = "SELECT * FROM $table1 a, $table2 b WHERE a.{$joinKey1} = b.{$joinKey2}";
 			if( !empty($search)){
 				$sql = $sql . " AND a.{$key3} LIKE '%{$search}%'";
 			}
 			if( !empty($category)){
 				$sql = $sql . " AND a.{$key2} = '{$category}'";
 			}
 			$sql = $sql . " order by {$key1} DESC";
 			$q = $this->db->query($sql);
 			return $q->num_rows();

		}


		public function fetch_where_random($table, $key, $key2, $url, $limit, $offset){
			$q = $this->db
	 			->SELECT('*')
	 			->FROM($table)
	 			->where($key2, $url)
	 			->order_by($key, 'RANDOM')
	 			->LIMIT($offset, $limit)
	 			->get();
	 		return $q->result();
		}

		public function get_where_limit_order($table, $key, $url, $limit, $offset, $order_by){
			$q = $this->db
				->SELECT('*')
				->FROM($table)
				->where($key, $url)
				->order_by($order_by, 'DESC')
				->LIMIT($offset, $limit)
				->get();
			return $q->result();
		}

		public function get_where_limit_order1($table, $key, $url, $limit, $offset, $order_by, $key2, $val2){
			$q = $this->db
				->SELECT('*')
				->FROM($table)
				->where($key, $url)
				->where($key2, $val2)
				->order_by($order_by, 'DESC')
				->LIMIT($offset, $limit)
				->get();
			return $q->result();
		}

		public function get_where_count($table, $key, $url){
			$q = $this->db
				->SELECT($key)
				->FROM($table)
				->where($key, $url)
				->get();
			return $q->num_rows();
		}

		public function get_where_count1($table, $key, $url, $key2, $val2){
			$q = $this->db
				->SELECT($key)
				->FROM($table)
				->where($key, $url)
				->where($key2, $val2)
				->get();
			return $q->num_rows();
		}

		public function get_where_active($table, $key, $url){
			$q = $this->db
				->SELECT('*')
				->FROM($table)
				->where($key, $url)
				->where('active', 1)
				->order_by('id', 'desc')
				->get();
			return $q->result();
		}

		public function count_where_active($table, $key, $url){
			$q = $this->db
				->SELECT($key)
				->FROM($table)
				->where($key, $url)
				->where('active', 1)
				->get();
			return $q->num_rows();	
		}

		public function prod_list($url){
			$sql = "SELECT a.*, b.`category_name`, c.`name` FROM `tbl_products` a, `tbl_category_prod` b, `tbl_sub_category_prod` c WHERE a.`category_id` = b.`category_id` AND a.`sub_category_id` = c.`id`  AND a.`prod_slug` = '{$url}'";
 			$q = $this->db->query($sql);
 			return $q->result();	
		}

	

		public function Login($userName, $password){
			$q = $this->db
				->SELECT('*')
				->FROM('tbl_user_end')
				->WHERE('mobile', $userName)
				->WHERE('user_pass', $password)
				->WHERE('status', 1)
				->get();
			return $q->result();	
		}

		public function update($table, $data, $updateId){
			$this->db->where('id', $updateId);
			$this->db->update($table, $data);
		}
		public function update1($table, $data, $key, $updateId){
			$this->db->where($key, $updateId);
			$this->db->update($table, $data);
		}

		public function findValue_isnot($value1, $column1, $value2, $column2, $table){
			$q = $this->db
				->SELECT('*')
				->FROM($table)
				->where($column1, $value1)
				->where($column2 . '!= ', $value2)
				->get();
			return $q->result();
		}

		public function latest_comments(){
			$sql = "SELECT a.`news_title`, a.`news_slug`, b.`name` FROM `tbl_news` a, `tbl_comments` b WHERE a.`news_id` = b.`reference_id` AND b.`comment_type` = 'news'  AND b.`active` = '1' order by b.`id` DESC LIMIT 0,8";
 			$q = $this->db->query($sql);
 			return $q->result();	
		}

		public function get_prod_order(){
			$sql = "SELECT a.*, b.`prod_title`, b.`prod_slug` FROM `tbl_prod_order` a, `tbl_products` b WHERE a.`prod_id` = b.`prod_id` AND a.`user_id` = '{$this->session->userdata('end_user_id')}' AND a.status != '0' order by a.`id` DESC";
 			$q = $this->db->query($sql);
 			return $q->result();
		}
		
		public function get_prod_order_message(){
		    $sql = "SELECT a.*, b.`prod_title`, b.`prod_slug`, b.`prod_content_short` FROM `tbl_prod_order` a, `tbl_products` b WHERE a.`prod_id` = b.`prod_id` AND a.`status` = 1  AND a.`user_id` = '{$this->session->userdata('end_user_id')}' AND a.mess_status = '0' group by a.`order_id` ";
 			$q = $this->db->query($sql);
 			return $q->result();
		}

		/// Products ====
		public function getProducts($table, $key, $url, $order_by, $key2, $val2, $key3, $val3, $limit, $offset){
			if(!empty($url)){
				$q = $this->db
					->SELECT('*')
					->FROM($table)
					->where($key, $url)
					->where($key2, $val2)
					->like($key3, $val3)
					->order_by($order_by, 'DESC')
					->LIMIT($offset, $limit)
					->get();
			} else {
				$q = $this->db
					->SELECT('*')
					->FROM($table)
					->where($key2, $val2)
					->like($key3, $val3)
					->order_by($order_by, 'DESC')
					->LIMIT($offset, $limit)
					->get();
			}
			return $q->result();
		}

		public function getProductsCount($table, $key, $url, $order_by, $key2, $val2, $key3, $val3){
			if(!empty($url)){
				$q = $this->db
					->SELECT($key)
					->FROM($table)
					->where($key, $url)
					->where($key2, $val2)
					->like($key3, $val3)
					->get();
			} else {
				$q = $this->db
					->SELECT($key)
					->FROM($table)
					->where($key2, $val2)
					->like($key3, $val3)
					->get();
			}
			
			return $q->num_rows();
		}

		public function getProductsSearch($cat="", $key="", $color="", $price="", $limit, $offset){
			$sql = "SELECT * FROM `tbl_products`  WHERE 1";
 			if( !empty($cat)){
 				$sql = $sql . " AND `category_id` IN (".$cat.")";
 			}
 			if( !empty($key)){
 				$sql = $sql . " AND `prod_title` like '%".$key."%'";
 			}
			if( !empty($color)){
				$sql = $sql . " AND `colors` IN (".$color.")";
			}
			if( !empty($price)){
				$sql = $sql . " AND  (";
				//===---
				$numbers = explode(",",$price);
				sort($numbers);
				$arrlength = count($numbers);
				for($x = 0; $x < $arrlength; $x++) {
					if($numbers[$x] == '1'){
						$sql = $sql . "  (prod_price > 10 AND prod_price <= 100) ";
					}
					if($numbers[$x] == '2'){
						if($arrlength > 1){
							$sql = $sql . " OR (prod_price > 100 AND prod_price <= 200) ";
						} else {
							$sql = $sql . "  (prod_price > 100 AND prod_price <= 200) ";
						}
						
					}
					if($numbers[$x] == '3'){
						if($arrlength > 1){
							$sql = $sql . " OR (prod_price > 200 AND prod_price <= 300) ";
						} else {
							$sql = $sql . "  (prod_price > 200 AND prod_price <= 300) ";
						}
						
					}
					if($numbers[$x] == '4'){
						if($arrlength > 1){
							$sql = $sql . " OR (prod_price > 300 AND prod_price <= 400) ";
						} else {
							$sql = $sql . "  (prod_price > 300 AND prod_price <= 400) ";	
						}
					}
					if($numbers[$x] == '5'){
						if($arrlength > 1){
							$sql = $sql . " OR (prod_price > 400) ";
						} else {
							$sql = $sql . " (prod_price > 400) ";	
						}
					}
				}
				//=-----
				$sql = $sql . ") ";
			}
 			$sql = $sql . " order by `prod_id` DESC LIMIT {$limit}, {$offset}";
 			$q = $this->db->query($sql);
 			return $q->result();
		}

		public function getProductsSearchCount($cat="", $key="", $color="", $price=""){
			$sql = "SELECT * FROM `tbl_products`  WHERE 1";
 			if( !empty($cat)){
 				$sql = $sql . " AND `category_id` IN (".$cat.")";
 			}
 			if( !empty($key)){
 				$sql = $sql . " AND `prod_title` like '%".$key."%'";
 			}
			if( !empty($color)){
				$sql = $sql . " AND `colors` IN (".$color.")";
			}
			if( !empty($price)){
				$sql = $sql . " AND  (";
				//===---
				$numbers = explode(",",$price);
				sort($numbers);
				$arrlength = count($numbers);
				for($x = 0; $x < $arrlength; $x++) {
					if($numbers[$x] == '1'){
						$sql = $sql . "  (prod_price > 10 AND prod_price <= 100) ";
					}
					if($numbers[$x] == '2'){
						if($arrlength > 1){
							$sql = $sql . " OR (prod_price > 100 AND prod_price <= 200) ";
						} else {
							$sql = $sql . "  (prod_price > 100 AND prod_price <= 200) ";
						}
						
					}
					if($numbers[$x] == '3'){
						if($arrlength > 1){
							$sql = $sql . " OR (prod_price > 200 AND prod_price <= 300) ";
						} else {
							$sql = $sql . "  (prod_price > 200 AND prod_price <= 300) ";
						}
						
					}
					if($numbers[$x] == '4'){
						if($arrlength > 1){
							$sql = $sql . " OR (prod_price > 300 AND prod_price <= 400) ";
						} else {
							$sql = $sql . "  (prod_price > 300 AND prod_price <= 400) ";	
						}
					}
					if($numbers[$x] == '5'){
						if($arrlength > 1){
							$sql = $sql . " OR (prod_price > 400) ";
						} else {
							$sql = $sql . " (prod_price > 400) ";	
						}
					}
				}
				//=-----
				$sql = $sql . ") ";
			}
 			
 			$q = $this->db->query($sql);
 			return $q->num_rows();
		}

	}