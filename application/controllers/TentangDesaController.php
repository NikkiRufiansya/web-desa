<?php

class TentangDesaController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('TentangDesaModels');
		$this->cek_login();
	}

	public function index()
	{
		$tentang_desa_id = array('id' => 1);
		$data['tentang_desa'] = $this->TentangDesaModels->getDataById('tentang_desa', $tentang_desa_id);
		$this->load->view('_partials/header');
		$this->load->view('TentangDesa', $data);
		$this->load->view('_partials/footer');
	}



}
