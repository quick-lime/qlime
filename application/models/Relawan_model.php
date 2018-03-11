<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relawan_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function proses_tambah(){
		$data = array('nik' => $this->input->post('nik'),
					'nama' => $this->input->post('nama'),
					'nohp' => $this->input->post('nohp'),
					'password' => $this->input->post('password'),
					'jeniskelamin' => $this->input->post('jeniskelamin'),
					'alamat' => $this->input->post('alamat'),
					'tps' => $this->input->post('notps'),
					'status' => 1
				);
		$this->db->insert('relawan',$data);
		return;	
	}

	public function proses_edit(){
		$data = array('nik' => $this->input->post('nik'),
					'nama' => $this->input->post('nama'),
					'nohp' => $this->input->post('nohp'),
					'password' => $this->input->post('password'),
					'jeniskelamin' => $this->input->post('jeniskelamin'),
					'alamat' => $this->input->post('alamat'),
					'tps' => $this->input->post('notps')
				);
		$this->db->where('id',$this->input->get('id'));
		$this->db->update('relawan',$data);
		return;	
	}

	public function proses_hapus(){
		$data = array('status' => 0 );
		$this->db->where('id',$this->input->get('id'));
		$this->db->update('relawan',$data);
		return;	
	}

	public function get(){
		$this->db->limit(100);
		$this->db->where('status','1');
		$this->db->order_by('id','DESC');
		return $this->db->get('relawan')->result_array();
	}

	public function get_w_id($id){
		$this->db->where('id',$id);
		return $this->db->get('relawan')->row_array();
	}

}