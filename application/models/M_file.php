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
    $this->db->where('tb_file.id_pegawai',$ses_id);
    $query = $this->db->get();
    return $query;
 }

   function cari_file_view($kode_file){
     $this->db->where($kode_file);
     $hasil = $this->db->get('tb_file')->result();
     return $hasil;
   }


//permintaan file
   function tampil_permintaan(){
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



}

 ?>
