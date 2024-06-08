<!DOCTYPE html>
<html>
<head>
	<title>CRUD - Mario Uskono</title>
	<link rel="shortcut icon" href="https://mariouskonoporto.000webhostapp.com/img/Logo_ubhara.png" title="CRUD - Mario Uskono">
</head>
<body>
	<h2>Tambah Data Mahasiswa</h2>
	<p><a href="index.php">Home</a></p>

	<form action="tambah-proses.php" method="post">
		<table cellpadding="5" cellspacing="0">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" required></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td>:</td>
				<td><input type="text" name="nama" size="50" required></td>
			</tr>
			<tr>
				<td>JENIS KELAMIN</td>
				<td>:</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="L" required> Laki-Laki<br>
					<input type="radio" name="jenis_kelamin" value="P"> Perempuan
				</td>
			</tr>
			<tr>
				<td>ANGKATAN</td>
				<td>:</td>
				<td>
					<select name="angkatan" required="">
						<option value="">- PILIH ANGKATAN - </option>
						<option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td>:</td>
				<td>
					<textarea name="alamat" cols="30" rows="4" required></textarea>
				</td>
			</tr>
			<tr>
				<td>NO HP</td>
				<td>:</td>
				<td>
					<input type="text" name="no_hp" required>
				</td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td>
					<input type="submit" value="TAMBAH" name="tambah">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>