<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bappeda Provinsi Kalimantan Selatan</title>
    <link rel="icon" href="assets/img/logoprovinsi.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slide.css">
    <link rel="stylesheet" href="assets/css/scroll.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/split-type"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script defer src="app.js"></script>
    

    <!--nav hover-->
    <style type="text/tailwindcss">
      @layer utilities {
        .nav{
          @apply relative text-gray-500 hover:text-black 
        }
        .nav::after{
          @apply content-[''] bg-gray-500 h-[3px] w-[0%] left-0 -bottom-[5px]
          rounded-xl absolute duration-300
        }
        .nav:hover::after{
          @apply w-[100%]
        }
      }
    </style>
</head>


<body>
    <div>
        <nav class="sticky top-0 bg-white/75 backdrop-blur-lg grid grid-cols-2 py-2 px-14 z-50">
            <div class="ml-10">
                <a href=""><img src="assets/img/logohitam.png" id="logo" width="300'px"/></a>
            </div>
            <div class="flex justify-end gap-8 m-6 mx-7">
                <a href="#profil" class="nav">Beranda</a>
                <a href="#aplikasi" class="nav">Aplikasi</a>
                <a href="<?php echo site_url('tampil')?>" class="nav">Berita</a>
                <a href="#galeri" class="nav">Galeri</a>
                <a href="https://bappeda.kalselprov.go.id/data-indikator-makro/" class="nav">Data</a>
                <a href="https://bappeda.kalselprov.go.id/download-2/" class="nav">Download</a></a>
                <a href="#hubungikami" class="nav">Hubungi Kami</a>
            </div>
        </nav>

        <section id="profil" class="mt-3 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:justify-between md:items-center lg:px-48 md:px-12 px-4 ">
            <div class="md:flex-1 md:mr-10">
                <h1 id="text" class="text-5xl font-bold mb-5" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);">Ayo Ambil Bagian Dalam Pembangunan Banua Kita !</h1>
                <p class="font-normal mb-7 2xl:font-2xl">Survey Isu Pembangunan Berkelanjutan di Kalimantan Selatan</p>
                <div class="font-montserrat">
                <a href="https://bappeda.kalselprov.go.id/hasil-survei-isu-pembangunan/" class="px-6 py-3 rounded-full bg-gray-500 text-white hover:bg-lime-500 hover:text-white transition duration-300 ease-in">Hasil Survey</a>
                </div>
            </div>
            <div data-aos="fade-down" data-aos-duration="1000" class="flex justify-around md:block mt-8 md:mt-0 md:flex-1">
                <img src="https://i0.wp.com/bappeda.kalselprov.go.id/wp-content/uploads/2020/09/Bek-KLHS-01.png?w=1170&ssl=1" alt="" class="ml-10" />
            </div>
        </section>

        <section id="" class="bg-gray-50 mt-3 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-right md:flex-row md:justify-between md:items-center lg:px-48 md:px-12 px-4 ">
            <div class="flex justify-around md:block mt-8 md:mt-0 md:flex-1 py-5">
                <img src="assets/img/buku.png" alt="" class="" />
            </div>
            <div data-aos="fade-left" data-aos-duration="1000" class="md:flex-1 md:mr-10 ml-10">
                <h1 id="text" class="text-5xl font-bold mb-5" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);">
                Booklet<br>Geopark Meratus
                </h1>
                <p class="font-normal mb-7 2xl:font-2xl (data-scroll='out', data-splitting)">
                Panduan lengkap destinasi wisata alam dan budaya<br>di wilayah Geopark Meratus Kalimantan Selatan 
                </p>
                <div class="font-montserrat">
                <a href="" class="px-6 py-3 rounded-full bg-gray-500 text-white hover:bg-blue-700 hover:text-white transition duration-300 ease-in">Baca Di sini</a>
                </div>
            </div>
        </section>

