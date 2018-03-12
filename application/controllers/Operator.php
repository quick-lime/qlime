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
		$data['list_kabupaten'] = $this->operator_model->list_kabupaten();
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

	public function get_kecamatan(){
		echo "<option value='' disabled selected class='hide'>- Pilih Kecamatan -</option>";
		$kecamatan = $this->operator_model->get_kecamatan($this->input->get('kabupaten'));
		foreach ($kecamatan as $value) {
			echo"<option value='".$value['kecamatan']."'>".$value['kecamatan']."</option>";			
		}		
	}

	public function get_kelurahan(){
		echo "<option value='' disabled selected class='hide'>- Pilih Kelurahan -</option>";
		$kelurahan = $this->operator_model->get_kelurahan($this->input->get('kabupaten'),$this->input->get('kecamatan'));
		foreach ($kelurahan as $value) {
			echo"<option value='".$value['id']."'>".$value['kelurahan']."</option>";			
		}	
	}

}
