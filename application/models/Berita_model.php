<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model
 {
    private $_table = "berita";  

    public $id;
    public $judul;
    public $tglterbit;
    public $kategori;
    public $isi_berita;
    public $gambar;

	public function rules()
	{
		return [
            [
            "field" => "judul",
            "label" => "Judul",
            "rules" => "required"
            ],
            [
            "field" => "tglterbit",
            "label" => "Tanggal Terbit",
            "rules" => "required"
            ],
            [
            "field" => "kategori",
            "label" => "Kategori",
            "rules" => "required"
            ],
            [
            "field" => "isi_berita",
            "label" => "Isi Berita",
            "rules" => "required"
            ],
            [
            "field" => "gambar",
            "label" => "Gambar",
            "rules" => "required"
            ]
            ];

	}

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getID($id)
    {
        return $this->db->get($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->judul = $post["judul"];
        $this->tglterbit = $post["tglterbit"];
        $this->kategori = $post["kategori"];
        $this->isi_berita = $post["isi_berita"];
        $this->gambar = $post["gambar"];
        return $this->db->insert($this->_table,
        $this);
    }

    public function update()
        {
            $post = $this->input->post(); 
            $this->id = $post["id"];
            $this->judul = $post["judul"];
            $this->tglterbit = $post["tglterbit"];
            $this->kategori = $post["kategori"];
            $this->isi_berita = $post["isi_berita"];
            $this->gambar = $post["gambar"];
            return $this->db->update($this->_table, $this,  array('id' => $post ['id']));
        }

        public function delete($id)
        {
            return $this->db->delete($this->_table, array('id' => $id ));
        }
}