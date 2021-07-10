<?php

class M_pengumuman extends CI_Model{

  //tampil buku
  function tampil_pengumuman(){
    $tampil = $this->db->get('tb_pengumuman')->result();
    return $tampil;
  }

  function tambah_pengumuman($tambah_pengumuman){
    $this->db->insert('tb_pengumuman',$tambah_pengumuman);
  }

  function hapus_pengumuman($id_pengumuman){
    $this->db->where($id_pengumuman);
    $this->db->delete('tb_pengumuman');
  }

  function cari_data_pengumuman($kode_pengumuman){
    $this->db->where($kode_pengumuman);
    $hasil = $this->db->get('tb_pengumuman')->result();
    return $hasil;
  }

  function edit_data($data_pengumuman, $kode_pengumuman){
    $this->db->where($kode_pengumuman);
    $this->db->update('tb_pengumuman',$data_pengumuman);
  }



}

 ?>
