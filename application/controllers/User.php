<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->helper('url', 'form');
    $this->load->library(array('form_validation', 'session'));
  }

  //Bagian Login

  public function index()
  {
    $this->load->view('tampil_berita');
  }

  //Bagian Resgister

  public function daftar()
  {
    $data['title'] = 'Daftar';

    // Validasi Data Form
    $this->form_validation->set_rules('nama_user', 'Nama User', 'required', 
    [
      'required' => 'Nama lengkap harus di isi'
    ]
    );
    $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists|min_length[6]',
    [
      'min_length' => 'Username minimal 6 huruf atau angka',
      'check_username_exists' => 'username sudah dipakai, silahkan login',
      'required' => 'Username harus di isi'
    ]
    );
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[30]',
    [
      'min_length' => 'Masukkan password minimal 6 huruf ataupun angka',
      'max_length' => 'Password maksimal hanya 30 saja',
      'required' => 'Password harus di isi'
    ]
    );

    // Jika Gagal Daftar
    if ($this->form_validation->run() === FALSE) {
      $this->load->view('daftar', $data);

      // Jika Berhasil Daftar
    } else {

      // Untuk Mengenskripsi Data Password
      $ens_password = md5($this->input->post('password'));
      $this->user_model->register($ens_password);

      // Untuk Menampilkan Pesan Data
      $this->session->set_flashdata('Berhasil Daftar', 'Selamat Kamu Berhasil Terdafatar! Silahkan Log In');

      redirect('user/login');
    }
  }

  public function check_username_exists($username)
  {

    $sql = $this->db->get_where('user', ["username" => $username])->row(); // tidak perlu ->row() di if(empty($sql->row())) 
    // $sql = $this->db->get_where('user', array("username" => $username)); // perlu ->row() di if(empty($sql->row()))

    if (empty($sql)) {
      return true;
    } else {
      return false;
    }
  }

  public function login()
  {

    // validasi username & password
    $this->form_validation->set_rules('username', 'Username', 'required',
    [
      'required' => 'Username wajib di isi'
    ]
    );
    $this->form_validation->set_rules('password', 'Password', 'required',
    [
      'required' => 'password wajib di isi'
    ]
    );

    // validasi gagal:
    if ($this->form_validation->run() === FALSE) {
      $this->load->view('login');

    // validasi berhasil
    } else {


      // GET Username
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));

      // Get into the model
      $data = $this->user_model->login($username, $password);

      // Create Session
      if ($data) {
        $user = array(
          'id_user' => $data,
          'username' => $username,
          'logged_in' => true
        );
       
        $this->session->set_userdata($user);

        $this->session->set_flashdata('berhasil_login', 'Selamat datang');
        redirect('');
      } else {
        $this->session->set_flashdata('gagal_login', 'Username atau password salah!');
        redirect('user/login');
      }
    }
  } 

  public function logout()
  {
    $this->session->unset_userdata('logged_in');
    $this->session->unset_userdata('username');

    $this->session->set_flashdata('user_logout', 'Sampai jumpa Nanti kapan kapan');

    redirect('user/login');
  }
}