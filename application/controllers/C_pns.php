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
		$data['pengumuman'] = $this->M_pns->pengumuman();

		$this->load->view('template/header-pns');
		$this->load->view('pns/index.php', $data);
		$this->load->view('template/footer');

	}

	public function profil()
	{
		$ses_id = $this->session->userdata('ses_id');
		$data['kode_pns'] = $this->M_pns->cari_data($ses_id);
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('template/header-pns');
		$this->load->view('pns/profil', $data);
		$this->load->view('template/footer');

	}

	public function edit()
	{
			$ses_id = $this->session->userdata('ses_id');
			$data['kode_pns'] = $this->M_pns->cari_data($ses_id);

			$this->load->view('template/header-pns');
			$this->load->view('pns/edit', $data);
			$this->load->view('template/footer');
	}

	public function edit_up()
	{
		$id_pegawai = $this->input->post('id_pegawai');
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
		$kode_pns = array('id_pegawai' => $id_pegawai);

		$data_pns = array(
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
		);

		$this->M_pns->edit_data($data_pns, $kode_pns);
		redirect('C_pns');
	}

}
