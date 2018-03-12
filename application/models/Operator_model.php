<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator_model extends CI_Model {

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
					'level' => $this->input->post('level'),
					'status' => 1
				);
		$this->db->insert('admin',$data);
		return;	
	}

	public function proses_edit(){
		$data = array('nik' => $this->input->post('nik'),
					'nama' => $this->input->post('nama'),
					'nohp' => $this->input->post('nohp'),
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'jeniskelamin' => $this->input->post('jeniskelamin'),
					'alamat' => $this->input->post('alamat')
				);
		$this->db->where('id',$this->input->get('id'));
		$this->db->update('admin',$data);
		return;	
	}

	public function proses_hapus(){
		$data = array('status' => 0 );
		$this->db->where('id',$this->input->get('id'));
		$this->db->update('admin',$data);
		return;	
	}

	public function get(){
		$this->db->limit(100);
		$this->db->where('status','1');
		$this->db->order_by('id','DESC');
		return $this->db->get('admin')->result_array();
	}

	public function get_w_id($id){
		$this->db->where('id',$id);
		return $this->db->get('admin')->row_array();
	}

	public function list_kabupaten(){
		$this->db->group_by('kabupaten');
		$this->db->order_by('kabupaten','DESC');
		return $this->db->get('tps')->result_array();
	}

	public function get_kecamatan($kabupaten){
		$this->db->where('kabupaten',$kabupaten);
		$this->db->group_by('kecamatan','DESC');
		return $this->db->get('tps')->result_array();
	}

	public function get_kelurahan($kabupaten,$kecamatan){
		$this->db->where('kabupaten',$kabupaten);
		$this->db->where('kecamatan',$kecamatan);
		$this->db->group_by('kelurahan','DESC');
		return $this->db->get('tps')->result_array();
	}

}