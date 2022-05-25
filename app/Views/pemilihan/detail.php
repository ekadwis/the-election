<?= $this->extend('layouts/pemilih/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <!-- <div class="d-flex flex-wrap flex-md-nowrap mt-5"> -->
  <div class="row mt-5">
    <div class="col-md-3 gambar1">
      <img src="/img/<?= $paslon['foto_ketua']; ?>" class="img-fluid" alt="">
    </div>
    <div class="col-md-3 gambar2">
      <img src="/img/<?= $paslon['foto_wakil']; ?>" class="img-fluid" alt="">
    </div>
    <div class="col text-white deskripsi ms-5 ps-5">
      <h2 class="fw-bold text-start mb-5"><?= $paslon['nama_ketua']; ?> - <?= $paslon['nama_wakil']; ?></h2 class="fw-bold">

      <div class="accordion accordion-flush text-start" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed text-start ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <span class="text-secondary pe-3 fs-6">01</span>Visi
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"><?= $paslon['visi']; ?></div>
          </div>
        </div>
        <hr>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              <span class="text-secondary pe-3 fs-6">02</span>Misi
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"><?= $paslon['misi']; ?></div>
          </div>
        </div>
        <hr>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              <span class="text-secondary pe-3 fs-6">03</span>Program Kerja
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"><?= $paslon['program_kerja']; ?></div>
          </div>
        </div>
        <hr>
        <a href="/paslon/token/<?= $paslon['id_paslon']; ?>" type="button" class="btn btn-purple w-100" style="margin-top: 32px;">Pilih</a>
      </div>


    </div>
  </div>
</div>
<?= $this->endSection(); ?>