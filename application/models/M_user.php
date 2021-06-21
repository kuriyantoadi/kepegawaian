<?php

class M_user extends CI_Model{

  //tampil buku
  function tampil_data(){
    $tampil = $this->db->get('tb_user')->result();
    return $tampil;
  }

  function hapus_data($kode_user){
    $this->db->where($kode_user);
    $this->db->delete('tb_user');
  }

  function cari_data($kode_user){
    $this->db->where($kode_user);
    $hasil = $this->db->get('tb_user')->result();
    return $hasil;
  }

  function edit_data($data_user, $kode_user){
    $this->db->where($kode_user);
    $this->db->update('tb_user',$data_user);
  }

  function tambah_data($data_user){
    $this->db->insert('tb_user',$data_user);
  }

}

 ?>
