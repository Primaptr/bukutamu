<?php
//add dbconnect

include('dbconnect.php');

$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$website = $_POST['website'];
$pesan = $_POST['pesan'];

//query

$query =  "INSERT INTO datatamu(tanggal , nama , email , website , pesan) VALUES('$tanggal' , '$nama' , '$email' , '$website' , '$pesan')";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:index.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>