<?php

class PendudukController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PendudukModels');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['penduduk'] = $this->PendudukModels->getAllData('penduduk')->result();
		$this->load->view('_partials/header');
		$this->load->view('Penduduk', $data);
		$this->load->view('_partials/footer');
	}
}
