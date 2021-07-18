<?php

class M_kasubag extends CI_Model{

  //tampil buku
  function tampil_data(){
    $tampil = $this->db->get('tb_pns')->result();
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

  function lap_berkas(){
     $this->db->select('*');
     $this->db->from('tb_file');
     $this->db->join('tb_pns','tb_pns.id_pegawai = tb_file.id_pegawai');
     $this->db->join('tb_permintaan_file','tb_permintaan_file.id_keterangan = tb_file.id_keterangan');
     $query = $this->db->get()->result();
     return $query;
  }


}

 ?>
