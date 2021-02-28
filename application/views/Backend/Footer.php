</body>
<footer class="footer bg-dark mt-5 py-4">
    <div class="container">
        <div class="row mb-2">
            <span class="text-muted text-white">&copy; Pengenalan Budaya 2019</span>
        </div>
        <div class="row">
            <a href="<?= base_url('Home') ?>" class="btn btn-light text-dark btn-sm">Kembali ke Frontend</a>
        </div>
    </div>
    </div>
    </div>
    </div>
</footer>

<script src="<?php echo base_url() . 'assets/vendor/jquery/jquery.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/vendor/botstrap/js/bootstrap.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/ckeditor/ckeditor.js' ?>"></script>
<script type="text/javascript">
    $(function() {
        var editor = CKEDITOR.replace('ckeditor');
        CKFinder.setupCKEditor(editor, 'ckfinder/');
    });
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>