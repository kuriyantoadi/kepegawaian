<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_file extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->model('M_file');
      $this->load->model('M_pns');

      // session login
      if ($this->session->userdata('pns') != true) {
        $url = base_url('c_login');
        redirect($url);
      }
  }

  public function index()
  {
    $ses_id = $this->session->userdata('ses_id');
    $data['tampil_file'] = $this->M_file->cari_file($ses_id)->result();

    $this->load->view('template/header-pns');
    $this->load->view('pns/berkas', $data);
    $this->load->view('template/footer');

  }

  public function tambah_berkas()
  {
    $ses_id = $this->session->userdata('ses_id');
    $data['ses_id'] = $ses_id;
    $data['kode_pns'] = $this->M_pns->cari_data($ses_id);


    $this->load->view('template/header-pns');
    $this->load->view('pns/berkas_tambah', $data);
    $this->load->view('template/footer');

  }

  public function upload_berkas()
  {
      $config['upload_path'] = 'file_upload';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = 2000;
      $config['encrypt_name']	= TRUE;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('nama_file')) {
        $error = array('error' => $this->upload->display_errors());


        print_r ($error);
        redirect('C_file');

      }else {
        $_data = array('upload_data' => $this->upload->data());
        $tgl_upload = date('d-m-Y  H:i');

        $data = array(
          'tgl_upload'=>$tgl_upload,
          'keterangan'=>$this->input->post('keterangan'),
          'id_pegawai'=>$this->input->post('id_pegawai'),
          'nama_file'=> $_data['upload_data']['file_name']
        );
        $query = $this->db->insert('tb_file', $data);

        if ($query) {
          echo 'berhasil diupload';
          redirect('C_file');
        }else {
          echo 'gagal upload';
        }
      }

  }


  public function hapus($id_file)
  {
      $_id = $this->db->get_where('tb_file',['id_file' => $id_file])->row();
      $query = $this->db->delete('tb_file', ['id_file' => $id_file]);
      if ($query) {
        unlink('file_upload/'.$_id->nama_file);
      }
      redirect('C_file');
  }



}
