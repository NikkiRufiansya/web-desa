<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view('_partials/header');
        $this->load->view('home');
        $this->load->view('_partials/footer');
        
    }
}

?>
