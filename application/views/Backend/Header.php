<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title><?= $judul ?></title>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top mb-5">
        <span class="navbar-brand mb-0 h1">Pengenalan Budaya (Backend)</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="<?= base_url('Backend/Makanan') ?>">Makanan Khas</a>
                <a class="nav-item nav-link" href="<?= base_url('Backend/Rumah') ?>">Rumah Adat</a>
                <a class="nav-item nav-link" href="<?= base_url('Backend/Tarian') ?>">Tarian Adat</a>
            </div>
        </div>
    </nav>
</head>

<body>