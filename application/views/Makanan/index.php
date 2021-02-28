<div class="page-section py-auto" id="Head">
    <div class="jumbotron my-auto">
        <div class=" text-center">
            <h2 class="section-heading text-uppercase">Makanan Khas </h2>
            <hr class="my-5 w-75">
            <p>Halaman yang menampilkan seluruh informasi makanan adat terkenal dari berbagai provinsi </p>
        </div>

        <form action="<?= base_url('index.php/Makanan/cariMakanan') ?>" action="GET">
            <input type="text" class="form-control w-50 mt-5 mx-auto" id="keyword" name="keyword" placeholder="Cari Makanan, Nama Provinsi disini">
            <input class="btn btn-primary btn-l d-block w-25 mx-auto mt-4" type="submit" id="Cari" name="Cari" value="Cari Makanan">
        </form>
    </div>

    <div class="bg-light pt-3 pb-5">
        <div class="container">
            <div class="col-lg-12 text-center my-5">
                <h4 class="section-heading text-uppercase">Sumatera</h4>

            </div>
            <div class="">
                <div class="card-columns">
                    <?php foreach ($Makanan_Sumatera as $mkn) : ?>
                    <div class="img-fluid card">
                        <img src="<?= base_url('Upload/Makanan/');
                                        echo $mkn['Foto_Makanan']; ?>.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $mkn['Makanan']; ?></h5>
                            <hr class="my-3">
                            <p class="card-text small-text mb-0">Provinsi <?= $mkn['Nama']; ?></p>
                            <p class="card-text small-text"><?= $mkn['Ibukota']; ?></p>
                            <a class="btn btn-primary btn-sm js-scroll-trigger text-white" href="<?= base_url() ?>Makanan/Detail/<?= $mkn['ID_Provinsi']; ?>">Read More</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-3 pb-5">
        <div class="container">
            <div class="col-lg-12 text-center my-5">
                <h4 class="section-heading text-uppercase">Jawa</h4>

            </div>
            <div class="card-columns">
                <?php foreach ($Makanan_Jawa as $mkn) : ?>
                <div class="img-fluid card">
                    <img src="<?= base_url('Upload/Makanan/');
                                    echo $mkn['Foto_Makanan']; ?>.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $mkn['Makanan']; ?></h5>
                        <hr class="my-3">
                        <p class="card-text small-text mb-0">Provinsi <?= $mkn['Nama']; ?></p>
                        <p class="card-text small-text"><?= $mkn['Ibukota']; ?></p>
                        <a class="btn btn-primary btn-sm js-scroll-trigger text-white" href="<?= base_url() ?>Makanan/Detail/<?= $mkn['ID_Provinsi']; ?>">Read More</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="bg-light pt-3 pb-5">
        <div class="container">
            <div class="col-lg-12 text-center my-5">
                <h4 class="section-heading text-uppercase">Kalimantan</h4>

            </div>
            <div class="card-columns">
                <?php foreach ($Makanan_Kalimantan as $mkn) : ?>
                <div class="img-fluid card">
                    <img src="<?= base_url('Upload/Makanan/');
                                    echo $mkn['Foto_Makanan']; ?>.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $mkn['Makanan']; ?></h5>
                        <hr class="my-3">
                        <p class="card-text small-text mb-0">Provinsi <?= $mkn['Nama']; ?></p>
                        <p class="card-text small-text"><?= $mkn['Ibukota']; ?></p>
                        <a class="btn btn-primary btn-sm js-scroll-trigger text-white" href="<?= base_url() ?>Makanan/Detail/<?= $mkn['ID_Provinsi']; ?>">Read More</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="pt-3 pb-5">
        <div class="container">
            <div class="col-lg-12 text-center my-5">
                <h4 class="section-heading text-uppercase">Sulawesi</h4>

            </div>
            <div class="card-columns">
                <?php foreach ($Makanan_Sulawesi as $mkn) : ?>
                <div class="img-fluid card">
                    <img src="<?= base_url('Upload/Makanan/');
                                    echo $mkn['Foto_Makanan']; ?>.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $mkn['Makanan']; ?></h5>
                        <hr class="my-3">
                        <p class="card-text small-text mb-0">Provinsi <?= $mkn['Nama']; ?></p>
                        <p class="card-text small-text"><?= $mkn['Ibukota']; ?></p>
                        <a class="btn btn-primary btn-sm js-scroll-trigger text-white" href="<?= base_url() ?>Makanan/Detail/<?= $mkn['ID_Provinsi']; ?>">Read More</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class=" bg-light pt-3 pb-5">
        <div class="container">
            <div class="col-lg-12 text-center my-5">
                <h4 class="section-heading text-uppercase">Kepulauan Nusa Tenggara</h4>

            </div>
            <div class="card-columns">
                <?php foreach ($Makanan_KepNusa as $mkn) : ?>
                <div class="img-fluid card">
                    <img src="<?= base_url('Upload/Makanan/');
                                    echo $mkn['Foto_Makanan']; ?>.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $mkn['Makanan']; ?></h5>
                        <hr class="my-3">
                        <p class="card-text small-text mb-0">Provinsi <?= $mkn['Nama']; ?></p>
                        <p class="card-text small-text"><?= $mkn['Ibukota']; ?></p>
                        <a class="btn btn-primary btn-sm js-scroll-trigger text-white" href="<?= base_url() ?>Makanan/Detail/<?= $mkn['ID_Provinsi']; ?>">Read More</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="pt-3 pb-5">
        <div class="container">
            <div class="col-lg-12 text-center my-5">
                <h4 class="section-heading text-uppercase">Kepulauan Maluku</h4>

            </div>
            <div class="card-columns">
                <?php foreach ($Makanan_KepMaluku as $mkn) : ?>
                <div class="img-fluid card">
                    <img src="<?= base_url('Upload/Makanan/');
                                    echo $mkn['Foto_Makanan']; ?>.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $mkn['Makanan']; ?></h5>
                        <hr class="my-3">
                        <p class="card-text small-text mb-0">Provinsi <?= $mkn['Nama']; ?></p>
                        <p class="card-text small-text"><?= $mkn['Ibukota']; ?></p>
                        <a class="btn btn-primary btn-sm js-scroll-trigger text-white" href="<?= base_url() ?>Makanan/Detail/<?= $mkn['ID_Provinsi']; ?>">Read More</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class=" bg-light pt-3 pb-5 mb-0">
        <div class="container">
            <div class="col-lg-12 text-center my-5">
                <h4 class="section-heading text-uppercase">Papua</h4>

            </div>
            <div class="card-columns mt-auto">
                <?php foreach ($Makanan_Papua as $mkn) : ?>
                <div class="img-fluid card">
                    <img src="<?= base_url('Upload/Makanan/');
                                    echo $mkn['Foto_Makanan']; ?>.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $mkn['Makanan']; ?></h5>
                        <hr class="my-3">
                        <p class="card-text small-text mb-0">Provinsi <?= $mkn['Nama']; ?></p>
                        <p class="card-text small-text"><?= $mkn['Ibukota']; ?></p>
                        <a class="btn btn-primary btn-sm js-scroll-trigger text-white" href="<?= base_url() ?>Makanan/Detail/<?= $mkn['ID_Provinsi']; ?>">Read More</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>