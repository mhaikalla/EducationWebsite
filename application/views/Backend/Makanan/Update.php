<div class="row justify-content-md-center mt-5">
    <div class=" col-lg-6">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title text-center">Update Data Makanan</h5>
            </div>
            <div class="card-body">
                <form action="<?= base_url('Backend/Makanan/updateData/') ?><?= $Makanan['ID_Provinsi'] ?>" method="post">
                    <div class="form-group">
                        <label for="id">ID Provinsi</label>
                        <input type="text" name="id_provinsi" id="id" class="form-control" required value='<?= $Makanan['ID_Provinsi'] ?>' />
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Makanan</label>
                        <input type="text" name="nama" id="nama" class="form-control" required value='<?= $Makanan['Nama'] ?>' />
                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea class="form-control ckeditor" name="Deskripsi" id="desc" required><?= $Makanan['Deskripsi'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="buat">Proses Pembuatan</label>
                        <textarea class="form-control ckeditor" name="Pembuatan" id="buat" required><?= $Makanan['Pembuatan'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="rinci">Penjelasan Lainnya</label>
                        <textarea class="form-control ckeditor" name="PenjelasanDetail" id="rinci" required><?= $Makanan['Penjelasan_Detail'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="link">Link Video Youtube</label>
                        <input type="text" name="Link_Video" id="link" class="form-control" required value='<?= $Makanan['Link_Video'] ?>' />
                    </div>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Update Data</button>
                </form>
            </div>
        </div>
    </div>
</div>