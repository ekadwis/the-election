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

    <!-- Pop up  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            ...
        </div>
    </div>

    <!-- End Pop up  -->

    <div class="container token">
        <div class="row mt-5">
            <div class="col-md-6 gambar">
                <img src="/img/token_pict.svg" class="img-fluid" alt="">
            </div>

            <div class="col-md-5 text-white form-token ms-4">

                <h5 class="text-secondary fs-6">Gunakan token yang diberikan panitia<br> untuk memilih pasangan calon</h5>

                <div class="login-form mt-4-5">
                    <form action="/paslon/addriwayat" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="mb-3">
                            <label for="token" class="form-label">Token</label>
                            <input type="text" class="form-control" id="token" aria-describedby="emailHelp" placeholder="Masukan token" name="token">
                        </div>

                        <input type="hidden" name="nis" value="<?= session()->get('nis'); ?>">
                        <input type="hidden" name="id_paslon" value="<?= $paslon['no_urut']; ?>">
                        <button type="submit" class="btn btn-purple mt-5 w-100" id="token-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
                    </form>
                </div>

            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- <script>
            $('#token-btn').on('click', function(e) {
                e.preventDefault();
                var form = $(this).parents('form');
                Swal.fire({
                    title: 'Konfirmasi',
                    text: "Aoakah anda yakin ingin memilih paslon ini? Anda tidak dapat mengubah atau menghapus pilihan anda.",
                    showCancelButton: true,
                    confirmButtonColor: '#6e33f5E',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yakin',
                    cancelButtonText: 'Batal',
                    background: '#383838'

                }, function(isConfirm) {
                    if (isConfirm) form.submit();
                });
            });
        </script> -->
</body>

</html>