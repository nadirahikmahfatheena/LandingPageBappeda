<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bappeda Provinsi Kalimantan Selatan</title>
    <link rel="icon" href="<?php base_url('assets/img/logofix.png'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="bg-gray-100 mx-64 my-10 px-4 py-3 rounded-md shadow-md">
        <div class="py-1 text-center text-black">
            <h5> Tambah Data Berita </h5>
        </div>
        <form action="<?= base_url('berita/simpan'); ?>" method="post">
        <div class="ml-4 mt-3 ">
            <?= validation_errors(); ?>
        </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">Judul Berita</label>
                    <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Berita">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kategori</label>
                    <input type="text" name="kategori" class="form-control" placeholder="Masukkan Kategori Berita">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Terbit</label>
                    <input type="date" name="tglterbit" class="form-control" placeholder="Masukkan Tanggal Terbit">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Berita</label>
                    <input type="text" name="isi_berita" class="form-control" placeholder="Masukkan Berita">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Gambar</label>
                    <input type="file" name="gambar" class="form-control" placeholder="Masukkan Gambar">
                </div>
                <div class="flex justify-center">
                    <input type="submit" value="Simpan" class="w-full py-1.5 bg-gray-500 text-white font-medium rounded hover:bg-gray-400 transition duration-200">
                </div>
        </form>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>