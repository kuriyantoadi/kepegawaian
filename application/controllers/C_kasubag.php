<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kasubag extends CI_Controller {

  // session login
  public function __construct()
  {
      parent::__construct();
      $this->load->model('M_user');
      $this->load->model('M_pns');
      $this->load->model('M_pengumuman');
      $this->load->model('M_profil');
      $this->load->model('M_kasubag');

      // session login
      if ($this->session->userdata('kasubag') != true) {
        $url = base_url('Login_operator');
        redirect($url);
      }
  }

	public function index()
	{
		$this->load->view('template/header-kasubag');
		$this->load->view('kasubag/dashboard');
		$this->load->view('template/footer');

	}

  public function lap_berkas()
	{
    $data['tampil_berkas'] = $this->M_kasubag->lap_berkas();

		$this->load->view('template/header-kasubag');
		$this->load->view('kasubag/v_lap_berkas', $data);
		$this->load->view('template/footer');

	}

  public function tampil_pns()
  {
    $data['tampil_pns'] = $this->M_kasubag->tampil_data();

    $this->load->view('template/header-kasubag');
		$this->load->view('kasubag/v_pns', $data);
		$this->load->view('template/footer');
  }

  public function profil_pns($id_pegawai)
  {
    $kode_pegawai = array('id_pegawai' => $id_pegawai);
    $data['kode_pegawai'] = $this->M_pns->lihat_pns($kode_pegawai);

    $this->load->view('template/header-op');
    $this->load->view('kasubag/v_pns_profil', $data);
    $this->load->view('template/footer');
  }

  public function berkas_pns($id_pegawai)
  {
    // $kode_pegawai = array('id_pegawai' => $id_pegawai);
    $data['tampil_file'] = $this->M_pns->cari_file_pns($id_pegawai);

    $this->load->view('template/header-op');
    $this->load->view('kasubag/v_pns_berkas', $data);
    $this->load->view('template/footer');
  }

  public function hapus_berkas_pns($id_file)
  {
      $_id = $this->db->get_where('tb_file',['id_file' => $id_file])->row();
      $query = $this->db->delete('tb_file', ['id_file' => $id_file]);
      if ($query) {
        unlink('file_upload/'.$_id->nama_file);
      }
      // redirect('C_kasubag');
  }

  public function pengumuman()
  {
    $data['kode_pengumuman'] = $this->M_pengumuman->tampil_pengumuman();

    $this->load->view('template/header-kasubag');
    $this->load->view('kasubag/v_pengumuman', $data);
    $this->load->view('template/footer');
  }

  public function pengumuman_tambah()
  {
    $this->load->view('template/header-op');
    $this->load->view('kasubag/v_pengumuman_tambah');
    $this->load->view('template/footer');
  }

  public function pengumuman_tambah_up()
  {
    $penulis = $this->input->post('penulis');
    $isi_pengumuman = $this->input->post('isi_pengumuman');
    $kondisi = $this->input->post('kondisi');
    $tgl_upload = date('d-m-Y  H:i' );

    $tambah_pengumuman = array(
      'isi_pengumuman' => $isi_pengumuman,
      'tgl_upload' => $tgl_upload,
      'penulis' => $penulis,
      'kondisi' => $kondisi,
    );

    $this->M_pengumuman->tambah_pengumuman($tambah_pengumuman);
    redirect('C_kasubag/pengumuman');
  }

  public function hapus_pengumuman($id_pengumuman)
  {
    $id_pengumuman = array('id_pengumuman' => $id_pengumuman);
    $this->M_pengumuman->hapus_pengumuman($id_pengumuman);
    redirect('C_kasubag/pengumuman');
  }

  public function edit_pengumuman($id_pengumuman)
  {
      $kode_pengumuman = array('id_pengumuman' => $id_pengumuman);
      $data['kode_pengumuman'] = $this->M_pengumuman->cari_data_pengumuman($kode_pengumuman);

      $this->load->view('template/header-op');
      $this->load->view('kasubag/v_pengumuman_edit',$data);
      $this->load->view('template/footer');
  }

  public function pengumuman_edit_up()
  {
    $id_pengumuman = $this->input->post('id_pengumuman');
    $isi_pengumuman = $this->input->post('isi_pengumuman');
    $penulis = $this->input->post('penulis');
    $kondisi = $this->input->post('kondisi');

    $kode_pengumuman = array('id_pengumuman' => $id_pengumuman);

    $data_pengumuman = array(
      'isi_pengumuman' => $isi_pengumuman,
      'penulis' => $penulis,
      'kondisi' => $kondisi
    );

    $this->M_pengumuman->edit_data($data_pengumuman, $kode_pengumuman);
    redirect('C_kasubag/pengumuman');

  }

}
