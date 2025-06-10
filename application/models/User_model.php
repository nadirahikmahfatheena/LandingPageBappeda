<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_Model
{

  public function register($ens_password)
  {

    $data = array(
      'nama_user' => $this->input->post('nama_user'),
      'username' => $this->input->post('username'),
      'password' => $ens_password
    );
    
    return $this->db->insert('user', $data);
  }

  public function login($username, $password){
    // select * from user where username = $username and password = $password
    $this->db->where('username', $username);
    $this->db->where('password', $password);

    $sql = $this->db->get('user');
    // jika dapat 1 data row
    if($sql->num_rows() == 1){
      return $sql->row()->id_user;
    // jika data row tidak ditemukan
    } else {
      return false;
    }
  }
}