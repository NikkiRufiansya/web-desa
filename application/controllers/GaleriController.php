<?php

class GaleriController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('GaleriModels');
		$this->cek_login();
	}
	public function index()
	{
		$data['galeri'] = $this->GaleriModels->getAllData('galeri')->result();
		$this->load->view('_partials/header');
		$this->load->view('Galeri', $data);
		$this->load->view('_partials/footer');
	}
}
