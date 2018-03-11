<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tps extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$data['isi'] = "tps/page-tps";
		$data['title'] = 'Data TPS';
		$this->load->view('layout',$data);
	}
	public function add(){
		$data['isi'] = "tps/add-tps";
		$data['title'] = 'Tambah Data Tps';
		$this->load->view('layout',$data);
	}
}
