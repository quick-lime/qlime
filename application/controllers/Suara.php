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

		$ssid = $this->session->userdata('id');
		
		$config['upload_path']          = 'assets/fotover/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;
        $new_name = $ssid."-".$_FILES["foto"]['name'];
		$config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('foto')){
        	redirect('suara');
        }else{
        	$this->suara_model->input_suara();
			redirect('suara');
        }
	}

	public function view(){
		$data['list'] = $this->suara_model->list_ver();
		$data['isi'] = "suara/page-suara";
		$data['title'] = 'Verifikasi Data Suara';
		$this->load->view('layout',$data);
	}

	public function ver(){
		$data['detail'] = $this->suara_model->detail_suara($this->input->get('id'));
		$data['isi'] = "suara/ver-suara";
		$data['title'] = 'Verifikasi Data Suara';
		$this->load->view('layout',$data);
	}

	public function proses_ver(){
		if(!empty($this->input->post('update'))){
			// update
			$this->suara_model->ver_update_data($this->input->get('id'));
			redirect('suara/view');
		}else{
			$this->suara_model->ver_data($this->input->get('id'));
			redirect('suara/view');
		}
	}


}
