<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginr extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('loginr_model');
	}

	public function index(){
		$this->load->view('page-loginr');
	}

	public function proses_login(){
		$no = $this->input->post('nohp');
		$password = $this->input->post('password'); 
		$get = $this->loginr_model->cek_login($no,$password);
		$c = count($get);
		if($c >= 1){
			$data_session = array(
				'nama' => $get['nama'],
				'level' => 'relawan',
				'password' => $get['nohp'],
				'id' => $get['id']);
			$this->session->set_userdata($data_session);
			redirect('suara');
		}else{
			redirect('login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}