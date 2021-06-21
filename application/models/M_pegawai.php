<?php

class M_pegawai extends CI_Model{

  //tampil buku
  function tampil_data(){
    $tampil = $this->db->get('tb_pegawai')->result();
    return $tampil;
  }

  function hapus_data($kode_user){
    $this->db->where($kode_user);
    $this->db->delete('tb_user');
  }

  function cari_data($kode_pegawai){
    $this->db->where($kode_pegawai);
    $hasil = $this->db->get('tb_pegawai')->result();
    return $hasil;
  }

  function edit_data($data_pegawai, $kode_pegawai){
    $this->db->where($kode_user);
    $this->db->update('tb_user',$data_user);
  }

  function tambah_data($data_pegawai){
    $this->db->insert('tb_pegawai',$data_pegawai);
  }

}

 ?>
