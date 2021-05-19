<?php
//include('dbconnected.php');
include('dbconnect.php');

$id_tamu = $_GET['id_tamu'];
$tanggal = $_GET['tanggal'];
$nama = $_GET['nama'];
$email = $_GET['email'];
$website = $_GET['website'];
$pesan = $_GET['pesan'];

//query update
$query = "UPDATE datatamu SET tanggal='$tanggal' , nama='$nama' , email='$email' , website='$website' , pesan='$pesan' ";

if (mysqli_query($conn, $query)) {
	# credirect ke page index
	header("location:index.php");
	
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>