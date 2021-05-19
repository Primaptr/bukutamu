<?php 

$id_tamu = $_GET['id_tamu'];

//include(dbconnect.php);
include('dbconnect.php');

//query hapus
$query = "DELETE FROM datatamu WHERE id_tamu = '$id_tamu' ";

if (mysqli_query($conn , $query)) {
	# redirect ke index.php
	header("location:index.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($conn);
?>