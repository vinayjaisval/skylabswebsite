<?php

	/**
	 * 
	 */
	class Cart_model extends CI_Model{
		function __construct(){	}		

		public function insert($table, $data){
			return $this->db->insert($table, $data);
		}

		public function find_val($table, $key, $val, $key1, $val1){
			$q = $this->db
				->SELECT('*')
				->FROM($table)
				->WHERE($key, $val)
				->WHERE($key1, $val1)
				->get();
			return $q->result();
		}
		public function find_val1($table, $key, $val, $key1, $val1, $key2, $val2){
			$q = $this->db
				->SELECT('*')
				->FROM($table)
				->WHERE($key, $val)
				->WHERE($key1, $val1)
				->WHERE($key2, $val2)
				->get();
			return $q->result();
		}


		public function getCouponAmount($ip_add){
			$sql = "SELECT a.id as h_id, b.* FROM tbl_coupon_history a, tbl_coupon b WHERE b.id = a.coupon_id AND a.user_ip = '".$ip_add."' AND a.status = '1' order by id desc limit 0, 1";
			$q = $this->db->query($sql);
			return $q->result();
		}
		

	}