<div id="aplikasi" class="py-24">        
<h1 class="font-bold mb-10 text-center text-3xl">Aplikasi</h1>
<div class="flex ">
    <div class="flex flex-row justify-center w-full gap-24">
        <div data-aos="fade-down" data-aos-duration="1000" class="flex-col w-64 h-full text-center">
            <div class="w-28 h-28 px-7 py-7 mb-2 rounded-lg m-auto bg-red-100">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b91c1c" className="w-6 h-6">
                <path fillRule="evenodd" d="M2.625 6.75a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875 0A.75.75 0 018.25 6h12a.75.75 0 010 1.5h-12a.75.75 0 01-.75-.75zM2.625 12a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zM7.5 12a.75.75 0 01.75-.75h12a.75.75 0 010 1.5h-12A.75.75 0 017.5 12zm-4.875 5.25a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875 0a.75.75 0 01.75-.75h12a.75.75 0 010 1.5h-12a.75.75 0 01-.75-.75z" clipRule="evenodd" />
                </svg>
            </div>
            <a href="http://eplanning.kalselprov.go.id/eplanning/" target="_blank" class="hover:text-red-700 font-semibold">E-Planning</a>
            <p>Sistem Informasi alat penyusunan RPJMD, RKPD, Renstra, Renja Pemerintah Daerah.</p>
        </div>

        <div data-aos="fade-down" data-aos-duration="1000" class="flex-col w-64 h-full text-center">
            <div class="w-28 h-28 px-7 py-7 mb-2 rounded-lg m-auto bg-orange-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="#ea580c" className="w-6 h-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <a href="https://app.bappedakalsel.tech/emonev/" target="_blank" class="hover:text-orange-700 font-semibold">E-Monev</a>
            <p>Sistem Informasi monitoring dan evaluasi program/kegiatan pembangunan yang dibiayai oleh APBD/APBN.</p>
        </div>

        <div data-aos="fade-down" data-aos-duration="1000" class="flex-col w-64 h-full text-center">
            <div class="w-28 h-28 px-7 py-7 mb-2 rounded-lg m-auto bg-amber-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="#f59e0b" className="w-6 h-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
            </div>
            <a href="https://e-sakip.kalselprov.go.id/" target="_blank" class="hover:text-amber-600 font-semibold">E-Sakip</a>
            <p>Sistem Akuntabilitas Kinerja Instansi Pemerintah secara elektronik.</p>
        </div>
    </div>
</div>

<div class="flex mt-10 mb-14">
    <div class="flex flex-row justify-center w-full gap-24">
        <div data-aos="fade-down" data-aos-duration="1000" class="flex-col w-64 h-full text-center">
            <div class="w-28 h-28 px-7 py-7 mb-2 rounded-lg m-auto bg-lime-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="#65a30d" className="w-6 h-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                </svg>
            </div>
            <a href="https://geoportal.kalselprov.go.id/WebPortal/" target="_blank" class="hover:text-lime-700 font-semibold">Geoportal</a>
            <p>Portal Web yang digunakan untuk menemukan dan mengakses informasi geografis dan layanan geografis.</p>
        </div>

        <div data-aos="fade-down" data-aos-duration="1000" class="flex-col w-64 h-full text-center">
            <div class="w-28 h-28 px-7 py-7 mb-2 rounded-lg m-auto bg-sky-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="#0284c7" className="w-6 h-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
            </div>
            <a href="https://monev.lkpp.go.id/" target="_blank" class="hover:text-sky-700 font-semibold">Tepra</a>
            <p> Tim Evaluasi dan Pengawasan Realisasi Anggaran.</p>
        </div>

        <div data-aos="fade-down" data-aos-duration="1000" class="flex-col w-64 h-full text-center">
            <div class="w-28 h-28 px-7 py-7 mb-2 rounded-lg m-auto bg-violet-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="#4c1d95" className="w-6 h-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                </svg>
            </div>
            <a href="https://skp.kalselprov.go.id/" target="_blank" class="hover:text-violet-900 font-semibold">SKP Online</a>
            <p>Aplikasi pengolahan Sasaran Kerja Pegawai berbasis online yang ada dalam salah satu unsur di dalam Penilaian Prestasi Kerja PNS.</p>
        </div>
    </div>
</div>
</div>


