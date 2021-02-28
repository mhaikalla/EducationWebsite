<?php if ($Details['ID_Provinsi'] != "") : ?>
    ?>
    <section class="page-section bg-light mt-5 pb-3 pb-5  mb-0" id="Head">
        <div class="container">
            <div class="jumbotron jumbotron-fluid py-5">

                <div class="row text-center mb-5">
                    <div class="col">
                        <h5 class="">Detail Tari Adat</h5>
                    </div>
                </div>
                <div class="d-flex justify-content-around">
                    <div class="col-6 pt-3">
                        <h3 class="display-4">Provinsi <?= $Details['nama']; ?></h3>
                        <hr class="my-3 bg-secondary">
                        <h4 class="lead"><?= $Details['Ibukota']; ?> </h4>
                    </div>
                    <div class="col-4 pt-0">
                        <div class="card" style="width: 18rem;">
                            <img src="<?= base_url('Upload/Tarian/');
                                            echo $Details['Foto_Tarian']; ?>.jpg" class="card-img-top">
                            <div class="card-body ">
                                <h4 class="card-title text-center lead py-0"><?= $Details['Tarian']; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr class="mx-5 my-0 bg-warning">
    </section>
<?php else :  ?>
    <section class="page-section bg-light mt-5 pb-3 mb-0" id="Head">
        <div class="container">
            <div class="jumbotron jumbotron-fluid py-5">
                <div class="container">
                    <h3 class="display-4">Data Tidak Tersedia</h3>
                    <hr class="mx-5 my-0 bg-secondary">
                    <h4 class="lead">Data rincian tentang Tarian adat lagi tidak tersedia</h4>
                    <p>404 File Not Found</p>
                </div>
            </div>
    </section>
<?php endif;  ?>


<!-- Portfolio Grid -->
<?php if ($Details['Deskripsi'] != "") : ?>
    <section class="page-section py-0 mt-0" id="Deskripsi">
        <div class="mt-0">
            <div class="container">
                <div class="col-lg-12 text-center mt-5">
                    <p class="row justify-content-between">
                        <div class="col">
                            <?= $Details['Deskripsi'] ?>
                        </div>
                    </p>
                </div>
            </div>
    </section>
<?php endif; ?>

<!-- Portfolio Grid -->
<?php if ($Details['gerakan'] != "") : ?>
    <section class="page-section bg-warning text-white py-5 mt-0" id="Gerakan">
        <div class="mt-0">
            <div class="container">
                <div class="col-lg-12 text-left mt-5">
                    <p class="row justify-content-between">
                        <div class="col">
                            <?= $Details['gerakan'] ?>
                        </div>
                    </p>
                </div>
            </div>
    </section>
<?php endif; ?>

<?php if ($Details['Penjelasan_Detail'] != "") : ?>
    <section class="page-section bg-secondary text-white py-5 mt-0" id="Penjelasan_Detail">
        <div class="mt-0">
            <div class="container">
                <div class="col-lg-12 text-left mt-5">
                    <p class="row justify-content-between">
                        <div class="col">
                            <?= $Details['Penjelasan_Detail'] ?>
                        </div>
                    </p>
                </div>
            </div>
    </section>
<?php endif; ?>
<?php if ($Details['Link_Video'] != "") : ?>
    <section class="py-5 bg-white">
        <div class="container">
            <h3 class="Text-white text-center">Video Terkait</h3>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="<?= $Details['Link_Video'] ?>" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>