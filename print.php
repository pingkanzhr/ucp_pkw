<?php

include 'config.php';
$id = $_GET['id'];
$karyawan = mysqli_query($koneksi, "select * from karyawan where id='$id'");
while ($data = mysqli_fetch_assoc($karyawan)) {

    ?>

        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
            <title><?php echo $data['Nama']?></title>
        </head>

        <body onload="window.print();">
            <div class="container mt-5">
                <p class="fw-bold">Profil Karyawan</p>
                <p>Nama : <?php echo $data['Nama']?></p>
                <p>No_KTP : <?php echo $data['No_KTP']?></p>
                <p>No_Telp : <?php echo $data['No_Telp']?></p>
                <p>Tahun_Masuk : <?php echo $data['Tahun_Masuk']?></p>
                <p>Jumlah_Masa_Kerja : <?php echo $data['Jumlah_Masa_Kerja']?></p>
            </div>
        <?php
    } 
        ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
        </body>
        </html>