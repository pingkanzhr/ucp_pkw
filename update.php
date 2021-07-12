<?php

    include './config.php';

    $id = $_POST['id'];
    $Nama = $_POST['Nama'];
    $No_KTP = $_POST['No_KTP'];
    $No_Telp = $_POST['No_Telp'];
    $Tahun_Masuk = $_POST['Tahun_Masuk'];
    $Jumlah_Masa_Kerja = date("Y")-$Tahun_Masuk;

    mysqli_query($koneksi, "update karyawan set Nama='$Nama', No_KTP='$No_KTP', No_Telp='$No_Telp', 
    Tahun_Masuk='$Tahun_Masuk', Jumlah_Masa_Kerja='$Jumlah_Masa_Kerja' where id='$id'");
    header("location:index.php");

?>