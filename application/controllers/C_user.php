<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

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
		$data['user'] = $this->M_user->tampil_data();

		$this->load->view('template/header');
		$this->load->view('admin/v_user', $data);
		$this->load->view('template/footer');
	}

	public function edit($id_user)
	{
	    $kode_user = array('id_user' => $id_user);
			$data['kode_user'] = $this->M_user->cari_data($kode_user);
			$this->load->view('template/header');
			$this->load->view('admin/v_user_edit', $data);
			$this->load->view('template/footer');
	}

	public function edit_up()
	{
		$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = $this->input->post('status');
		$kode_user = array('id_user' => $id_user);

		$data_user = array(
			'username'=>$username,
			'password'=>$password,
			'status'=>$status
		);

		$this->M_user->edit_data($data_user, $kode_user);
		redirect('C_user');
	}

	public function hapus($id_user)
	{
		$kode_user = array('id_user' => $id_user);
		$this->M_user->hapus_data($kode_user);
		redirect('C_user');
	}

	public function tambah()
	{
		$this->load->view('template/header');
		$this->load->view('admin/v_user_tambah');
		$this->load->view('template/footer');
	}

	public function tambah_up()
	{
	  $username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = $this->input->post('status');

		$data_user = array(
			'username'=>$username,
			'password'=>md5($password),
			'status'=>$status
		);

		$this->M_user->tambah_data($data_user);
		redirect('C_user');
	}


}
