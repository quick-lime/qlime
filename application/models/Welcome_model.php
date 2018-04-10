<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function cek_login($nohp, $password){
		$this->db->where('nohp',$nohp);
		$this->db->where('password',$password);
		$this->db->limit(1);
		return $this->db->get('admin')->row_array();
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('welcome'));
	}

	public function data(){
		$this->db->select('sum(calon1) as tpaslon1');
		$this->db->select('sum(calon2) as tpaslon2');
		$this->db->select('sum(calon3) as tpaslon3');
		return $this->db->get('suara')->row_array();
	}

	public function data_kesempatan(){
		$this->db->select('sum(calon1) as ktpaslon1');
		$this->db->select('sum(calon2) as ktpaslon2');
		$this->db->select('sum(calon3) as ktpaslon3');
		return $this->db->get('kesempatan')->row_array();
	}

	public function total_tps(){
		return $this->db->get('suara')->num_rows();
	}

	public function wilayah_kabupaten(){
		$this->db->group_by('kabupaten');
		return $this->db->get('tps')->result_array();
	}

	public function list_suara_idtps($idtps){
		$this->db->where('idtps', $idtps);
		return $this->db->get('suara')->result_array();
	}

}