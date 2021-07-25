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
		$this->load->view('_admin_partials/head');
		$this->load->view('admin/tentangDesa/UbahTentangDesa', $data);
		$this->load->view('_admin_partials/footer');
	}

	public function prosesUbahData()
	{
		$tentang_desa_id = array('id' => $this->input->post('id'));
		$data = array('isi' => $this->input->post('isi'));
		$this->TentangDesaModels->update_data($tentang_desa_id, $data, 'tentang_desa');
		redirect(base_url('admin_tentang_desa'));
	}

}
