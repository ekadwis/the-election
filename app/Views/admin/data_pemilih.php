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
                <form class="row" action="pemilih/add" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="col-12 mb-3">
                        <label for="nis" class="form-label">Nis<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-height" id="nis" placeholder="Masukan Nis" name="nis">
                    </div>
                    <div class="col-12 mb-3 mt-3">
                        <label for="level" class="form-label">Pilih level<span class="text-danger">*</span></label>
                        <select class="form-select" aria-label="Default select example" name="level">
                            <option selected value="1">Administrator</option>
                            <option value="2">Pemilih</option>
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                        <input type="password" class="form-control form-control-height" id="password" placeholder="Masukan Password" value="<?= $generatePassword; ?>" name="password" readonly>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="token" class="form-label">Token<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-height" id="token" placeholder="Masukan token" value="<?= $generateToken; ?>" name="token" readonly>
                    </div>
                    <div class="modal-footer">
                        <button type="submiy" class="btn btn-primary">Tambah</button>
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
                <th scope="col">Nama</th>
                <th scope="col">Nis</th>
                <th scope="col">Password</th>
                <th scope="col">Token</th>
                <th scope="col">Tools</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 + (6 * ($currentPage - 1)); ?>
            <?php
            foreach ($akun as $acc) : ?>
                <tr>
                    <th scope="row">
                        <?= $i++; ?>
                    </th>
                    <td>
                        <?= $acc['nama']; ?>
                    </td>
                    <td>
                        <?= $acc['nis']; ?>
                    </td>
                    <td>
                        <?= $acc['password']; ?>
                    </td>
                    <td>
                        <?= $acc['token']; ?>
                    </td>
                    <td>
                        <a href="/admin/pemilih/edit/<?= $acc['id_akun']; ?>">
                            <i class='bx bxs-edit text-purple fs-4'></i>
                        </a>
                        <a href="/admin/pemilih/delete/<?= $acc['id_akun']; ?>">
                            <i class='bx bxs-trash-alt text-danger fs-4'></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>
<?= $pager->links('akun_siswa', 'pagination'); ?>

<?= $this->endSection(); ?>