<div id="berita" class="py-24 bg-gray-50">
<div class="bg-gray-50 container mx-auto lg:px-20 md:px-7">
  <section class="text-black">

  <div class="text-center">
  <a href="http://localhost/bappeda/tampil" class="text-3xl font-bold">Berita</a>
  </div>

    <div class="grid lg:grid-cols-3 gap-6 mt-10">
      <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105" style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="light">
        <img src="https://i0.wp.com/bappeda.kalselprov.go.id/wp-content/uploads/2022/06/285129710_1116201582261231_6530754712634346722_n.jpg?w=1080&ssl=1" class="w-full" />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.4)">
            <div class="flex justify-start items-end h-full">
              <div class="text-white m-6">
                <h5 class="font-bold text-lg mb-2">Upacara Peringatan Hari Lahir Pancasila yang dilaksanakan terpusat di Lapangan Pancasila Ende Provinsi Nusa Tenggara Timur.</h5>
                <p>
                  <small>Published <u>07.01.2022</u></small>
                </p>
            </div>
            </div>
          </div>
        </a>
      </div>

      <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105" data-mdb-ripple="true" data-mdb-ripple-color="light">
        <img src="https://i0.wp.com/bappeda.kalselprov.go.id/wp-content/uploads/2022/06/285405060_748439453174644_5654234248174908113_n.jpg?w=1080&ssl=1" class="w-full" />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.4)">
            <div class="flex justify-start items-end h-full">
              <div class="text-white m-6">
                <h5 class="font-bold text-lg mb-2">Peringatan Hari Lingkungan Hidup Sedunia Tahun 2022</h5>
                <p>
                  <small>Published <u>12.01.2022</u></small>
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105" data-mdb-ripple="true" data-mdb-ripple-color="light">
        <img src="https://i0.wp.com/bappeda.kalselprov.go.id/wp-content/uploads/2022/06/285019658_403843758138797_395317383487061754_n.jpg?w=1080&ssl=1" class="w-full" />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.4)">
            <div class="flex justify-start items-end h-full">
              <div class="text-white m-6">
                <h5 class="font-bold text-lg mb-2">Penilaian Kinerja Pelaksanaan Aksi Konvergensi Penurunan Stunting</h5>
                <p>
                  <small>Published <u>10.01.2022</u></small>
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105" data-mdb-ripple="true" data-mdb-ripple-color="light">
        <img src="https://i0.wp.com/bappeda.kalselprov.go.id/wp-content/uploads/2022/02/1363062418.jpg?w=525&ssl=1" class="w-full" />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.4)">
            <div class="flex justify-start items-end h-full">
              <div class="text-white m-6">
                <h5 class="font-bold text-lg mb-2">RPJMD Kalsel Fokus pada Usaha Kesejahteraan Rakyat</h5>
                <p>
                  <small>Published <u>09.01.2022</u></small>
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105" data-mdb-ripple="true" data-mdb-ripple-color="light">
        <img src="https://i0.wp.com/bappeda.kalselprov.go.id/wp-content/uploads/2020/11/DSC3017.jpg?w=1616&ssl=1" class="w-full" />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.4)">
            <div class="flex justify-start items-end h-full">
              <div class="text-white m-6">
                <h5 class="font-bold text-lg mb-3">KLHS RPJMD 2021-2025</h5>
                <p>
                  <small>Published <u>07.01.2022</u></small>
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105" data-mdb-ripple="true" data-mdb-ripple-color="light">
        <img src="https://i0.wp.com/bappeda.kalselprov.go.id/wp-content/uploads/2021/03/ie.jpg?w=477&ssl=1" class="w-full" />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.4)">
            <div class="flex justify-start items-end h-full">
              <div class="text-white m-6">
                <h5 class="font-bold text-lg mb-3">BPS Prov Kalsel Rilis Perkembangan Ekspor & Impor Kalimantan Selatan 2021</h5>
                <p>
                  <small>Published <u>04.01.2022</u></small>
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

  </section>
</div>
</div>

<div id="galeri" class="py-24 bg-white">
<div class="w-full bg-white">
<div class="mb-10 font-bold text-center text-3xl">Galeri</div>
</div>

<div class="media-scroller media-scroller--with-groups snaps-inline">

  <!--   Group 1 -->
  <div class="media-group">
    <div class="media-element transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
      <img src="assets/img/foto1.jpeg" alt="">
    </div>
    <div class="media-element transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
      <img src="assets/img/foto2.jpeg" alt="">
    </div>
    <div class="media-element transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
      <img src="assets/img/foto3.jpeg" alt="">
    </div>
    <div class="media-element transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
      <img src="assets/img/foto4.jpeg" alt="">
    </div>
    <div class="media-element transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
      <img src="assets/img/foto5.jpeg" alt="">
    </div>
  </div>

  <!-- Group 2   -->
  <div class="media-group">
    <div class="media-element transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
      <img src="assets/img/foto1.jpeg" alt="">
    </div>
    <div class="media-element transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
      <img src="assets/img/foto2.jpeg" alt="">
    </div>
    <div class="media-element transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
      <img src="assets/img/foto3.jpeg" alt="">
    </div>
    <div class="media-element transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
      <img src="assets/img/foto4.jpeg" alt="">
    </div>
    <div class="media-element transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
      <img src="assets/img/foto5.jpeg" alt="">
    </div>
  </div>

  <!-- Group 3   -->
  <div class="media-group">
    <div class="media-element transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
      <img src="assets/img/foto1.jpeg" alt="">
    </div>
    <div class="media-element transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
      <img src="assets/img/foto2.jpeg" alt="">
    </div>
    <div class="media-element transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
      <img src="assets/img/foto3.jpeg" alt="">
    </div>
    <div class="media-element transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
      <img src="assets/img/foto4.jpeg" alt="">
    </div>
    <div class="media-element transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
      <img src="assets/img/foto5.jpeg" alt="">
    </div>
  </div>
