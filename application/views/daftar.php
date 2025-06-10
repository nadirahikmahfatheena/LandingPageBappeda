<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Daftar</title>
    <link rel="icon" href="http://localhost/bappeda/assets/img/logoprovinsi.png">
</head>

<body class="bg-gray-200">
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="px-8 py-6 mx-4 text-left bg-white shadow-lg w-1/4 rounded-lg">
            <div class="flex justify-center">
                <h1 class="text-2xl font-bold">Daftar</h1>
            </div>
            <form action="<?= base_url('user/daftar') ?>" method="post">
                <div class="mt-4">
                <?= validation_errors(); ?>
                    <?= $this->session->flashdata('gagal_daftar'); ?>
                    <div class="mt-4">
                        <label class="block" for="name">Nama Lengkap<label>
                        <input type="text" name="nama_user" placeholder="Nama Lengkap" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-gray-600">
                    </div>
                    <div class="mt-4">
                        <label class="block" for="username">Username<label>
                        <input type="text" name="username" placeholder="Username" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-gray-600">
                    </div>
                    <div class="mt-4">
                        <label class="block">Password<label>
                        <input type="password" name="password" placeholder="*******" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-gray-600">
                    </div>
                    <div class="flex">
                        <button class="w-full px-6 py-2 mt-4 mb-2 text-white bg-gray-600 rounded-lg transition hover:bg-gray-700">Daftar</button>
                    </div>
                    <a href="<?php echo base_url('user/login') ?>" class=" text-xs text-gray-500 hover:underline">Already have an account? Login here</a>
                </div>
            </form>
        </div>
    </div>
</body>


</html>