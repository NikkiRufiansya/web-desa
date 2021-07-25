<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KabarDesaController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('KabarDesaModels');
		$this->load->helper('url');
		$this->load->library('pagination');
	}
	public function index()
	{

		$config['base_url'] = base_url('kabar_desa'); //site url
		$config['total_rows'] = $this->db->count_all('kabar_desa'); //total row
		$config['per_page'] = 3;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['informasi'] = $this->KabarDesaModels->get_infromasi_list($config["per_page"], $data['page'])->result();
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('_partials/header');
		$this->load->view('kabarDesa', $data);
		$this->load->view('_partials/footer');
	}

	public function bacaInformasi()
	{
		$idInformasi = array('id' => $this->input->post('id'));
		$data['informasi'] = $this->KabarDesaModels->getDataById('kabar_desa', $idInformasi);
		$this->load->view('_partials/header');
		$this->load->view('BacaInformasi', $data);
		$this->load->view('_partials/footer');
	}




}
