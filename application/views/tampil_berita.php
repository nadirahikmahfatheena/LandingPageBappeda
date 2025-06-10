<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bappeda Provinsi Kalimantan Selatan</title>
    <link rel="icon" href="assets/img/logofix.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="icon" href="http://localhost/bappeda/assets/img/logoprovinsi.png">
</head>

<body>
            <div class="flex justify-center mb-5 text-black">
                <h1 class="font-bold text-2xl">Data Berita</h1>
            </div>

        <center>
            <div class="flex justify-center">
                <table class="table-auto shadow-md">
                    <thead>
                        <tr class="bg-gray-100 text-black">
                            <th class="border-b-2 border-[#DDDDDD] w-30 text-left p-2 mx-2">ID Berita</th>
                            <th class="border-b-2 border-[#DDDDDD] w-52 text-left p-2 mx-2">Judul Berita</th>
                            <th class="border-b-2 border-[#DDDDDD] w-52 text-left p-2 mx-2">Tanggal Terbit</th>
                            <th class="border-b-2 border-[#DDDDDD] w-52 text-left p-2 mx-2">Berita</th>
                            <th class="border-b-2 border-[#DDDDDD] w-52 text-left p-2 mx-2">Gambar</th>
                            <th class="border-b-2 border-[#DDDDDD] w-24 text-left p-2 mx-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($berita as $s) : ?>
                            <tr class="bg-white">
                                <td class="border-b-2 border-[#DDDDDD] p-3"> <?php echo $s->id ?> </td>
                                <td class="border-b-2 border-[#DDDDDD] p-3"> <?php echo $s->judul ?> </td>
                                <td class="border-b-2 border-[#DDDDDD] p-3"> <?php echo $s->tglterbit ?> </td>
                                <td class="border-b-2 border-[#DDDDDD] p-3"> <?php echo $s->isi_berita ?> </td>
                                <td class="border-b-2 border-[#DDDDDD] p-3"> <?php echo $s->gambar ?> </td>
                                <td class="border-b-2 border-[#DDDDDD] p-3">
                                    <a href="<?php echo site_url('berita/ubah/' . $s->id) ?>" class="">📝</a> |
                                    <a href="<?php echo site_url('berita/hapus/' . $s->id) ?>" class="">🗑</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="mt-3 flex justify-center">
                <a href="<?php echo base_url('berita/simpan') ?>" class="text-decoration-none">
                    <h1 class="text-white font-medium rounded-lg p-1 px-2 bg-gray-500 hover:bg-gray-400">Tambah Berita</h1>
                </a>
            </div>
        </center>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#table_id').DataTable({
                    paging: false,
                    ordering: false,
                    info: false,
                });
            });
        </script>
</body>

</html>