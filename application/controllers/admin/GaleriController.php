<?php

class GaleriController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');
		$this->load->library('session');
		$this->load->helper('file');
		$this->load->model('GaleriModels');
		$this->cek_login();
	}


	public function index()
	{
		$data['galeri'] = $this->GaleriModels->getAllData('galeri')->result();
		$this->load->view('_admin_partials/head');
		$this->load->view('admin/galeri/Galeri', $data);
		$this->load->view('_admin_partials/footer');
	}

	public function tambahGaleri()
	{
		$this->load->view('_admin_partials/head');
		$this->load->view('admin/galeri/TambahGaleri');
		$this->load->view('_admin_partials/footer');
	}

	public function prosesTambahGaleri()
	{
		$config['upload_path'] = './assets/foto/galeri';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
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
					'foto' => $foto['file_name'],
				);
				$this->GaleriModels->insert('galeri', $data);
				redirect(base_url('/admin_galeri'));
			} else {
				$error = array('error' => $this->upload->display_errors());
				echo $error;
			}
		} else {

		}
	}

	public function ubahGaleri($id)
	{
		$galeri_id = array('id' => $id);
		$data['galeri'] = $this->GaleriModels->getDataById('galeri', $galeri_id);
		$this->load->view('_admin_partials/head');
		$this->load->view('admin/galeri/UbahGaleri', $data);
		$this->load->view('_admin_partials/footer');
	}

	public function prosesUbahGaleri()
	{
		$galeri_id = array('id' => $this->input->post('id'));
		$config['upload_path'] = './assets/foto/galeri';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '10048';  //2MB max
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
					'foto' => $foto['file_name'],
				);
				$this->GaleriModels->update_data($galeri_id, $data, 'galeri');
				redirect(base_url('/admin_galeri'));
			}
		} else {
			$data = array(
				'judul' => $this->input->post('judul'),
				'foto' => $this->input->post('foto_old'),
			);
			$this->GaleriModels->update_data($galeri_id, $data, 'galeri');
			redirect(base_url('/admin_galeri'));
		}
	}

	public function hapusGaleri($id)
	{
		$galeri_id = array('id' => $id);
		$data = $this->GaleriModels->getDataById('galeri', $galeri_id);
		foreach ($data as $key) ;
		$path = './assets/foto/galeri/' . $key['foto'];
		if (unlink($path)) {
			$this->GaleriModels->delete('galeri', $galeri_id);
			redirect(base_url('/admin_galeri'));
		}
	}

}
