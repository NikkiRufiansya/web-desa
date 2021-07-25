<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
		$this->load->model('PendudukModels');
		$this->load->model('StaffModels');
    }

    public function index()
    {
		$data['totalPenduduk'] = $this->PendudukModels->getTotalPenduduk()->result();
		$data['totalBalita'] = $this->PendudukModels->getTotalBalita()->result();
		$data['totalDewasa'] = $this->PendudukModels->getTotalDewasa()->result();
		$data['totalLansia'] = $this->PendudukModels->getTotalLansia()->result();
		$data['staff'] = $this->StaffModels->getAllData('staff')->result();
        $this->load->view('_partials/header');
        $this->load->view('home', $data);
        $this->load->view('_partials/footer');
    }


}

?>