</div>
</div>


        <footer id="hubungikami" class=" bg-gray-50">
            <div class="py-10 px-10 bg-gray-50 text-gray-500">
                <div class="">
                    <div class="flex flex-row justify-center gap-32">

                        <div class="">
                            <h4 class="text-black text-lg font-semibold mb-2">Menu Utama</h4>
                            <ul>
                                <li class="hover:text-black transition duration-300 ease-in-out"><a href="#profil">Profil</a></li>
                                <li class="hover:text-black transition duration-300 ease-in-out"><a href="#berita">Berita</a></li>
                                <li class="hover:text-black transition duration-300 ease-in-out"><a href="">Data</a></li>
                                <li class="hover:text-black transition duration-300 ease-in-out"><a href="">Download</a></li>
                                <li class="hover:text-black transition duration-300 ease-in-out"><a href="#galeri">Galeri</a></li>
                            </ul>
                        </div>

                        <div class="">
                            <h4 class="text-black text-lg font-semibold mb-2">Informasi</h4>
                            <p>Alamat : 
                                <a href="https://goo.gl/maps/A6AXir3FXewnnwE29" class="hover:text-black transition duration-300 ease-in-out">
                                    <br>Kawasan Perkantoran Pemerintah Provinsi<br>Jl. Dharma Praja No.I, Kelurahan Palam,<br>
                                    Kecamatan Cempaka Kota Banjarbaru,<br>Kalimantan Selatan (70731)</a>
                            </p>
                            <p class="mt-2">Jam Kerja : 
                                <a href="#" class="hover:text-black transition duration-300 ease-in-out"><br>Senin-Jumat, 8:00 am- 4:00 pm</a>
                            </p>
                        </div>

                        <div class="">
                            <h4 class="text-black text-lg font-semibold mb-2">Hubungi Kami</h4>
                            <p>Email :<a href="#" class="hover:text-black transition duration-300 ease-in-out"><br>bappeda@kalselprov.go.id</a></p>
                            <p class="mt-2">Telepon : 
                                <a href="#" class="hover:text-black transition duration-300 ease-in-out"><br>(0511) 6748643</a>
                                <a href="#" class="hover:text-black transition duration-300 ease-in-out"><br>(0511) 6749521</a>
                            </p>
                            <p class="mt-2">Fax : 
                                <a href="#" class="hover:text-black transition duration-300 ease-in-out"><br>(0511) 6749644</a>
                                <a href="#" class="hover:text-black transition duration-300 ease-in-out"><br>(0511) 6749521</a>
                            </p>
                        </div>
                        
                        <div class="">
                            <div class="">
                                <a href=""><img src="assets/img/logoprovinsi.png" id="logo" width="120px"/></a>
                            </div>
                            <div class="grid grid-cols-5 gap-3 w-48 mt-2 ml-2">
                                <a href="https://www.instagram.com/habarbappeda/"><img src="https://img.icons8.com/material-outlined/48/000000/instagram-new--v1.png"/></a>
                                <a href="https://www.facebook.com/bappedaprovkalsel?mibextid=ZbWKwL"><img src="https://img.icons8.com/material-outlined/48/000000/facebook-new.png"/></a>
                                <a href="https://youtube.com/@bappedaprov.kalsel1182"><img src="https://img.icons8.com/material-outlined/48/000000/youtube-play--v1.png"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full bg-gray-100 text-gray-500 p-2 px-4 ">
                <div class="flex justify-center">
                    <div class="text-center text-sm">
                        <div class="font-semibold mt-2 text-sm">
                        © Copyright Bappeda Provinsi Kalimantan Selatan
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
    <script src="assets/js/main.js"></script>    
    <script src="assets/js/carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script>
      let text = new SplitType('#text');
      let characters = document.querySelectorAll('.char');

      for(i=0; i<characters.length; i++){
        characters[i].classList.add('translate-y-full');
      }

      gsap.to('.char', {
        y: 0,
        stagger: 0.05,
        delay: 0.02,
        duration: 0.4
      })
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>
    
</body>

</html>