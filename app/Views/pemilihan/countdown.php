<?= $this->extend('layouts/pemilih/template'); ?>

<?= $this->section('content'); ?>
<div class="countdown text-center">
    <img src="/img/countdown_pict.svg" alt="">
    <h2 class="fw-bold">Coming Soon</h2>
    <h5 class="text-secondary">Hasil pemilihan akan diumumkan dalam</h5>
    <h1 id="demo"></h1>
</div>
</div>
<?php foreach ($set_waktu as $set); ?>
<script>
    // Mengatur waktu akhir perhitungan mundur
    // var countDownDate = new Date("<?= $set['bulan']; ?> <?= $set['tanggal']; ?>, <?= $set['tahun_pemilihan']; ?> 00:00:00").getTime();
    var countDownDate = new Date("04 15, 2022 00:00:00").getTime();

    // Memperbarui hitungan mundur setiap 1 detik
    var x = setInterval(function() {

        // Untuk mendapatkan tanggal dan waktu hari ini
        var now = new Date().getTime();

        // Temukan jarak antara sekarang dan tanggal hitung mundur
        var distance = countDownDate - now;

        // Perhitungan waktu untuk hari, jam, menit dan detik
        var day = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        if (day => 1) {
            days = day * 24;
            hours = days + hours;
        }

        // Keluarkan hasil dalam elemen dengan id = "demo"
        document.getElementById("demo").innerHTML = hours + "h " +
            minutes + "m " + seconds + "s ";

        // Jika hitungan mundur selesai, tulis beberapa teks 
        if (distance < 0) {
            clearInterval(x);
            // document.getElementById("demo").innerHTML = "EXPIRED";
            window.location.replace("/paslon/hasil");
        }
    }, 1000);
</script>
<?= $this->endSection(); ?>