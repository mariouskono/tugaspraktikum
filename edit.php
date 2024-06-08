<!DOCTYPE html>
<html>
<head>
	<title>CRUD - Mario Uskono</title>
	<link rel="shortcut icon" href="https://mariouskonoporto.000webhostapp.com/img/Logo_ubhara.png" title="CRUD - Mario Uskono">
</head>
<body>
	<h2>Edit Data Mahasiswa</h2>
	<p><a href="index.php">Home</a></p>
	<?php 
	include("koneksi.php");
	$id = $_GET['id'];
	$show = mysqli_query($koneksi, "SELECT * FROM biodata WHERE id_mahasiswa = '$id'") or die(mysqli_error($koneksi));
	if(mysqli_num_rows($show) == 0){
		echo "<script>window.history.back()</script>";
	}
	else{
		$data = mysqli_fetch_assoc($show);
	}
	?>
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table cellpadding="5" cellspacing="0">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['nim']; ?>" name="nim" required></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['nama']; ?>" name="nama" size="50" required></td>
			</tr>
			<tr>
				<td>JENIS KELAMIN</td>
				<td>:</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="L" required <?php if($data['jenis_kelamin'] == 'L'){ echo 'checked';}?>> Laki-Laki<br>
					<input type="radio" name="jenis_kelamin" value="P" <?php if($data['jenis_kelamin'] == 'P'){ echo 'checked';}?>> Perempuan
				</td>
			</tr>
			<tr>
				<td>ANGKATAN</td>
				<td>:</td>
				<td>
					<select name="angkatan" required="">
						<option value="">- PILIH ANGKATAN - </option>
						<option value="2022" <?php if($data['angkatan'] == '2022'){ echo 'selected';}?>>2022</option>
						<option value="2023" <?php if($data['angkatan'] == '2023'){ echo 'selected';}?>>2023</option>
						<option value="2024" <?php if($data['angkatan'] == '2024'){ echo 'selected';}?>>2024</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td>:</td>
				<td>
					<textarea name="alamat" cols="30" rows="4" required><?php echo $data['alamat']; ?></textarea>
				</td>
			</tr>
			<tr>
				<td>NO HP</td>
				<td>:</td>
				<td>
					<input type="text" value="<?php echo $data['no_hp']; ?>" name="no_hp" required>
				</td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td>
					<input type="submit" value="Simpan" name="simpan">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>