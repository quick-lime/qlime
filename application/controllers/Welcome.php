<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('welcome_model');
		$this->load->model('tps_model');
		$this->load->model('suara_model');
	}

	public function index(){
		$data['data'] = $this->welcome_model->data();
		$this->load->view('layout_result',$data);
	}

	public function datawilayah(){
		$data['list'] = $this->tps_model->list_data();
		$data['title'] = 'Data Wilayah';
		$this->load->view('datawilayah',$data);
	}

	public function result(){
		$data['list_kabupaten'] = $this->welcome_model->wilayah_kabupaten();
		$data['title'] = 'Hasil Per Wilayah';
		$this->load->view('detail_result',$data);
	}

	public function get_json(){
		
		$data['suara1'] = $this->welcome_model->data()['tpaslon1'] + $this->welcome_model->data_kesempatan()['ktpaslon1'];
		$data['suara2'] = $this->welcome_model->data()['tpaslon2'] + $this->welcome_model->data_kesempatan()['ktpaslon2'];
		$data['suara3'] = $this->welcome_model->data()['tpaslon3'] + $this->welcome_model->data_kesempatan()['ktpaslon3'];

		$data['totalsuara'] = $this->welcome_model->data()['tpaslon1'] + 
							  $this->welcome_model->data()['tpaslon2'] +
							  $this->welcome_model->data()['tpaslon3'] +
							  $this->welcome_model->data_kesempatan()['ktpaslon1'] +
							  $this->welcome_model->data_kesempatan()['ktpaslon2'] +
							  $this->welcome_model->data_kesempatan()['ktpaslon3']
							  ;
		
		if($data['totalsuara'] > 0){
			$data['persen1'] = number_format((100 / $data['totalsuara']) * $data['suara1'], 2);
			$data['persen2'] = number_format((100 / $data['totalsuara']) * $data['suara2'], 2);
			$data['persen3'] = number_format((100 / $data['totalsuara']) * $data['suara3'], 2);
		}else{
			$data['persen1'] = 0;
			$data['persen2'] = 0;
			$data['persen3'] = 0;
		}
		
		$data['totaltps'] = $this->welcome_model->total_tps();
		echo json_encode($data);
	}

	public function login(){
		$this->load->view('page-login');
	}

	public function proses_login(){
		$nohp = $this->input->post('nohp');
		$password = $this->input->post('password'); 
		$get = $this->welcome_model->cek_login($nohp,$password);
		$c = count($get);
		if($c >= 1){
			$data_session = array(
				'nama' => $get['nama'],
				'level' => $get['level'],
				'password' => $get['password'],
				'idtps' => $get['idtps'],
				'id' => $get['id']);
			$this->session->set_userdata($data_session);
			if($get['level'] ==  "relawan"){
				redirect('suara');
			}else{
				redirect('dashboard');
			}
		}else{
			redirect('admin');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}

	public function data(){
		$this->load->view('load');
	}
}