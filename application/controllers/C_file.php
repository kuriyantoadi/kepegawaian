<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_file extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->model('M_file');
      $this->load->model('M_pns');
  }

  public function index()
  {
    $ses_id = $this->session->userdata('ses_id');
    $data['kode_pns'] = $this->M_file->cari_file()->result();

    $this->load->view('template/header-pns');
    $this->load->view('pns/berkas', $data);
  }

  public function tambah_berkas()
  {
    $ses_id = $this->session->userdata('ses_id');
    $data['ses_id'] = $ses_id;
    $data['kode_pns'] = $this->M_pns->cari_data($ses_id);
    

    $this->load->view('template/header-pns');
    $this->load->view('pns/berkas_tambah', $data);

  }

  public function do_upload()
  {
      $config['upload_path'] = './gambar/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = 1000;
      // $config['max_width'] = 0;
      // $config['max_height'] = 0;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('nama_file')) {
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('upload', $error);
      }else {
        $_data = array('upload_data' => $this->upload->data());

        $data = array(
          'keterangan'=>$this->input->post('keterangan'),
          'nama_file'=> $_data['upload_data']['file_name']
        );
        $query = $this->db->insert('upload', $data);

        if ($query) {
          echo 'berhasil diupload';
          redirect('C_upload');
        }else {
          echo 'gagal upload';
        }
      }

  }


  public function hapus($id_upload)
  {
      $_id = $this->db->get_where('upload',['id_upload' => $id_upload])->row();
      $query = $this->db->delete('upload', ['id_upload' => $id_upload]);
      if ($query) {
        unlink('gambar/'.$_id->nama_file);
      }
      redirect('C_upload');
  }



}
