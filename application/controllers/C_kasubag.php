<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kasubag extends CI_Controller {

  // session login
  public function __construct()
  {
      parent::__construct();

      // session login
      if ($this->session->userdata('kasubag') != true) {
        $url = base_url('c_login');
        redirect($url);
      }
  }

	public function index()
	{
		// $this->load->view('template/header');
		// $this->load->view('dashboard');
		// $this->load->view('template/footer');
		$this->load->view('v_login_pns');

	}

	public function test()
	{
		$this->load->view('template/test');
	}
}
