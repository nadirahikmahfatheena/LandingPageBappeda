<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ubah Data berita</title>
    <link rel="icon" href="http://localhost/bappeda/assets/img/logoprovinsi.png">
</head>

<body>
    <div class="flex justify-center items-center h-screen w-full" style="background-image: url(../img/blue.jpg); background-size: cover; background-repeat: no-repeat;">
        <div class="w-[500px] bg-gray-100 bg-opacity-70 rounded-lg shadow-2xl px-6 m-4">
            <form action="" method="POST" class="m-10 bg-gray-100 rounded-lg">
            <div class="flex flex-col mb-4">
                    <label class="mb-1 font-bold text-gray-900"></label>
                    <input class="border py-1 px-3 text-grey-800" input type="hidden" value="<?php echo $berita->id ?>" name="id" >
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-1 font-bold text-gray-900">Judul</label>
                    <input class="border py-1 px-3 text-grey-800" input type="text" value="<?php echo $berita->judul ?>" name="judul" >
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-1 font-bold text-gray-900">Tanggal Terbit</label>
                    <input class="border py-1 px-3 text-grey-800" input type="date" value="<?php echo $berita->tglterbit ?>" name="tglterbit" class="mb-2" >
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-1 font-bold text-gray-900">Kategori</label>
                    <input class="border py-1 px-3 text-grey-800" input type="text" value="<?php echo $berita->kategori ?>" name="kategori" class="mb-2" >
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-1 font-bold text-gray-900">Isi Berita</label>
                    <input class="border py-1 px-3 text-grey-800" input type="text" value="<?php echo $berita->isi_berita ?>" name="isi_berita" class="mb-2" >
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-1 font-bold text-gray-900">Gambar</label>
                    <input class="text-grey-800" input type="file" value="<?php echo $berita->gambar ?>" name="gambar" class="mb-2" >
                </div>
                <div class="flex justify-center">
                    <div class="">
                        <input type="submit" class="bg-gray-500 hover:bg-gray-400 text-white uppercase text-sm font-semibold mr-2 py-2 px-9 rounded-full" value="Simpan">
                        <a href="<?php echo base_url('berita') ?>" class="bg-gray-500 hover:bg-gray-400 text-white uppercase text-sm font-semibold ml-2 py-2 px-9 rounded-full"> Kembali </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>