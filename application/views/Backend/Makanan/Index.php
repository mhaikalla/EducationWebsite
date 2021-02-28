    <div class="container">
        <h1 class="text-center">Data Makanan</h1>
        <hr>
        <div class="col">
            <a href="<?= base_url('Backend/Makanan/showForm') ?>" class="btn btn-primary">
                Tambah Data
            </a>
        </div>
        <br><br>
        <div class="row bg-transparent">
            <div class="col col-lg-5 mb-5">
                <h4 class="text-left">List Makanan</h4>
                <br>
                <ul class="list-group">
                    <?php foreach ($listMakanan as $mkn) : ?>
                       <li class="list-group-item list-group-item-action">
                            <?= $mkn['ID_Provinsi'] ?>   |    <?= $mkn['Nama'] ?>
                            <a class="badge badge-danger badge-lg float-right ml-1" data-toggle="modal" href="#hapusConfig">
                                Hapus
                            </a>   
                            <a class="badge badge-primary badge-lg float-right" href="<?= base_url() ?>Backend/Makanan/showForm/<?= $mkn['ID_Provinsi']?>" >
                                Edit
                            </a>     
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

<div class="modal fade" id="hapusConfig" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah data ini mau dihapus?
                    <br><br>
                    <?= $mkn['Nama']; ?>
                </div>
                    <button type="button" class="btn btn-transparent" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url("Backend/Makanan/deleteData/");?><?=$mkn['ID_Provinsi']?>" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>