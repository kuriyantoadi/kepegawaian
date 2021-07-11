<?php

class M_pns extends CI_Model{

//operator awal

  function cari_data_pns($kode_pegawai){
    $this->db->where($kode_pegawai);
    $hasil = $this->db->get('tb_pns')->result();
    return $hasil;
  }

  function lihat_pns($kode_pegawai){
    $this->db->where($kode_pegawai);
    $hasil = $this->db->get('tb_pns')->result();
    return $hasil;
  }

  function cari_file_pns($id_pegawai){
    $this->db->select('*');
    $this->db->from('tb_file');
    $this->db->join('tb_pns','tb_pns.id_pegawai = tb_file.id_pegawai');
    $this->db->where('tb_file.id_pegawai',$id_pegawai);
    $query = $this->db->get()->result();
    return $query;
  }

  function hapus_pns($id_pegawai){
    $this->db->where($id_pegawai);
    $this->db->delete('tb_pns');
  }

  function tambah_pns_up($tambah_pns){
    $this->db->insert('tb_pns',$tambah_pns);
  }


  //operator akhir


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

  public function pengumuman()
  {
    $this->db->where('kondisi','buka');
    $tampil = $this->db->get('tb_pengumuman')->result();
    return $tampil;
  }

}

 ?>
