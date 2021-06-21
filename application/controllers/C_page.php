<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_page extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->model('M_user');

      // session login
      if ($this->session->userdata('admin') != true) {
        $url = base_url('c_login');
        redirect($url);
      }

  }

	public function index()
	{
    $this->load->view('template/header');
    $this->load->view('dashboard');
    $this->load->view('template/footer');
	}


  	public function operator()
  	{
      $this->load->view('template/header');
      $this->load->view('operator/index');
      $this->load->view('template/footer');
  	}


}
