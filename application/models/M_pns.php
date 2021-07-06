<?php

class M_pns extends CI_Model{

  //tampil buku
  function tampil_data(){
    $tampil = $this->db->get('tb_pns')->result();
    return $tampil;
  }

  function hapus_data($kode_pns){
    $this->db->where($kode_pns);
    $this->db->delete('tb_pns');
  }

  function cari_data($ses_id){
    $this->db->where('id_pegawai', $ses_id);
    $hasil = $this->db->get('tb_pns')->result();
    return $hasil;
  }

  function edit_data($data_pns, $kode_pns){
    $this->db->where($kode_pns);
    $this->db->update('tb_pns',$data_pns);
  }

  function tambah_data($data_pns){
    $this->db->insert('tb_pns',$data_pns);
  }

}

 ?>
