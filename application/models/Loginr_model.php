<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginr_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function cek_login($no, $password){
		$this->db->where('nohp',$no);
		$this->db->where('password',$password);
		$this->db->limit(1);
		return $this->db->get('relawan')->row_array();
	}

}