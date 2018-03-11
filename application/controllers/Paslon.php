<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paslon extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['isi'] = "paslon/page-paslon.php";
		$data['title'] = 'Data Paslon';
		$this->load->view('layout',$data);
	}
}
