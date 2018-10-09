<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
	<fieldset>
	<form action="proses.php" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td></td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td></td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td></td>
				<td>
					<input type="radio" name="kelas" value="D3MI-41-01">01
					<input type="radio" name="kelas" value="D3MI-41-02">02
					<input type="radio" name="kelas" value="D3MI-41-03">03
					<input type="radio" name="kelas" value="D3MI-41-04">04
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td></td>
				<td>
					<input type="radio" name="jeniskelamin" value="Laki-laki">Laki-laki
					<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td></td>
				<td>
					<input type="checkbox" name="hobi" value="Tidur">Tidur
					<input type="checkbox" name="hobi" value="Hiking">Hiking
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td></td>
				<td>
					<select name="fakultas">
						<option value="Ilmu Terapan">Ilmu terapan</option>
						<option value="Informatika">Informatika</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td></td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td align="right"><input type="submit" name="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</fieldset>
</body>
</html>