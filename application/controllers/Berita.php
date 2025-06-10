<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("berita_model");
		$this->load->library('form_validation');
	}
	

	public function index()
	{
        $this->load->view('nav');
		$data["berita"] = $this->berita_model->getAll();
		$this->load->view('tampil_berita', $data);
	}

	public function simpan()
	{
		$berita = $this->berita_model; //menentukan objek model
		$validasi = $this->form_validation; //menentukan objek valdidasi form
		$validasi ->set_rules($berita->rules()); //menentukan posisi function rules pada model

		if ($validasi->run()) { //menjalankan validasi form
			$insert = $berita->save(); // menyimpan data form ke db
			if($insert) {
			echo '<script>alert("Data Berhasil Di simpan");window.location.href = "' .site_url("berita"). '";</script>';
		} else{
			echo '<script>alert("Data Gagal Di simpan");window.location.href = "' .site_url("berita/simpan"). '";</script>';
		}
		}
		$this->load->view("tambah_berita"); //menampilkan halaman tambah berita
	}

	public function ubah($id = null) //menentukam paramater id menjadi null / kosong
	{
		if (!isset($id)) redirect('berita'); //logika jika id yang dipanggil masih belum ada / kosong

		$berita = $this->berita_model; //menentukan objek model
		$validasi = $this->form_validation; //menentukan objek validasi form
		$validasi->set_rules($berita->rules()); //menentukan posisi function rules pada model

		if ($validasi->run()) { //menjalankan validasi form
			$insert = $berita->update(); //menyimpan data form update ke db
			
			if($insert) {
				echo '<script>alert("Data Berhasil Di ubah");window.location.href = "' .site_url("berita"). '";</script>';
			}else{
				echo '<script>alert("Data Gagal Di ubah");window.location.href = "' .site_url("berita/ubah"). '";</script>';
			}
			}

		$data["berita"] = $berita->getID($id); //memanggil data berdasarkan id yang dipilih
		if (!$data["berita"]) show_404(); // mengecek data jika kosong maka akan menampilkan halaman eror / halaman 404
		$this->load->view("ubah_berita", $data); // memanggil data berita ke halaman ubah berita berdasarkan id
	}

	public function hapus($id = null) //menentukam paramater id menjadi null / kosong
	{
		$berita = $this->berita_model; //menentukan objek model
		if(!isset($id)) show_404(); // mengecek data jika kosong maka akan menampilkan halaman eror / halaman 404

		if($berita->delete($id)) { //menghapus data berdasarkan id di database
			redirect(site_url('berita')); //menampilkan halaman berita
		}
	}
}