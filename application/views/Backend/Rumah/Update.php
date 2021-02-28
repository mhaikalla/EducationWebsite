<div class="row justify-content-md-center mt-5">
    <div class=" col-lg-6">
        <div class="card border-success">
            <div class="card-header bg-success text-white">
                <h5 class="card-title text-center">Update Data Rumah Adat</h5>
            </div>
            <div class="card-body">
                <form action="<?= base_url('Backend/Rumah/updateData/') ?><?= $Rumah['ID_Provinsi'] ?>" method="post">
                    <div class="form-group">
                        <label for="id">ID Provinsi</label>
                        <input type="text" name="id_provinsi" id="id" class="form-control" required value='<?= $Rumah['ID_Provinsi'] ?>' />
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Rumah Adat</label>
                        <input type="text" name="nama" id="nama" class="form-control" required value='<?= $Rumah['Nama'] ?>' />
                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea class="form-control ckeditor" name="Deskripsi" id="desc" required><?= $Rumah['deskripsi'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="buat">Arsitektur</label>
                        <textarea class="form-control ckeditor" name="Arsitektur" id="buat" required><?= $Rumah['Arsitektur'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="rinci">Penjelasan Lainnya</label>
                        <textarea class="form-control ckeditor" name="PenjelasanDetail" id="rinci" required><?= $Rumah['Penjelasan_Detail'] ?></textarea>
                    </div>

                    <button type="submit" name="Tambah" class="btn btn-success float-right">Update Data</button>
                </form>
            </div>
        </div>
    </div>
</div>