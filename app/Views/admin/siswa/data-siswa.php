<?= $this->extend('layouts/admin/template'); ?>

<?= $this->section('content'); ?>

<!-- Modal Tambah Akun -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row" action="siswa/add" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="col-12 mb-3">
                        <label for="nis" class="form-label">Nis<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-height" id="nis" placeholder="Masukan Nis" name="nis">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="nama" class="form-label">Nama<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-height" id="nama" placeholder="Masukan Nama" name="nama">
                    </div>
                    <div class="col-12 mb-3 mt-3">
                        <label for="id_kelas" class="form-label">Pilih Kelas<span class="text-danger">*</span></label>
                        <select class="form-select" aria-label="Default select example" name="id_kelas">
                            <option selected value="4">12 RPL A</option>
                            <option value="5">12 RPL B</option>
                            <option value="6">12 MM A</option>
                        </select>
                    </div>
                    <div class="col-12 mb-3 mt-3">
                        <label for="id_jurusan" class="form-label">Pilih Jurusan<span class="text-danger">*</span></label>
                        <select class="form-select" aria-label="Default select example" name="id_jurusan">
                            <option selected value="1">Rekayasa Perangkat Lunak</option>
                            <option value="2">Multimedia</option>
                        </select>
                    </div>
                    <div class="col-12 mb-3 mt-3">
                        <label for="id_angkatan" class="form-label">Pilih Angkatan<span class="text-danger">*</span></label>
                        <select class="form-select" aria-label="Default select example" name="id_angkatan">
                            <option selected value="1">2019/2022</option>
                            <option value="2">2020/2023</option>
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="nisn" class="form-label">Nisn<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-height" id="nisn" placeholder="Masukan nisn" name="nisn">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="no_absen" class="form-label">No. Absen<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-height" id="no_absen" placeholder="Masukan No. Absen" name="no_absen">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="no_telpon" class="form-label">No. Telpon<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-height" id="no_telpon" placeholder="Masukan No. Telpon" name="no_telp">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-height" id="email" placeholder="Masukan email" name="email">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="alamat" class="form-label">alamat<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-height" id="alamat" placeholder="Masukan alamat" name="alamat">
                    </div>
                    <div class="modal-footer mt-4">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>


<div class="data-pemilih">

    <table class="table table-dark table-borderless">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nis</th>
                <th scope="col">Nama</th>
                <th scope="col">Nisn</th>
                <th scope="col">No. Telp</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tools</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 + (10 * ($currentPage - 1)); ?>
            <?php
            foreach ($siswa as $s) : ?>
                <tr>
                    <th scope="row">
                        <?= $i++; ?>
                    </th>
                    <td>
                        <?= $s['nis']; ?>
                    </td>
                    <td>
                        <?= $s['nama']; ?>
                    </td>
                    <td>
                        <?= $s['nisn']; ?>
                    </td>
                    <td>
                        <?= $s['no_telp']; ?>
                    </td>
                    <td>
                        <?= $s['email']; ?>
                    </td>
                    <td>
                        <?= $s['alamat']; ?>
                    </td>
                    <td>
                        <a href="siswa/edit/<?= $s['nis']; ?>">
                            <i class='bx bxs-edit text-purple fs-4'></i>
                        </a>
                        <a href="siswa/delete/<?= $s['nis']; ?>">
                            <i class='bx bxs-trash-alt text-danger fs-4'></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>
<!-- <?= $pager->links('akun_siswa', 'pagination'); ?> -->

<?= $this->endSection(); ?>