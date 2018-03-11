<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suara_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	function input_suara(){
		$ssid = $this->session->userdata('id');
		$data = array('idrelawan' => $ssid,
					'calon1' => $this->input->post('no1'),
					'calon2' => $this->input->post('no2'),
					'calon3' => $this->input->post('no3'),
					'tidaksah' => $this->input->post('tidaksah'),
					'kesempatan' => $this->input->post('kesempatan'),
					'dpt' => $this->input->post('dpt'),
					'tanggal' => date('Y-m-d'),
					'jam' => date('H:i:s')
		);
		$this->db->insert('suara',$data);
		return;
	}

	public function cek_input($idrelawan){
		$this->db->where('idrelawan',$idrelawan);
		return $this->db->get('suara')->result_array();
	}


}