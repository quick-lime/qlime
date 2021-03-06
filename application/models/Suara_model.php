<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suara_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	function input_suara(){
		$ssid = $this->session->userdata('id');
		$idtps = $this->session->userdata('idtps');
		$data = array('idrelawan' => $ssid,
					'notps' => $this->input->post('notps'),
					'idtps' => $idtps,
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

	public function list_suara(){
		return $this->db->get('suara')->result_array();
	}

	public function detail_relawan($id){
		$this->db->where('id',$id);
		return $this->db->get('admin')->row_array();
	}

	public function detail_tps($id){
		$this->db->where('id',$id);
		return $this->db->get('tps')->row_array();
	}

	public function detail_suara($id){
		$this->db->where('id',$id);
		return $this->db->get('suara')->row_array();
	}

	public function detail_kesempatan($id){
		$this->db->where('idsuara', $id);
		return $this->db->get('kesempatan')->row_array();
	}

	public function update_data($id){
		$ssid = $this->session->userdata('id');
		$data = array('notps' => $this->input->post('notps'),
					'calon1' => $this->input->post('no1'),
					'calon2' => $this->input->post('no2'),
					'calon3' => $this->input->post('no3'),
					'tidaksah' => $this->input->post('tidaksah'),
					'kesempatan' => $this->input->post('kesempatan'),
					'dpt' => $this->input->post('dpt'),
					'idadmin' => $ssid
					);
		$this->db->where('id',$id);
		$this->db->update('suara',$data);
		return;
	}

	public function update_data2($id){
		$data = array(
					'notps' => $this->input->post('notps'),
					'calon1' => $this->input->post('no1'),
					'calon2' => $this->input->post('no2'),
					'calon3' => $this->input->post('no3'),
					'tidaksah' => $this->input->post('tidaksah'),
					'kesempatan' => $this->input->post('kesempatan'),
					'dpt' => $this->input->post('dpt'),
					'tanggal' => date('Y-m-d'),
					'jam' => date('H:i:s')
		);
		$this->db->where('id',$id);
		$this->db->update('suara',$data);
		return;
	}

	public function input_kesempatan(){
		$data = array('idsuara' => $this->input->get('idsuara'),
					'calon1' => $this->input->post('no1'),
					'calon2' => $this->input->post('no2'),
					'calon3' => $this->input->post('no3'),
					'tidaksah' => $this->input->post('tidaksah'),
					'tanggal' => date('Y-m-d'),
					'jam' => date('H:i:s')
		);
		$this->db->insert('kesempatan',$data);
		return;
	}

	public function ralat_kesempatan(){
		$data = array(
					'calon1' => $this->input->post('no1'),
					'calon2' => $this->input->post('no2'),
					'calon3' => $this->input->post('no3'),
					'tidaksah' => $this->input->post('tidaksah'),
					'tanggal' => date('Y-m-d'),
					'jam' => date('H:i:s')
		);
		$this->db->where('idsuara', $this->input->get('idsuara'));
		$this->db->update('kesempatan',$data);
		return;
	}

	public function cek_isi_kesempatan($id){
		$this->db->where('idsuara', $id);
		return $this->db->get('kesempatan')->num_rows();
	}


}