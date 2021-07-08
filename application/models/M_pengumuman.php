<?php

class M_pengumuman extends CI_Model{

  //tampil buku
  function tampil_pengumuman(){
    $tampil = $this->db->get('tb_pengumuman')->result();
    return $tampil;
  }

  function hapus_data($kode_pegawai){
    $this->db->where($kode_pegawai);
    $this->db->delete('tb_pegawai');
  }

  function cari_data($kode_pegawai){
    $this->db->where($kode_pegawai);
    $hasil = $this->db->get('tb_pegawai')->result();
    return $hasil;
  }

  function edit_data($data_pegawai, $kode_pegawai){
    $this->db->where($kode_pegawai);
    $this->db->update('tb_pegawai',$data_pegawai);
  }

  function tambah_data($data_pegawai){
    $this->db->insert('tb_pegawai',$data_pegawai);
  }

}

 ?>
