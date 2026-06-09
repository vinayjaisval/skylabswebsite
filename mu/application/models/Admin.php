<?php

	/**
	 * 
	 */
	class Admin extends CI_Model{
		function __construct(){	}

		public function Login($userName, $password){
			$q = $this->db
				->SELECT('*')
				->FROM('tbl_user')
				->WHERE('email', $userName)
				->WHERE('password', $password)
				->get();
			return $q->result();	
		}

		public function insert($table, $data){
			return $this->db->insert($table, $data);
		}

		public function update($table, $data, $updateId){
			$this->db->where('id', $updateId);
			$this->db->update($table, $data);
		}

		public function update1($table, $data, $updateId, $column){
			$this->db->where($column, $updateId);
			$this->db->update($table, $data);
		}

		public function fetch_data($table){
			$q = $this->db
				->SELECT('*')
				->FROM($table)
				//->ORDER_BY('id', 'DESC')
				->get();
			return $q->result();
		}

		public function checkUnique($key, $value, $table){
			$q = $this->db
				->SELECT('*')
				->FROM($table)
				->where($key, $value)
				->get();
			return $q->result();
		}

		public function checkUnique1($key, $value, $table, $id){
			$q = $this->db
				->SELECT('*')
				->FROM($table)
				->where('id != ', $id)
				->where($key, $value)
				->get();
			return $q->result();
		}

		public function checkUnique2($key, $value, $table, $id, $key2){
			$q = $this->db
				->SELECT('*')
				->FROM($table)
				->where($key2 . ' != ', $id)
				->where($key, $value)
				->get();
			return $q->result();
		}

		public function findValue($value, $column, $table){
			$q = $this->db
				->SELECT('*')
				->FROM($table)
				->where($column, $value)
				->get();
			return $q->result();
		}

		public function editValue($id, $table){
			$q = $this->db
				->SELECT('*')
				->FROM($table)
				->where('id', $id)
				->ORDER_BY('id', 'DESC')
				->get();
			return $q->result();
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

		public function products($limit, $offset){
			$sql = "SELECT t1.prod_id, t1.prod_title, t1.tags, t2.category_name FROM tbl_products t1 JOIN tbl_category_prod t2 ON t1.category_id = t2.category_id WHERE t1.status = 1 ORDER BY t1.prod_id DESC limit $limit, $offset";
			$q = $this->db->query($sql);
 			return $q->result();
		}

		public function products1($limit, $offset){
			$sql = "SELECT t1.prod_id, t1.prod_title, t1.tags, t1.status, t1.prod_code, t1.trending, t1.photo FROM tbl_products t1 WHERE 1 ORDER BY t1.prod_id DESC limit $limit, $offset";
			$q = $this->db->query($sql);
 			return $q->result();
		}

		public function products_count(){
			$sql = "SELECT t1.*, t2.* FROM tbl_products t1 JOIN tbl_category_prod t2 ON t1.category_id = t2.category_id WHERE t1.status = 1";
			$q = $this->db->query($sql);
 			return $q->num_rows();
		}

		public function products_count1(){
			$sql = "SELECT t1.prod_id FROM tbl_products t1 WHERE 1";
			$q = $this->db->query($sql);
 			return $q->num_rows();
		}
	}