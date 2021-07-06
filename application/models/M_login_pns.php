<?php

class M_login_pns extends CI_Model{

  //tampil buku
  function auth_login($username, $password){
    $login = $this->db->query("SELECT * from tb_pns where username='$username' AND password=md5('$password') ");
    return $login;
  }


}

 ?>
