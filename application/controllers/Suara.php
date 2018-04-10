<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suara extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('suara_model');
		$this->load->model('tps_model');

		$level = $this->session->userdata('level');
		if($level == "admin" || $level == "relawan" || $level == "super"){}else{
			redirect(base_url());
		}
	}

	public function index(){
		$ssid = $this->session->userdata('id');
		$cek = $this->suara_model->cek_input($ssid);
		if(count($cek) >= 1){
			$data['wilayah'] = $this->tps_model->detail_tps($this->session->userdata('idtps'));
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

	public function ralat_suara(){
		$data['detail'] = $this->suara_model->detail_suara($this->input->get('id'));
		$data['isi'] = "suara/edit-suara2";
		$data['title'] = 'Perbarui Data Suara';
		$this->load->view('layout',$data);
	}

	public function input_suara(){
        $this->suara_model->input_suara();
		redirect('suara');
	}

	public function view(){
		$data['list'] = $this->suara_model->list_suara();
		$data['isi'] = "suara/page-suara";
		$data['title'] = 'Data Suara Masuk';
		$this->load->view('layout',$data);
	}

	public function edit_suara(){
		$data['detail'] = $this->suara_model->detail_suara($this->input->get('id'));
		$data['isi'] = "suara/edit-suara";
		$data['title'] = 'Perbarui Data Suara';
		$this->load->view('layout',$data);
	}

	public function proses_edit(){
		$this->suara_model->update_data($this->input->get('id'));
		redirect('suara/view');
	}

	public function proses_edit2(){
		$this->suara_model->update_data2($this->input->get('id'));
		redirect('suara');
	}

	public function input_kesempatan(){
		$data['detail'] = $this->suara_model->detail_suara($this->input->get('id'));
		$data['isi'] = "suara/form-kesempatan";
		$data['title'] = 'Tambah Data Suara Kesempatan';
		$this->load->view('layout',$data);
	}

	public function proses_input_kesempatan(){
		$this->suara_model->input_kesempatan();
		redirect('suara');
	}

	public function ralat_kesempatan(){
		$data['detail'] = $this->suara_model->detail_kesempatan($this->input->get('idsuara'));
		$data['detail_suara'] = $this->suara_model->detail_suara($this->input->get('idsuara'));
		$data['isi'] = "suara/edit-kesempatan";
		$data['title'] = 'Perbarui Data Suara Kesempatan';
		$this->load->view('layout',$data);
	}

	public function proses_ralat_kesempatan(){
		$this->suara_model->ralat_kesempatan();
		redirect('suara');
	}

}
