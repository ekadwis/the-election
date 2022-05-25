<?= $this->extend('layouts/pemilih/template'); ?>

<?= $this->section('content'); ?>

<div class="hasil">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-5">
            <img src="img/paslon3.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-md-6">
            <h2>Hasil Pemilihan</h2>
            <div class="progress1 bg-hasil rounded my-3">
                <p class="fs-5 fw-bold paslon-text">Paslon 1</p>
                <div class="progress">
                    <div class="progress-bar bg-purple" role="progressbar" style="width: 54%" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="fs-6 text-secondary mt-2">54% suara</p>
            </div>
            <div class="progress2 bg-hasil rounded my-3">
                <p class="fs-5 fw-bold paslon-text">Paslon 2</p>
                <div class="progress">
                    <div class="progress-bar bg-purple" role="progressbar" style="width: 36%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="fs-6 text-secondary mt-2">36% suara</p>
            </div>
            <div class="progress3 bg-hasil rounded my-3">
                <p class="fs-5 fw-bold paslon-text">Paslon 3</p>
                <div class="progress">
                    <div class="progress-bar bg-purple" role="progressbar" style="width: 10%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="fs-6 text-secondary mt-2">10% suara</p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>