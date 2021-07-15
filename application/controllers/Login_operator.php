<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_operator extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('M_login_op');
	}

	public function index()
	{
		$this->load->view('v_login_op');
	}

  public function auth()
  {
    $username = htmlspecialchars($this->input->post('username', true), ENT_QUOTES);
    $password = htmlspecialchars($this->input->post('password', true), ENT_QUOTES);

    $cek_login = $this->M_login_op->auth_login($username, $password);

    if ($cek_login->num_rows() > 0) {
      $data = $cek_login->row_array();

      if ($data['status']=='operator') {
				$this->session->set_userdata('operator', true);
				$this->session->set_userdata('ses_id', $data['id']);
				$this->session->set_userdata('ses_username', $data['username']);
				redirect('C_operator');

      }elseif ($data['status']=='kasubag') {
				$this->session->set_userdata('kasubag', true);
				$this->session->set_userdata('ses_id', $data['id']);
				$this->session->set_userdata('ses_username', $data['username']);

				redirect('C_kasubag');
			}else {
				$url = base_url('Login_operator');
				echo $this->session->set_flashdata('msg', 'Username atau password salah');
				redirect($url);
			}

    }

		$this->session->set_flashdata('msg', 'Username atau password salah');
		$url = base_url('Login_operator');
		redirect($url);
  }

	public function logout()
	{
		$this->session->sess_destroy();
		$url = base_url();
		redirect('Login_operator');
	}


}
