<div class="row justify-content-md-center mt-5">
    <div class=" col-lg-6">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title text-center">Input Data Makanan</h5>
                <form action="<?= base_url('Backend/Makanan/showProvinsi') ?>" method="post">
                    <input type="text" name="id_provinsi" id="key" placeholder="Cari Nama Provinsi atau Ibukota yang sesuai" class="form-control mb-3" />
                    <button type="submit" name="Cari" class="btn btn-light text-primary float-right">Cari Data</button>
                </form>

            </div>

            <div class="card-body">
                <form action="<?= base_url('Backend/Makanan/inputData') ?>" method="post">
                    <div class="form-group">
                        <label for="id">ID Provinsi</label>
                        <input type="text" name="id_provinsi" id="id" class="form-control" value='<?php if ($this->input->post('key', true)) {
                                                                                                        echo $Keyword['ID_provinsi'];
                                                                                                    } else {
                                                                                                        echo "";
                                                                                                    } ?>' required />
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Makanan</label>
                        <input type="text" name="nama" id="nama" class="form-control" value='' />
                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea class="form-control ckeditor" name="Deskripsi" id="desc"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="buat">Proses Pembuatan</label>
                        <textarea class="form-control ckeditor" name="Pembuatan" id="buat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="rinci">Penjelasan Lainnya</label>
                        <textarea class="form-control ckeditor" name="PenjelasanDetail" id="rinci"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="link">Link Video Youtube</label>
                        <input type="text" name="Link_Video" id="link" class="form-control" />
                    </div>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Simpan Data</button>
                </form>
            </div>


        </div>
    </div>
</div>