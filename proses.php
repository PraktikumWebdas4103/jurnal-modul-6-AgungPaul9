<?php 

include ("koneksi.php");

if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$kelas = $_POST['kelas'];
	$jeniskelamin = $_POST['jeniskelamin'];
	$hobi = $_POST['hobi'];
	$fakultas = $_POST['fakultas'];
	$alamat = $_POST['alamat'];
	# code...

	$sql = "INSERT INTO user(nama, nim, kelas, jenis_kelamin, hobi, fakultas, alamat) VALUE ('$nama', '$nim', '$kelas', '$jeniskelamin', '$hobi', '$fakultas', '$alamat')";
	$query = mysqli_query($dabes, $sql);
	if ($query) {
		header('location : input.php');
		# code...
	}else{
	header('location : input.php?status=Gagal');
	}
}else{
	die("Gaboleh...");
}
?>