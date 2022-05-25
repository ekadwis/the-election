<?= $this->extend('layouts/pemilih/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row homepage text-white">
        <div class="col-6 left-side">
            <div class="text">
                <h1>Pilihanmu,<br>Masa depan<br>Sekolahmu!</h1>
                <h5 class="text-secondary">Memudahkanmu dalam pemilihan dengan proses yang<br>
                    efisien, aman, dan rahasia.</h5>
                <a href="/login"><button type="button" class="btn btn-purple mt-4">Pilih Sekarang</button></a>
            </div>
        </div>
        <div class="col-6 right-side">
            <img src="img/homepage_pict.svg" class="img-fluid" alt="...">
        </div>
    </div>
</div>

<?= $this->endSection(); ?>