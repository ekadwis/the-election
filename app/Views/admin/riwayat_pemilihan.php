<?= $this->extend('layouts/admin/template'); ?>

<?= $this->section('content'); ?>

<div class="riwayat-pemilihan">

    <table class="table table-dark table-borderless">
        <thead>
            
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nis</th>
                <th scope="col">Paslon dipilih</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 + (10 * ($currentPage - 1)); ?>
            <?php
            foreach ($riwayat as $r) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $r['nis']; ?></td>
                <td>No. urut <?= $r['paslon_dipilih']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- <?= $pager->links('akun_siswa', 'pagination'); ?> -->

<?= $this->endSection(); ?>