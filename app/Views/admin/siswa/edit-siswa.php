<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- External CSS -->
    <!-- <link rel="stylesheet" href="css/admin/edit.css"> -->
    <title><?= $title; ?></title>

    <style>
        .btn-purple {
            color: #fff;
            background-color: #6e33f5;
            border-color: #6e33f5;
        }

        .form-control {
            color: #999 !important;
            background-color: #383838 !important;
            border: 1px solid #383838 !important;
        }

        .form-control-height {
            height: 50px;
        }

        .form-select {
            height: 50px;
            color: #999;
            background-color: #383838;
            border: 1px solid #383838;
        }

        form button {
            width: 10%;
        }
    </style>
</head>

<body class="bg-dark text-white">
    <div class="container w-75 mx-auto edit-paslon my-5">
        <h2>Edit</h2>
        <p class="text-secondary mb-5">Edit data akun</p>
        <form class="row" action="/admin/siswa/update/<?= $siswa['nis']; ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="col-12 mb-3">
                <label for="nis" class="form-label">Nis<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-height" id="nis" placeholder="Masukan Nis" name="nis" value="<?= $siswa['nis']; ?>">
            </div>
            <div class="col-12 mb-3">
                <label for="nama" class="form-label">Nama<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-height" id="nama" placeholder="Masukan Nama" name="nama" value="<?= $siswa['nama']; ?>">
            </div>
            <div class="col-md-6">
                <label for="nisn" class="form-label">Nisn<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-height" id="nisn" placeholder="Masukan Nisn" name="nisn" value="<?= $siswa['nisn']; ?>">
            </div>
            <div class="col-md-6">
                <label for="no_telp" class="form-label">Nomor Telepon<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-height" id="no_telp" placeholder="Masukan No. Telp" name="no_telp" value="<?= $siswa['no_telp']; ?>">
            </div>
            <div class="col-12 mb-3 mt-3">
                <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-height" id="email" placeholder="Masukan Email" name="email" value="<?= $siswa['email']; ?>">
            </div>
            <div class="col-12 mb-3">
                <label for="alamat" class="form-label">Alamat<span class="text-danger">*</span></label>
                <textarea class="form-control" id="alamat" rows="4" placeholder="Tambahkan Alamat Paslon" name="alamat"><?= $siswa['alamat']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-purple mt-5 mb-3" style="width: 10%; margin-left: 13px;">Edit</button>
        </form>
    </div>
</body>

</html>