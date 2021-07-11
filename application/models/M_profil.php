<?php

class M_profil extends CI_Model{

  //tampil buku

  function cari_data($ses_username){
    $this->db->where('username', $ses_username);
    $hasil = $this->db->get('tb_user')->result();
    return $hasil;
  }

  function edit_data($data_user, $kode_user){
    $this->db->where('kode_user', $kode_user);
    $this->db->update('tb_user',$data_user);
  }

  function tambah_data($data_user){
    $this->db->insert('tb_user',$data_user);
  }

  function ganti_pass($data_pass, $id_user){
    $this->db->where('id_user',$id_user);
    $this->db->update('tb_user',$data_pass);
  }


}

 ?>
