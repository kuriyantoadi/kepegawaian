<?php

class M_file extends CI_Model{

  //tampil buku
  function cari_data($ses_id){
    $this->db->where('id_file', $ses_id);
    $hasil = $this->db->get('tb_file')->result();
    return $hasil;
  }

 function cari_file($ses_id){
    $this->db->select('*');
    $this->db->from('tb_file');
    $this->db->join('tb_pns','tb_pns.id_pegawai = tb_file.id_pegawai');
    $this->db->join('tb_permintaan_file','tb_permintaan_file.id_keterangan = tb_file.id_keterangan');
    $this->db->where('tb_file.id_pegawai',$ses_id);
    $query = $this->db->get();
    return $query;
 }

 function tampil_berkas_umum($ses_id){
    $this->db->select('*');
    $this->db->from('tb_file');
    $this->db->join('tb_pns','tb_pns.id_pegawai = tb_file.id_pegawai');
    $this->db->join('tb_permintaan_file','tb_permintaan_file.id_keterangan = tb_file.id_keterangan');
    $this->db->where('tb_file.id_pegawai',$ses_id);
    $this->db->where('tb_permintaan_file.kondisi','umum');
    $query = $this->db->get();
    return $query;
 }

//relasi tb_permintaan_file + tb_
   function cari_file_view($kode_file){
     $this->db->select('*');
     $this->db->from('tb_file');
     $this->db->join('tb_permintaan_file','tb_permintaan_file.id_keterangan = tb_file.id_keterangan');
     $this->db->where($kode_file);
     $query = $this->db->get()->result();
     return $query;
   }


//permintaan file
   function tampil_permintaan(){
     $this->db->where('kondisi','umum');
     $tampil = $this->db->get('tb_permintaan_file')->result();
     return $tampil;
   }

   function tampil_permintaan_op(){
     $tampil = $this->db->get('tb_permintaan_file')->result();
     return $tampil;
   }

  public function tambah_permintaan($kode_tambah)
  {
    $this->db->insert('tb_permintaan_file',$kode_tambah);
  }

  public function hapus_permintaan($id_keterangan)
  {
    $this->db->where($id_keterangan);
    $this->db->delete('tb_permintaan_file');
  }

  public function cari_data_permitaan($kode_permintaan){
    $this->db->where($kode_permintaan);
    $hasil = $this->db->get('tb_permintaan_file')->result();
    return $hasil;
  }

  function edit_permintaan($data_pns, $kode_permintaan){
    $this->db->where($kode_permintaan);
    $this->db->update('tb_permintaan_file',$data_pns);
  }

//naik pangkat
  function naik_pangkat($ses_id){
    $this->db->select('*');
    $this->db->from('tb_file');
    $this->db->join('tb_pns','tb_pns.id_pegawai = tb_file.id_pegawai');
    $this->db->join('tb_permintaan_file','tb_permintaan_file.id_keterangan = tb_file.id_keterangan');
    $this->db->where('tb_file.id_pegawai',$ses_id);
    $this->db->where('tb_permintaan_file.kondisi','naik_pangkat');
    $query = $this->db->get();
    return $query;
  }

  function permintaan_naik_pangkat(){
    $this->db->where('kondisi','naik_pangkat');
    $tampil = $this->db->get('tb_permintaan_file')->result();
    return $tampil;
  }

// naik gaji
  function naik_gaji($ses_id){
    $this->db->select('*');
    $this->db->from('tb_file');
    $this->db->join('tb_pns','tb_pns.id_pegawai = tb_file.id_pegawai');
    $this->db->join('tb_permintaan_file','tb_permintaan_file.id_keterangan = tb_file.id_keterangan');
    $this->db->where('tb_file.id_pegawai',$ses_id);
    $this->db->where('tb_permintaan_file.kondisi','naik_gaji');
    $query = $this->db->get();
    return $query;
  }

  function permintaan_naik_gaji(){
    $this->db->where('kondisi','naik_gaji');
    $tampil = $this->db->get('tb_permintaan_file')->result();
    return $tampil;
  }

// tunjungan
    function tunjangan($ses_id){
      $this->db->select('*');
      $this->db->from('tb_file');
      $this->db->join('tb_pns','tb_pns.id_pegawai = tb_file.id_pegawai');
      $this->db->join('tb_permintaan_file','tb_permintaan_file.id_keterangan = tb_file.id_keterangan');
      $this->db->where('tb_file.id_pegawai',$ses_id);
      $this->db->where('tb_permintaan_file.kondisi','tunjangan_keluarga');
      $query = $this->db->get();
      return $query;
    }

    function permintaan_tunjangan(){
      $this->db->where('kondisi','tunjangan_keluarga');
      $tampil = $this->db->get('tb_permintaan_file')->result();
      return $tampil;
}

}

 ?>
