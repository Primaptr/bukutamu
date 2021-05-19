<!DOCTYPE html>
<html lang="en">
<head>
	<title>BUKU TAMU</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$id_tamu = $_GET['id_tamu']; 

//koneksi database
include('dbconnect.php');

//query
$query = "SELECT * FROM datatamu WHERE id_tamu='$id_tamu'";
$result = mysqli_query($conn, $query);

?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">

	<h3>Update Data Tamu</h3>
	<form role="form" action="edit.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>

		<input type="hidden" name="id_tamu" value="<?php echo $row['id_tamu']; ?>">

		<div class="form-group">
			<label>Tanggal</label>
			<input type="date" name="tanggal" class="form-control" value="<?php echo $row['tanggal']; ?>">			
		</div>

		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">			
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>">			
		</div>

		<div class="form-group">
			<label>Website</label>
			<input type="text" name="website" class="form-control" value="<?php echo $row['website']; ?>">			
		</div>

        <div class="form-group">
			<label>Pesan</label>
			<input type="text" name="pesan" class="form-control" value="<?php echo $row['pesan']; ?>">			
		</div>
		<button type="submit" class="btn btn-success btn-block">Update Data</button>

		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>
</body>
</html> 