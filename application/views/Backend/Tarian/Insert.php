<div class="row justify-content-md-center mt-5">
    <div class=" col-lg-6">
        <div class="card border-warning">
            <div class="card-header bg-warning text-white">
                <h5 class="card-title text-center">Input Data Tarian</h5>
            </div>

            <div class="card-body">
                <form action="<?= base_url('Backend/Tarian/inputData') ?>" method="post">
                    <div class="form-group">
                        <label for="id">ID Provinsi</label>
                        <input type="text" name="id_provinsi" id="id" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Tari Adat</label>
                        <input type="text" name="nama" id="nama" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea class="form-control ckeditor" name="Deskripsi" id="desc" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="buat">Gerakan Tarian</label>
                        <textarea class="form-control ckeditor" name="Gerakan" id="buat" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="rinci">Penjelasan Lainnya</label>
                        <textarea class="form-control ckeditor" name="PenjelasanDetail" id="rinci" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="link">Link Video Youtube</label>
                        <input type="text" name="Link_Video" id="link" class="form-control" required />
                    </div>
                    <button type="submit" name="Tambah" class="btn btn-warning float-right">Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
</div>