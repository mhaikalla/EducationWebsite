<!-- Services -->
<div class="page-section py-auto" id="Head">
    <div class="jumbotron my-auto">
        <div class=" text-center">
            <h2 class="section-heading text-uppercase">Tarian Adat </h2>
            <hr class="my-5 w-75">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>

        </div>

        <form action="<?= base_url('index.php/Tarian/cariTarian')?>" action="GET">
    
           <input type="text" class="form-control w-50 mt-5 mx-auto" id="keyword" name="keyword" placeholder="Cari Tarian, Nama Provinsi disini"value=<?= $this->input->GET('keyword', TRUE);?>>
           <input class="btn btn-primary btn-l d-block w-25 mx-auto mt-4" type= "submit" id="Cari" name="Cari" value="Cari Tarian" >

        </form>
        <form action="<?= base_url('index.php/Makanan/Refresh')?>" action="GET">
        <input class="btn btn-danger btn-l d-block mx-auto mt-4" type= "submit" id="refresh" name="refresh" value="Batal" >
        </form>
</div>

<div id="Content">
<div class="container mb-4">
        <div class="row my-5">
            <div class="col-lg text-center">
                <h4 class="section-heading text-uppercase">Hasil Pencarian</h4>

                <div class="col-lg">
                  <ul class="list-inline mb-2">
                        <li class="list-inline-item">
                                <p class="text-muted">KATA KUNCI "<?=   $this->input->GET('keyword', TRUE);?> " </p>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            Ada <?= count($Pencarian); ?> data 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
                <?php if(count($Pencarian)>0) { ?>
                    <div class="card-columns">
                        <?php foreach ($Pencarian as $cari) : ?>
                        <div class="img-fluid card">
                            <img src="<?= base_url('Upload/Tarian/');
                                        echo $cari['Foto_Tarian']; ?>.jpg" class="card-img-top">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?= $cari['Tarian']; ?></h5>
                                <hr class="my-3">
                                <p class="card-text small-text mb-0">Provinsi <?= $cari['Nama']; ?></p>
                                <p class="card-text small-text"><?= $cari['Ibukota']; ?></p>
                                <a class="btn btn-primary btn-sm js-scroll-trigger text-white" href="<?= base_url() ?>Tarian/Detail/<?= $cari['ID_Provinsi']; ?>">Selengkapnya</a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                <?php }else { ?>
                    <div class="alert alert-danger d-block mx-auto w-100" role="alert">
                    Data yang ingin dicari tidak ditemukan
                    </div>
                <?php } ?>
        </div>
    </div>
</div>