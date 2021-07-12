<?php
    include './config.php';

    $id = $_POST['id'];
    $Nama = $_POST['Nama'];
    $No_KTP = $_POST['No_KTP'];
    $No_Telp = $_POST['No_Telp'];
    $Tahun_Masuk = $_POST['Tahun_Masuk'];
    $Jumlah_Masa_Kerja = date("Y")-$Tahun_Masuk;

    mysqli_query($koneksi, "insert into karyawan (Nama,No_KTP,No_Telp,Tahun_Masuk,Jumlah_Masa_Kerja,id)
    values('$Nama','$No_KTP','$No_Telp','$Tahun_Masuk','$Jumlah_Masa_Kerja', '')");
    header("location:./index.php");
?>