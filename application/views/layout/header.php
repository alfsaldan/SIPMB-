<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistem Informasi PMB</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/') ?>css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Impact
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>SIPMB<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    
                    <li><a href="<?= site_url('landing/') ?>#hero">Home</a></li>
                    <li><a href="<?= site_url('landing/formulir') ?>">Formulir</a></li>
                    <li><a href="<?= site_url('landing/berita') ?>">Berita & Artikel</a></li>
                    <li><a href="<?= site_url('landing/jadwal') ?>">Jadwal dan Biaya</a></li>
                    <li><a href="<?= site_url('landing/prodi') ?>">Program Studi</a></li>

                    <?php
                    if ($user) { ?>
                    <li><a href="<?= site_url('landing/riwayat') ?>">Riwayat Pendaftaran</a></li>
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow p-0">
                            <div class="avatar avatar-online">
                            <img src="<?= base_url('assets/img/pendaftar/'). $user['gambar']; ?> " alt
                                    class="w-px-40 h-auto rounded-circle" style="width : 40px; height : 40px;" />
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                            <li>
                                <a class="dropdown-item pb-2 mb-1" href="">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0"><?= $user['nama']; ?></h6>
                                            <small class="text-muted"><?= $user['role']; ?></small>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="<?= base_url(); ?>auth/logout ">
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php } else {
                ?>
                    <div class="d-flex align-items-center ms-3 ms-lg-5" id="">
                        <!--begin::User info-->
                        <a href="<?= base_url(); ?>auth/"
                            class="btn btn-danger btn-sm p-1 gap-1 d-flex justify-content-center align-items-center">
                            <i class="bi bi-person" style="font-size : 20px"></i>
                            <span>Login</span>
                        </a>
                        <!--end::User info-->
                    </div>
                    <?php } ?>




                    <!-- <div class="ms-4">
                <img src=""
                  alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3"
                  style="width: 50px;">
              </div> -->
                    <!--end::User info-->
        </div>
        </ul>
        </nav><!-- .navbar -->

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->