<?php 
    $nama = $_POST['nama'];
    $univ = $_POST['univ'];
    $kota = $_POST['kota'];
    $lahir = $_POST['lahir'];
    $alamat = $_POST['alamat'];
    $jenis = $_POST['jenis'];
    $nrp = $_POST['nrp'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $github = $_POST['github'];
    $linkedin = $_POST['linkedin'];
    $instagram = $_POST['instagram'];
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="show.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <title><?= $nama; ?></title>
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#256eeb" fill-opacity="1"
            d="M0,192L34.3,170.7C68.6,149,137,107,206,112C274.3,117,343,171,411,170.7C480,171,549,117,617,106.7C685.7,96,754,128,823,138.7C891.4,149,960,139,1029,138.7C1097.1,139,1166,149,1234,138.7C1302.9,128,1371,96,1406,80L1440,64L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
        </path>
    </svg>
    <div class="row d-flex flex-row w-100">
        <div class="col-5">
            <div data-aos="slide-right" data-aos-duration="1000" class="container"></div>
        </div>
        <div data-aos="zoom-in" data-aos-duration="1000" class="isi p-4 col-7">
            <ul class="nav d-flex flex-row justify-content-center">
                <li data-aos="zoom-in" data-aos-duration="1000" class="nav-item">
                    <a href="<?= $github ?>" class="nav-link waves-effect" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                </li>
                <li data-aos="zoom-in" data-aos-duration="1000" class="nav-item">
                    <a href="<?= $linkedin ?>" class="nav-link waves-effect" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
                <li data-aos="zoom-in" data-aos-duration="1000" class="nav-item">
                    <a href="<?= $instagram ?>" class="nav-link waves-effect" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>

            <h4>Halo, Saya</h4>
            <h1><?= $nama; ?></h1>
            <h4 class="univ"><?= $univ; ?> - <?= $kota; ?></h4>
            <div class="mt-3 info d-flex flex-row align-items-center">
                <h4>Info Pribadi</h4>
                <div class="line"></div>
            </div>
            <div class="content row">
                <div class="col-6 d-flex flex-row">
                    <div class="col6 d-flex flex-column align-items-center">
                        <li><i class="fas fa-venus-mars"></i></li>
                        <li><i class="fas fa-calendar-alt"></i></li>
                        <li><i class="fas fa-map-marker-alt"></i></li>
                        <li><i class="fas fa-graduation-cap"></i></li>
                        <li><i class="fas fa-building"></i></li>
                        <li><i class="fas fa-id-card"></i></li>
                    </div>
                    <div class="text col-6 d-flex flex-column justify-content-between">
                        <li>Jenis Kelamin</li>
                        <li>Tanggal Lahir</li>
                        <li>Alamat</li>
                        <li>Jurusan</li>
                        <li>Kelas</li>
                        <li>NRP</li>
                    </div>
                </div>
                <div class="text col-6 d-flex flex-column justify-content-between">
                    <li><?= $jenis; ?></li>
                    <li><?= $lahir; ?></li>
                    <li><?= $alamat; ?></li>
                    <li><?= $jurusan; ?></li>
                    <li><?= $kelas; ?></li>
                    <li><?= $nrp; ?></li>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>