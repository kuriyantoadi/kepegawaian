<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_pns extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('M_login_pns');
	}

	public function index()
	{
		$this->load->view('v_login_pns');
	}

  public function auth()
  {
    $username = htmlspecialchars($this->input->post('username', true), ENT_QUOTES);
    $password = htmlspecialchars($this->input->post('password', true), ENT_QUOTES);

    $cek_login = $this->M_login_pns->auth_login($username, $password);
		// $cek_login = $this->M_login_op->auth_login($username, $password);


    if ($cek_login->num_rows() > 0) {
      $data = $cek_login->row_array();
      // $this->session->set_userdata('masuk', true);

      if ($data['status']=='admin') {
				$this->session->set_userdata('admin', true);
				// $this->session->set_userdata('ses_id', $data['id']);
				// $this->session->set_userdata('ses_nama', $data['nama']);
				redirect('c_pns');
				echo "error 1";

      }elseif ($data['status']=='pns') {
				$this->session->set_userdata('pns', true);
				$this->session->set_userdata('ses_id', $data['id_pegawai']);
				$this->session->set_userdata('ses_nama', $data['nama_pegawai']);
				redirect('c_pns');
				echo "error 2";
			}else {
				$url = base_url();
				echo $this->session->set_flashdata('msg', 'Username atau password salah');
				redirect($url);
				echo "error 3";

			}

    }
  }

	public function logout()
	{
		$this->session->sess_destroy();
		$url = base_url();
		redirect($url);
	}


}
