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
        <p class="text-secondary mb-5">Edit data pasangan calon</p>
        <form class="row" action="/admin/paslon/updatepaslon/<?= $result['id_paslon']; ?>" method="POST" enctype="multipart/form-data">
            <div class="col-md-6">
                <label for="namaKetua" class="form-label">Nama Ketua<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-height" id="namaKetua" placeholder="Masukan Nama Ketua" name="nama_ketua" value="<?= $result['nama_ketua']; ?>">
            </div>
            <div class="col-md-6">
                <label for="namaWakil" class="form-label">Nama Wakil<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-height" id="namaWakil" placeholder="Masukan Nama Wakil" name="nama_wakil" value="<?= $result['nama_wakil']; ?>">
            </div>
            <div class="col-12 mb-3">
                <label for="no_urut" class="form-label">Nomor urut<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-height" id="no_urut" placeholder="Masukan Nomor Urut" name="no_urut" value="<?= $result['no_urut']; ?>" readonly>
                <div id="emailHelp" class="form-text">Tidak dapat mengubah nomor urut</div>
            </div>
            <div class="col-12 mb-3">
                <label for="visi" class="form-label">Visi<span class="text-danger">*</span></label>
                <textarea class="form-control" id="visi" rows="4" placeholder="Tambahkan Visi Paslon" name="visi"><?= $result['visi']; ?></textarea>
            </div>
            <div class="col-12 mb-3">
                <label for="misi" class="form-label">Misi<span class="text-danger">*</span></label>
                <textarea class="form-control" id="misi" rows="4" placeholder="Tambahkan Misi Paslon" name="misi"><?= $result['misi']; ?></textarea>
            </div>
            <div class="col-12 mb-3">
                <label for="program_kerja" class="form-label">Program Kerja<span class="text-danger">*</span></label>
                <textarea class="form-control" id="program_kerja" rows="4" placeholder="Tambahkan Program Kerja Paslon" name="program_kerja"><?= $result['program_kerja']; ?></textarea>
            </div>
            <div class="col-12 mb-3 mt-3">
                <label for="periode" class="form-label">Periode<span class="text-danger">*</span></label>
                <select class="form-select" aria-label="Default select example" name="periode">
                    <option selected value="1">2022-2023</option>
                    <option value="2">2023-2024</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label">Foto Ketua</label>
                <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="foto_ketua">
                <img src="/img/<?= $result['foto_ketua']; ?>" class="img-fluid mt-2" style="width:100px; height: 120px;">
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label">Foto Wakil</label>
                <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="foto_wakil">
                <img src="/img/<?= $result['foto_wakil']; ?>" class="img-fluid mt-2" style="width:100px; height: 120px;">
            </div>
            <button type="submit" class="btn btn-purple mt-5 mb-3" style="width: 10%; margin-left: 13px;">Edit</button>
        </form>
    </div>
</body>

</html>