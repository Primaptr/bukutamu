<!DOCTYPE html>
<html lang="en">

<head>
  <title>BUKU TAMU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

</head>

<body>

  <?php
  //tambahkan dbconnect
  include('dbconnect.php');

  //pagination
  //konfigurasi
  $jumlahDataPerHalaman = 5;
  $jumlahData = 10;
  $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
  $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
  $awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;
  

  //query
  $query = "SELECT * FROM datatamu LIMIT 0, $jumlahDataPerHalaman";
  if (isset($_GET['keyword'])) {
    $query = "SELECT * FROM datatamu WHERE nama LIKE '%$_GET[keyword]%'";
  }

  $result = mysqli_query($conn, $query);
  ?>

  <div class="container bg-info" style="padding-top: 10px; padding-bottom: 10px;">

    <h3>Tugas Pemrograman Web 2<br></h3>
    <h3>PRIMA PUTRA - 181011400585<br></h3>
    <h3>BUKU TAMU<br></h3>    
    <hr>
    <div class="row">
      <div class="col-sm-3">
        <h3>Form Buku Tamu</h3>
        <form role="form" action="insert.php" method="post">
          <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama Tamu</label>
            <input type="text" name="nama" class="form-control">
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control">
          </div>

          <div class="form-group">
            <label>Website</label>
            <input type="text" name="website" class="form-control">
          </div>

          <div class="form-group">
            <label>Pesan</label>
            <input type="text" name="pesan" class="form-control">
          </div>

          <button type="submit" class="btn btn-info btn-block">Tambah</button>
        </form>

      </div>
      <div class="col-sm-8">
        <h3>Tabel Buku Tamu</h3>

        <form menthod="get">
          <label for="cari">Cari</label>
          <input type="text" name="keyword" placeholder="Ketik nama" autocomplete="off">
          <button type="submit" name="cari">Search</button>
        </form>
        <br>

        <!-- Navigasi -->
        <?php for($i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
            <?php if( $i == $halamanAktif ) : ?>
              <a href="?halaman=<?= $i; ?>" style="font-wight: bold; color: red;"><?= $i ?></a>
            <?php else : ?>
              <a href="?halaman=<?= $i; ?>"><?= $i ?></a>
            <?php endif; ?>
        <?php endfor; ?>

        <table class="table table-striped table-hover dtabel">
          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Nama Tamu</th>
              <th>Email</th>
              <th>Website</th>
              <th>Pesan</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['website']; ?></td>
                <td><?php echo $row['pesan']; ?></td>
                <td>
                  <a href="editform.php?id_tamu=<?php echo $row['id_tamu']; ?>" class="btn btn-success" role="button">Edit</a>
                  <a href="delete.php?id_tamu=<?php echo $row['id_tamu'] ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
              </tr>

            <?php
            }
            mysqli_close($conn);
            ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</body>

</html>