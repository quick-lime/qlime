<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tps extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('tps_model');
	}

	public function index(){
		$data['list'] = $this->tps_model->list_data();
		$data['isi'] = "tps/page-tps";
		$data['title'] = 'Data Wilayah';
		$this->load->view('layout',$data);
	}
	public function add(){
		$data['isi'] = "tps/add-tps";
		$data['title'] = 'Tambah Data Tps';
		$this->load->view('layout',$data);
	}
}
