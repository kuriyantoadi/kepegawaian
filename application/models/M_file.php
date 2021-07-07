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
}

 ?>
