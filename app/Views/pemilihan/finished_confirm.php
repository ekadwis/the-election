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
    <link rel="stylesheet" href="/css/style.css">
    <title><?= $title; ?></title>
</head>

<body class="bg-dark text-white">

    <div class="container finished">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-6 gambar">
                <img src="/img/token_pict.svg" class="img-fluid" alt="">
            </div>
            <div class="col-md-5 text-white form-token ms-4">
                <h1 class="fw-bold fs-2">Kamu telah<br>
                    Berhasil Memilih!
                </h1>
                <h5 class="text-secondary fs-6 my-4">Selamat karena kamu telah menggunakan<br>
                    hak pilihmu secara bertanggung jawab!
                </h5>
                <a href="/paslon/hasil" class="link-purple fw-bold">Lihat hasil pemilihan
                    <i class="fas fa-long-arrow-alt-right ms-4"></i>
                </a>
            </div>
        </div>
</body>

</html>