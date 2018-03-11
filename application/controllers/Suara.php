<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suara extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('suara_model');

		$level = $this->session->userdata('level');
		if($level == "admin" || $level == "relawan"){}else{
			redirect(base_url());
		}
	}

	public function index(){
		$ssid = $this->session->userdata('id');
		$cek = $this->suara_model->cek_input($ssid);
		if(count($cek) >= 1){
			$data['view'] = $cek[0];
			$data['isi'] = "suara/view-suara";
			$data['title'] = 'Data Suara Telah masuk';
			$this->load->view('layout',$data);
		}else{
			$data['isi'] = "suara/form-suara";
			$data['title'] = 'Tambah Data Suara';
			$this->load->view('layout',$data);
		}
	}

	public function input_suara(){
		$this->suara_model->input_suara();
		redirect('suara');
		// echo $this->input->post('no2');
	}

	public function view(){
		$data['isi'] = "suara/page-suara";
		$data['title'] = 'Verifikasi Data Suara';
		$this->load->view('layout',$data);
	}
}
