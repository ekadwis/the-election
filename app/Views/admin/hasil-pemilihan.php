<?= $this->extend('layouts/admin/template'); ?>

<?= $this->section('content'); ?>

<div class="hasil-pemilihan">

    <!-- Modal -->
    <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Set tanggal pemilihan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/setpemilihan" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="mb-3">
                            <label for="tahun_pemilihan" class="form-label">Tahun</label>
                            <input type="text" class="form-control" id="tahun_pemilihan" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"><span class="text-danger">*</span>Contoh: 2022</div>
                        </div>
                        <div class="mb-3">
                            <label for="bulan" class="form-label">Bulan</label>
                            <input type="text" class="form-control" id="bulan" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"><span class="text-danger">*</span>Contoh: 02</div>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="text" class="form-control" id="tanggal" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"><span class="text-danger">*</span>Contoh: 07</div>
                        </div>

                        <button type="submit" class="btn btn-primary">Terapkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-dark table-borderless">
        <thead>
            <tr>
                <th scope="col">No. urut</th>
                <th scope="col">Nama Ketua</th>
                <th scope="col">Nama Wakil</th>
                <th scope="col">Jumlah Suara</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0 ?>
            <?php foreach ($hasil as $h) : ?>
     
            <tr>
                <th scope="row"><?= $h['paslon_dipilih'] ?></th>
                <td>Aziz</td>
                <td>Reza</td>
                
                <td><?= $h['jumlah_suara']?></td>
            </tr>
 
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>