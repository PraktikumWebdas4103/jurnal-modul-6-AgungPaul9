<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$nama_database = "jurnal6";

	$dabes = mysqli_connect($server, $user, $password, $nama_database);

	if (!$dabes) {
		die("Gagal terhubung dengan database : ".mysqli_connect_error());
		# code...
	}
?>