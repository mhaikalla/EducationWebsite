<div class="row justify-content-md-center mt-5">
    <div class=" col-lg-6">
        <div class="card border-warning">
            <div class="card-header bg-warning text-white">
                <h5 class="card-title text-center">Update Data Tari Adat</h5>
            </div>
            <div class="card-body">
                <form action="<?= base_url('Backend/Tarian/updateData/') ?><?= $Tarian['ID_Provinsi'] ?>" method="post">
                    <div class="form-group">
                        <label for="id">ID Provinsi</label>
                        <input type="text" name="id_provinsi" id="id" class="form-control" required value='<?= $Tarian['ID_Provinsi'] ?>' />
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama tari Adat</label>
                        <input type="text" name="nama" id="nama" class="form-control" required value='<?= $Tarian['nama'] ?>' />
                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea class="form-control ckeditor" name="Deskripsi" id="desc" required><?= $Tarian['deskripsi'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="buat">Gerakan Tari</label>
                        <textarea class="form-control ckeditor" name="Gerakan" id="buat" required><?= $Tarian['Gerakan'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="rinci">Penjelasan Lainnya</label>
                        <textarea class="form-control ckeditor" name="PenjelasanDetail" id="rinci" required><?= $Tarian['Penjelasan_Detail'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="link">Link Video Youtube</label>
                        <input type="text" name="Link_Video" id="link" class="form-control" required value='<?= $Tarian['Link_Video'] ?>' />
                    </div>
                    <button type="submit" name="Tambah" class="btn btn-warning text-light float-right">Update Data</button>
                </form>
            </div>
        </div>
    </div>
</div>