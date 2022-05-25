<?= $this->extend('layouts/pemilih/template'); ?>

<?= $this->section('content'); ?>
<div class="paslon">
    <?php if (session()->getFlashdata('msg')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('msg'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <div class="row mt-5">
        <div class="col-md-5 mt-5 ms-4">
            <h2 class="fs-1">Daftar pasangan<br> calon ketua OSIS</h2>
            <p class="fs-6 text-secondary">Lakukanlah pemilihan dengan penuh<br>
                tanggung jawab. Bacalah dahulu Visi,<br>
                Misi dan program kerja dari paslon<br>
                yang akan kamu pilih.</p>
        </div>
        <div class="col-md-6 text-dark">
            <div class="owl-carousel owl-theme">
                <?php foreach ($pasangan_calon as $paslon) : ?>
                    <div class="item me-4">
                        <div class="card bg-dark text-white">
                            <img src="/img/<?= $paslon['foto_ketua']; ?>" class="card-img" alt="...">
                            <div class="card-img-overlay d-flex align-items-end">
                                <div class="content-paslon">
                                    <h5 class="card-title">Paslon <?= $paslon['no_urut']; ?></h5>
                                    <p class="card-text text-abu"><?= $paslon['nama_ketua']; ?> - <?= $paslon['nama_wakil']; ?></p>
                                    <a href="/paslon/detail/<?= $paslon['id_paslon']; ?>" class="btn btn-purple">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>