<?php
defined('BASEPATH') or exit('No direct script access allowed');

//AdminController == Dashboard

class AdminController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('PendudukModels');
		$this->cek_login();
	}

	public function index()
	{
		$penduduk['totalPenduduk'] = $this->PendudukModels->getTotalPenduduk()->result();
		$penduduk['totalBalita'] = $this->PendudukModels->getTotalBalita()->result();
		$penduduk['totalDewasa'] = $this->PendudukModels->getTotalDewasa()->result();
		$penduduk['totalLansia'] = $this->PendudukModels->getTotalLansia()->result();
		$penduduk['totalAnak'] = $this->PendudukModels->getTotalAnak()->result();
		$penduduk['penduduk'] = $this->PendudukModels->getAllData('penduduk')->result();
		$penduduk['gender'] = $this->PendudukModels->getTotalGender()->result();
		$penduduk['pendidikan'] = $this->PendudukModels->getTotalPendidikan()->result();
		$this->load->view('_admin_partials/head');
		$this->load->view('admin/dashboard', $penduduk);
		$this->load->view('_admin_partials/footer', $penduduk);
	}




}

