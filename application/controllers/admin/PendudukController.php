<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PendudukController extends CI_Controller
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
		$penduduk['penduduk'] = $this->PendudukModels->getAllData('penduduk')->result();
		$this->load->view('_admin_partials/head');
		$this->load->view('admin/penduduk/penduduk', $penduduk);
		$this->load->view('_admin_partials/footer', $penduduk);
	}

	public function tambahPenduduk()
	{
		$this->load->view('_admin_partials/head');
		$this->load->view('admin/penduduk/tambahPenduduk');
		$this->load->view('_admin_partials/footer');
	}

	public function prosesTambahPenduduk()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$gender = $this->input->post('gender');
		$usia = $this->input->post('usia');
		$pendidikan = $this->input->post('pendidikan');
		$pekerjaan = $this->input->post('pekerjaan');

		$dataPenduduk = array(
			'nik' => $nik,
			'nama' => $nama,
			'gender' => $gender,
			'usia' => $usia,
			'pendidikan' => $pendidikan,
			'pekerjaan' => $pekerjaan
		);
		$this->PendudukModels->insert('penduduk', $dataPenduduk);
		redirect(base_url('/penduduk'));
	}

	public function ubahPenduduk($id)
	{
		$idPenduduk = array('id' => $id);
		$penduduk['penduduk'] = $this->PendudukModels->getDataById('penduduk', $idPenduduk);
		$this->load->view('_admin_partials/head');
		$this->load->view('admin/penduduk/ubahPenduduk', $penduduk);
		$this->load->view('_admin_partials/footer');
	}

	public function prosesUbahPenduduk()
	{
		$id = $this->input->post('id');
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$gender = $this->input->post('gender');
		$usia = $this->input->post('usia');
		$pendidikan = $this->input->post('pendidikan');
		$pekerjaan = $this->input->post('pekerjaan');

		$idPenduduk = array('id' => $id);
		$dataPenduduk = array(
			'nik' => $nik,
			'nama' => $nama,
			'gender' => $gender,
			'usia' => $usia,
			'pendidikan' => $pendidikan,
			'pekerjaan' => $pekerjaan
		);

		$this->PendudukModels->update_data($idPenduduk, $dataPenduduk, 'penduduk');
		redirect(base_url('/penduduk'));
	}

	public function hapusPenduduk($id)
	{
		$idPenduduk = array('id' => $id);
		$this->PendudukModels->delete('penduduk', $idPenduduk);
		redirect(base_url('/penduduk'));
	}


}
