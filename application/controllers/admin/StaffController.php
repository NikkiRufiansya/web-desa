<?php

class StaffController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');
		$this->load->library('session');
		$this->load->helper('file');
		$this->load->model('StaffModels');
		$this->load->model('AdminModels');
		$this->cek_login();
	}

	public function index()
	{
		$data['staff'] = $this->StaffModels->getAllData('staff')->result();
		$this->load->view('_admin_partials/head');
		$this->load->view('admin/staff/StaffDesa', $data);
		$this->load->view('_admin_partials/footer');
	}

	public function tambahStaff()
	{
		$this->load->view('_admin_partials/head');
		$this->load->view('admin/staff/TambahStaffDesa');
		$this->load->view('_admin_partials/footer');
	}

	public function prosesTambahStaff()
	{
		$config['upload_path'] = './assets/foto/staff';
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
					'nama' => $this->input->post('nama'),
					'jabatan' => $this->input->post('jabatan'),
					'foto' => $foto['file_name'],
				);
				$this->StaffModels->insert('staff', $data);
				redirect(base_url('admin_staf_desa'));
			} else {
				$error = array('error' => $this->upload->display_errors());
			}
		} else {

		}
	}

	public function ubahStaff($id)
	{
		$staff_id = array('id' => $id);
		$data['staff'] = $this->StaffModels->getDataById('staff', $staff_id);
		$this->load->view('_admin_partials/head');
		$this->load->view('admin/staff/UbahStaffDesa', $data);
		$this->load->view('_admin_partials/footer');
	}

	public function prosesUbahStaff()
	{
		$staff_id = array('id' => $this->input->post('id'));
		$config['upload_path'] = './assets/foto/staff';
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
					'nama' => $this->input->post('nama'),
					'jabatan' => $this->input->post('jabatan'),
					'foto' => $foto['file_name'],
				);
				$this->StaffModels->update_data($staff_id, $data, 'staff');
				redirect(base_url('admin_staf_desa'));
			}
		} else {
			$data = array(
				'nama' => $this->input->post('nama'),
				'jabatan' => $this->input->post('jabatan'),
				'foto' => $this->input->post('foto_old'),
			);
			$this->StaffModels->update_data($staff_id, $data, 'staff');
			redirect(base_url('admin_staf_desa'));
		}
	}

	public function hapusStaff($id)
	{
		$staff_id = array('id' => $id);
		$data = $this->StaffModels->getDataById('staff', $staff_id);
		foreach ($data as $key) ;
		$path = './assets/foto/staff/' . $key['foto'];
		if (unlink($path)) {
			$this->StaffModels->delete('staff', $staff_id);
			redirect(base_url('/admin_staf_desa'));
		}
	}

	public function lihatAdmin()
	{
		$data['admin'] = $this->AdminModels->getAllData('admin')->result();
		$this->load->view('_admin_partials/head');
		$this->load->view('admin/staff/LihatAdmin', $data);
		$this->load->view('_admin_partials/footer');
	}

	public function tambahAdmin()
	{
		$this->load->view('_admin_partials/head');
		$this->load->view('admin/staff/TambahAdmin');
		$this->load->view('_admin_partials/footer');
	}

	public function prosesTambahAdmin()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		);
		$this->AdminModels->insert('admin', $data);
		redirect(base_url('lihat_admin'));
	}

	public function ubahAdmin($id)
	{
		$admin_id = array('id' => $id);
		$data['admin'] = $this->AdminModels->getDataById('admin', $admin_id);
		$this->load->view('_admin_partials/head');
		$this->load->view('admin/staff/UbahAdmin', $data);
		$this->load->view('_admin_partials/footer');
	}

	public function prosesUbahAdmin()
	{
		$admin_id = array('id' => $this->input->post('id'));
		if ($this->input->post('new_password') != null) {
			$data = array(
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('new_password'))
			);
			$this->AdminModels->update_data($admin_id, $data, 'admin');
			redirect(base_url('lihat_admin'));
		} else {
			$data = array(
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('old_password')
			);
			$this->AdminModels->update_data($admin_id, $data, 'admin');
			redirect(base_url('lihat_admin'));
		}
	}

	public function hapusAdmin($id)
	{
		$admin_id = array('id' => $id);
		$this->AdminModels->delete('admin', $admin_id);
		redirect(base_url('lihat_admin'));
	}


}
