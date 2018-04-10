<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tps_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function list_data(){
		$this->db->order_by('id','DESC');
		return $this->db->get('tps')->result_array();
	}

	public function jlh_relawan_tps($id){
		$this->db->where('level','relawan');
		$this->db->where('idtps',$id);
		return $this->db->get('admin')->result_array();
	}

	public function detail_tps($id){
		$this->db->where('id',$id);
		return $this->db->get('tps')->row_array();
	}

	public function list_kabupaten($kabupaten){
		$this->db->where('kabupaten', $kabupaten);
		return $this->db->get('tps')->result_array();
	}


}