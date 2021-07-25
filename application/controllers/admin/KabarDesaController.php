<?php

class KabarDesaController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');
		$this->load->library('session');
		$this->load->helper('file');
		$this->load->model('KabarDesaModels');
		$this->cek_login();
	}

	public function index()
	{
		$informasi['informasi'] = $this->KabarDesaModels->getAllData('kabar_desa')->result();
		$this->load->view('_admin_partials/head');
		$this->load->view('admin/kabarDesa/kabarDesa', $informasi);
		$this->load->view('_admin_partials/footer');
	}

	public function tambahInformasi()
	{
		$this->load->view('_admin_partials/head');
		$this->load->view('admin/kabarDesa/tambahInformasi');
		$this->load->view('_admin_partials/footer');
	}

	public function prosesTambahInformasi()
	{
		$config['upload_path'] = './assets/foto/kabar_desa';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '10048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['overwrite'] = true;
		$config['file_name'] = $_FILES['foto']['name'];
		$this->upload->initialize($config);
		if (!empty($_FILES['foto']['name'])) {
			if ($this->upload->do_upload('foto')) {
				$foto = $this->upload->data();
				$data = array(
					'judul' => $this->input->post('judul'),
					'deskripsi_singkat' => $this->input->post('deskripsi'),
					'isi' => $this->input->post('isi'),
					'foto' => $foto['file_name'],
				);
				$this->KabarDesaModels->insert('kabar_desa', $data);
				redirect(base_url('/admin_kabar_desa'));
			} else {
				$error = array('error' => $this->upload->display_errors());
			}
		} else {

		}
	}

	public function ubahInformasi($id)
	{
		$idInformasi = array('id' => $id);
		$informasi['informasi'] = $this->KabarDesaModels->getDataById('kabar_desa', $idInformasi);
		$this->load->view('_admin_partials/head');
		$this->load->view('admin/kabarDesa/ubahInformasi', $informasi);
		$this->load->view('_admin_partials/footer');
	}

	public function prosesUbahInformasi()
	{
		$idInformasi = array('id' => $this->input->post('id'));
		$config['upload_path'] = './assets/foto/kabar_desa';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['overwrite'] = true;
		$config['file_name'] = $_FILES['foto_new']['name'];
		$this->upload->initialize($config);
		if (!empty($_FILES['foto_new']['name'])) {
			if ($this->upload->do_upload('foto_new')) {
				$foto = $this->upload->data();
				$data = array(
					'judul' => $this->input->post('judul'),
					'deskripsi_singkat' => $this->input->post('deskripsi'),
					'isi' => $this->input->post('isi'),
					'foto' => $foto['file_name'],
				);
				$this->KabarDesaModels->update_data($idInformasi, $data, 'kabar_desa');
				redirect(base_url('/admin_kabar_desa'));
			}
		}else{
			$data = array(
				'judul' => $this->input->post('judul'),
				'deskripsi_singkat' => $this->input->post('deskripsi'),
				'isi' => $this->input->post('isi'),
				'foto' => $this->input->post('foto_old'),
			);
			$this->KabarDesaModels->update_data($idInformasi, $data, 'kabar_desa');
			redirect(base_url('/admin_kabar_desa'));
		}
	}


	public function hapusInformasi($id)
	{
		$idInformasi = array('id' => $id);
		$informasi = $this->KabarDesaModels->getDataById('kabar_desa', $idInformasi);
		foreach ($informasi as $key) ;
		$path = './assets/foto/kabar_desa/' . $key['foto'];
		if (unlink($path)) {
			$this->KabarDesaModels->delete('kabar_desa', $idInformasi);
			redirect(base_url('/admin_kabar_desa'));
		}
	}


}
