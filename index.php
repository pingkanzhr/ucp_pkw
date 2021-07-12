<?php
include "ceksesi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <title>Data Karyawan</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Data Karyawan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="logout.php">LogOut</a>
      </div>
    </div>
  </div>
  </nav>

  <div class="container data-mashasiswa mt-5">
    <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahData">
    Tambah Data
  </button>

  <!-- Modal -->
  <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDatalabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
       <form action="tambah.php" method="post" name="form" >
          <div class="modal-header">
            <h5 class="modal-title" id="tambahDatalabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            
          <div class="mb-3">
            <label for="Nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama Karyawan" name="Nama">
          </div>
          <div class="mb-3">
            <label for="No_KTP" class="form-label">No_KTP</label>
            <input type="text" class="form-control" id="NO_KTP" placeholder="Masukkan No KTP Karyawan" name="No_KTP">
          </div>
          <div class="mb-3">
            <label for="No_Telp" class="form-label">No_Telp</label>
            <input type="text" class="form-control" id="No_Telp" placeholder="Masukkan No Telp Karyawan" name="No_Telp">
          </div>
          <div class="mb-3">
            <label for="Tahun_Masuk" class="form-label">Tahun_Masuk</label>
            <input type="text" class="form-control" id="Tahun_Masuk" placeholder="Masukkan Masukkan Tahun Masuk Karyawan" name="Tahun_Masuk">
          </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <div class="container karyawan mt-5">
    <table class="table table-striped" id="karyawan">
        <thead>
            <tr>
                <th scope="col">No. </th>
                <th scope="col">Nama</th>
                <th scope="col">No_KTP</th>
                <th scope="col">No_Telp</th>
                <th scope="col">Tahun_Masuk</th>
                <th scope="col">Jumlah_Masa_Kerja</th>
            <tr>
        </thead>
        <tbody>
            <?php
                include 'config.php';
                $no = 1;
                $karyawan = mysqli_query($koneksi, "select * from karyawan");
                while($data = mysqli_fetch_array($karyawan)){
                    ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['Nama']; ?></td>
                        <td><?php echo $data['No_KTP']; ?></td>
                        <td><?php echo $data['No_Telp']; ?></td>
                        <td><?php echo $data['Tahun_Masuk']; ?></td>
                        <td><?php echo $data['Jumlah_Masa_Kerja']; ?> Tahun</td>
                        <td>
                          <a href="detail.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-sm text-white">DETAIL</a>
                          <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm text-white">EDIT</a>
                          <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm ('Anda Yakin Akan Menghapus Data Karyawan Ini ?')">HAPUS</a>
                          <a href="print.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm text-white">CETAK</a>
                        </td>
                      </tr>
                      <?php
                    }
                    ?>
                </tbody>
                </table>
            </div> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>    
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
        <script>
          $(document).ready(function() {
            $('#datakaryawan').DataTable();
          } );
        </script>
  </body>
</html>