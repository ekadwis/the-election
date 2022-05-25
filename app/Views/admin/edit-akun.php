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
        <form class="row" action="/admin/pemilih/update/<?= $akun['id_akun']; ?>" method="POST" enctype="multipart/form-data">
            <!-- <div class="col-12 mb-3">
                <label for="id_akun" class="form-label">id_akun<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-height" id="id_akun" placeholder="Masukan id_akun" name="id_akun" value="<?= $akun['id_akun']; ?>" readonly>
            </div> -->
            <div class="col-12 mb-3">
                <label for="nis" class="form-label">Nis<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-height" id="nis" placeholder="Masukan Nis" name="nis" value="<?= $akun['nis']; ?>">
            </div>
            <div class="col-12 mb-3">
                <label for="no_urut" class="form-label">Level<span class="text-danger">*</span></label>
                <select class="form-select" aria-label="Default select example" name="level">
                    <option selected value="<?= $akun['level']; ?>"><?= $akun['level']; ?></option>
                    <option value="1">Administrator</option>
                    <option value="2">Pemilih</option>
                </select>
            </div>
            <div class="col-12 mb-3">
                <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-height" id="password" name="password" placeholder="Masukan Nis" value="<?= $akun['password']; ?>" readonly>
                <div id="emailHelp" class="form-text"><span class="text-danger">*</span>Tidak dapat mengubah password.</div>
            </div>
            <div class="col-12 mb-3">
                <label for="token" class="form-label">Token<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-height" id="token" placeholder="Masukan Nis" name="token" value="<?= $akun['token']; ?>" readonly>
                <div id="emailHelp" class="form-text"><span class="text-danger">*</span>Tidak dapat mengubah token.</div>
            </div>
            <button type="submit" class="btn btn-purple mt-5 mb-3" style="width: 10%; margin-left: 13px;">Edit</button>
        </form>
    </div>
</body>

</html>