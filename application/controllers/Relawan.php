<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relawan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('relawan_model');
	}

	public function index(){
		$data['isi'] = "relawan/page-relawan";
		$data['title'] = 'Data Relawan';
		$data['list'] = $this->relawan_model->get();
		$this->load->view('layout',$data);
	}

	public function add(){
		$data['isi'] = "relawan/add-relawan";
		$data['title'] = 'Tambah Data Relawan';
		$this->load->view('layout',$data);
	}

	public function update(){
		$data['detail'] = $this->relawan_model->get_w_id($this->input->get('id'));
		$data['isi'] = "relawan/update-relawan";
		$data['title'] = 'Perbarui Data Relawan';
		$this->load->view('layout',$data);
	}

	public function proses_tambah(){
		$this->relawan_model->proses_tambah();
		redirect('relawan');
	}

	public function proses_update(){
		$this->relawan_model->proses_edit();
		redirect('relawan');
	}

	public function proses_hapus(){
		$this->relawan_model->proses_hapus();
		redirect('relawan');
	}	
	
}
