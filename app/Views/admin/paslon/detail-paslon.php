<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS External -->
    <link rel="stylesheet" href="css/admin/style.css">

    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>


<body class="text-white" style="background-color: #121212;">
    <div class="container detail-data-paslon mt-3">
        <a href="/data-paslon" class="text-secondary"><i class="fas fa-arrow-left fs-5 mt-5"></i></a>
        <div class="row mt-5">
            <div class="col-md right-side">
                <!-- foto ketua -->
                <img src="/img/<?= $result['foto_ketua']; ?>" alt="" class="img-fluid float-start" style="height: 400px; width: auto;">
                <!-- foto wakil -->
                <img src="/img/<?= $result['foto_wakil']; ?>" alt="" class="float-start" style="height: 400px; width: auto;">
            </div>
            <div class="col left-side">

                <div class="title d-flex justify-content-between">
                    <h4><?= $result['nama_ketua']; ?> - <?= $result['nama_wakil']; ?></h4>
                    <p class="fs-5">Paslon <span style="color: #7d53de!important;"><?= $result['no_urut']; ?><span></p>
                </div>

                <hr>
                <div class="content mt-5">
                    <div class="visi">
                        <h4 style="color: #919191;">Visi</h4>
                        <p><?= $result['visi']; ?></p>
                    </div>
                    <div class="misi mt-4">
                        <h4 style="color: #919191;">Misi</h4>
                        <p>
                            <?= $result['misi']; ?>
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</body>

</html>