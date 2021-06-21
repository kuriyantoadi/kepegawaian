<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pegawai extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('M_pegawai');

			// session login
			if ($this->session->userdata('admin') != true) {
				$url = base_url('c_login');
				redirect($url);
			}
	}

	public function index()
	{
		$data['peg'] = $this->M_pegawai->tampil_data();

		$this->load->view('template/header');
		$this->load->view('admin/v_pegawai', $data);
		$this->load->view('template/footer');
		// $this->load->view('v_login');

	}

	public function lihat($id_pegawai)
	{
		$kode_pegawai = array('id_pegawai' => $id_pegawai);
		$data['kode_pegawai'] = $this->M_pegawai->cari_data($kode_pegawai);

		$this->load->view('template/header');
		$this->load->view('admin/v_pegawai_lihat', $data);
		$this->load->view('template/footer');

	}

	public function tambah()
	{
		$this->load->view('template/header');
		$this->load->view('admin/v_pegawai_tmbh');
		$this->load->view('template/footer');

	}

	public function tambah_up()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_pegawai = $this->input->post('nama_pegawai');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jk = $this->input->post('jk');
		$agama = $this->input->post('agama');
		$pangkat = $this->input->post('pangkat');
		$jabatan = $this->input->post('jabatan');
		$masa_kerja = $this->input->post('masa_kerja');
		$gaji_pokok = $this->input->post('gaji_pokok');
		$nama_istri = $this->input->post('nama_istri');
		$anak_1 = $this->input->post('anak_1');
		$anak_2 = $this->input->post('anak_2');
		$anak_3 = $this->input->post('anak_3');
		$anak_4 = $this->input->post('anak_4');
		$anak_5 = $this->input->post('anak_5');
		$nip = $this->input->post('nip');
		$unit_kerja = $this->input->post('unit_kerja');
		$gaji_pokok_lama = $this->input->post('gaji_pokok_lama');
		$gaji_pokok_baru = $this->input->post('gaji_pokok_baru');
		$mulai_tgl = $this->input->post('mulai_tgl');

		$data_pegawai = array(
			'nama_pegawai' => $nama_pegawai,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'jk' => $jk,
			'agama' => $agama,
			'pangkat' => $pangkat,
			'jabatan' => $jabatan,
			'masa_kerja' => $masa_kerja,
			'gaji_pokok' => $gaji_pokok,
			'nama_istri' => $nama_istri,
			'anak_1' => $anak_1,
			'anak_2' => $anak_2,
			'anak_3' => $anak_3,
			'anak_4' => $anak_4,
			'anak_5' => $anak_5,
			'nip' => $nip,
			'unit_kerja' => $unit_kerja,
			'gaji_pokok_lama' => $gaji_pokok_lama,
			'gaji_pokok_baru' =>$gaji_pokok_baru,
			'mulai_tgl' => $mulai_tgl,

			'username'=>$username,
			'password'=>md5($password)
		);

		$this->M_pegawai->tambah_data($data_pegawai);
		redirect('C_pegawai');

	}




	public function edit($id_pegawai)
	{
			$kode_pegawai = array('id_pegawai' => $id_pegawai);
			$data['kode_pegawai'] = $this->M_pegawai->cari_data($kode_pegawai);
			$this->load->view('template/header');
			$this->load->view('admin/v_pegawai_edit', $data);
			$this->load->view('template/footer');
	}

}
