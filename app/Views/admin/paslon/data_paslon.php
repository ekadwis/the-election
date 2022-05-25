<?= $this->extend('layouts/admin/template'); ?>

<?= $this->section('content'); ?>

<!-- Modal Tambah Paslon -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Paslon</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row" action="paslon/addpaslon" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="col-12 mb-3">
                        <label for="nama_ketua" class="form-label">Nama Ketua<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-height" id="nama_ketua" placeholder="Masukan Nama Ketua" name="nama_ketua">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="nama_wakil" class="form-label">Nama Wakil<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-height" id="nama_wakil" placeholder="Masukan Nama Wakil" name="nama_wakil">
                    </div>
                    <div class="col-12 mb-3 mt-3">
                        <label for="periode" class="form-label">Periode<span class="text-danger">*</span></label>
                        <select class="form-select" aria-label="Default select example" name="periode">
                            <option selected value="1">2022-2023</option>
                            <option value="2">2023-2024</option>
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="no_urut" class="form-label">Nomor urut<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-height" id="no_urut" placeholder="Masukan Nomor Urut" name="no_urut">
                        <div id="emailHelp" class="form-text">Contoh: 2</div>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="visi" class="form-label">Visi<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="visi" rows="4" placeholder="Tambahkan Visi Paslon" name="visi"></textarea>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="misi" class="form-label">Misi<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="misi" rows="4" placeholder="Tambahkan Misi Paslon" name="misi"></textarea>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="visi" class="form-label">Program Kerja<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="visi" rows="4" placeholder="Tambahkan Program Kerja Paslon" name="program_kerja"></textarea>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="image" class="form-label">Foto Ketua</label>
                        <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="foto_ketua">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="image" class="form-label">Foto Wakil</label>
                        <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="foto_wakil">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<div class="data-paslon">
    <table class="table table-dark table-borderless">
        <thead>
            <tr>
                <th scope="col">Photo</th>
                <th scope="col">Nomor urut</th>
                <th scope="col">Ketua</th>
                <th scope="col">Wakil</th>
                <th scope="col">Tools</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paslon as $pas) : ?>
                <tr>
                    <td>
                        <img src="/img/<?= $pas['foto_ketua']; ?>" class="img-fluid rounded" alt="">
                        <img src="/img/<?= $pas['foto_wakil']; ?>" class="img-fluid rounded" alt="">
                    </td>
                    <th scope="row"><?= $pas['no_urut']; ?></th>
                    <td><?= $pas['nama_ketua']; ?></td>
                    <td><?= $pas['nama_wakil']; ?></td>
                    <td>
                        <a href="paslon/edit/<?= $pas['id_paslon']; ?>">
                            <i class='bx bxs-edit text-purple fs-4'></i>
                        </a>
                        <a href="paslon/delete/<?= $pas['id_paslon']; ?>">
                            <i class='bx bxs-trash-alt text-danger fs-4'></i>
                        </a>
                    </td>
                    <td>
                        <a href="paslon/detail/<?= $pas['id_paslon']; ?>" class="btn btn-purple"> Detail </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>