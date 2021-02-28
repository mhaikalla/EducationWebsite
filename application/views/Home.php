<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    <link rel="icon" type="image/png" href="<?= base_url("") ?>assets\img\Icon\Wayang_48_Yellow.png">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/') ?>css/agency.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Budaya Nusantara</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Makanan">Makanan Khas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Tarian">Tari Adat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Rumah">Rumah Adat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?= base_url('About'); ?>">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead" style="background-image: url('<?php echo base_url('assets/img/bg-header.jpg') ?>');" id="Head">
        <div class="container">
            <div class="intro-text">
                <h1 class="intro-lead">Selamat Datang di Website Budaya Nusantara</h1>
                <hr class="bg-white">
                <p>Website ini dapat memberikan pengetahuan mengenai berbagai budaya-budaya yang ada di Indonesia seperti Makanan Khas, Tari Adat dan Rumah Adat</p>
                <br>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#Makanan">Telusuri</a>
            </div>
        </div>
    </header>

    <!-- Image Showcases -->
    <div class="showcase">
        <div class="container-fluid p-0">
            <div class="row no-gutters bg-white" id="Makanan">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('<?php echo base_url('assets/') ?>img/Makanan.jpg');"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Makanan Khas</h2>
                    <p class="lead mb-0">Berisi informasi informasi makanan khas dari 34 provinsi</p>
                    <hr class="bg-secondary"> <br>
                    <a class="btn btn-primary btn-md js-scroll-trigger text-white" href="<?= base_url('/Makanan/index') ?>">Kunjungi</a>
                </div>
            </div>
            <div class="row no-gutters bg-light " id="Tarian">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url('<?php echo base_url('assets/') ?>img/Tarian.jpg');"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Tarian</h2>
                    <p class="lead mb-0">Berisi informasi informasi Tari-tari adat dari 34 provinsi</p>
                    <hr class="bg-secondary"> <br>
                    <a class="btn btn-primary btn-md js-scroll-trigger text-white" href="<?= base_url('/Tarian/index') ?>">Kunjungi</a>
                </div>
            </div>
            <div class="row no-gutters bg-dark text-white" id="Rumah">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('<?php echo base_url('assets/') ?>img/Rumah.jpg');"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Rumah Adat</h2>
                    <p class="lead mb-0">Berisi informasi informasi Rumah Adat dari 34 provinsi</p>
                    <hr class="bg-white"> <br>
                    <a class="btn btn-primary btn-md js-scroll-trigger text-white" href="<?= base_url('/Rumah/index') ?>">Kunjungi</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center py-5 ">
            <a class="btn btn-primary btn-md js-scroll-trigger" href="#Head">Back to Top</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item">
                            <a class="js-scroll-trigger " href="#Head">Home</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="<?= base_url('About') ?>">About</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; Pengenalan Budaya Nusantara 2019. All Rights Reserved.</p>
                    <a href="<?= base_url('Backend/Makanan') ?>" class="btn btn-dark text-dark btn-sm">Backend</a>

                </div>
                <div class="col-lg-6 h-100 text-center text-lg-right my-auto">

                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?= base_url('assets/') ?>js/jqBootstrapValidation.js"></script>
    <script src="<?= base_url('assets/') ?>js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?= base_url('assets/') ?>js/agency.min.js"></script>

</body>

</html>