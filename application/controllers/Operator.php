<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('operator_model');

		$level = $this->session->userdata('level');
		if($level == "super"){}else{
			redirect('welcome/logout');
		}
	}

	public function index(){
		$data['list'] = $this->operator_model->get();
		$data['isi'] = "operator/page-operator";
		$data['title'] = 'Data Operator';
		$this->load->view('layout',$data);
	}

	public function add(){
		$data['isi'] = "operator/add-operator";
		$data['title'] = 'Tambah Data Operator';
		$this->load->view('layout',$data);
	}


	public function update(){
		$data['detail'] = $this->operator_model->get_w_id($this->input->get('id'));
		$data['isi'] = "operator/update-operator";
		$data['title'] = "Perbarui Data Operator";
		$this->load->view('layout',$data);
	}

	public function proses_tambah(){
		$this->operator_model->proses_tambah();
		redirect('operator');
	}

	public function proses_edit(){
		$this->operator_model->proses_edit();
		redirect('operator');
	}

	public function proses_hapus(){
		$this->operator_model->proses_hapus();
		redirect('operator');
	}
}
