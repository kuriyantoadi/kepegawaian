<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pns extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('M_pns');

			// session login
			if ($this->session->userdata('pns') != true) {
        $url = base_url('c_login');
        redirect($url);
      }
	}

	public function index()
	{
		$this->load->view('template/header-pns');
		$this->load->view('pns/index.php');
		$this->load->view('template/footer');

	}

	public function profil()
	{
		$ses_id = $this->session->userdata('ses_id');
		$data['kode_pns'] = $this->M_pns->cari_data($ses_id);

		$this->load->view('template/header-pns');
		$this->load->view('pns/profil', $data);
		$this->load->view('template/footer');

	}
	// public function profil($kode_pegawai)
	// {
	// 	$kode_pegawai = array('id_pegawai' => $id_pegawai);
	// 	$data['kode_pns'] = $this->M_pns->cari_data($kode_pegawai);
	//
	// 	$this->load->view('template/header-pns');
	// 	$this->load->view('pns/profil', $data);
	// 	$this->load->view('template/footer');
	//
	// }

}
