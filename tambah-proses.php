<?php
	if(isset($_POST['nim']) && isset($_POST['nama']) && isset($_POST['jenis_kelamin']) && isset($_POST['angkatan']) && isset($_POST['alamat']) && isset($_POST['no_hp']) && isset($_POST['tambah']))
	{
		include('koneksi.php');

		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$angkatan = $_POST['angkatan'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];

		$input = mysqli_query($koneksi, "INSERT INTO biodata (nim, nama, jenis_kelamin, angkatan, alamat, no_hp) VALUES ('$nim', '$nama', '$jenis_kelamin', '$angkatan', '$alamat', '$no_hp')") or die(mysqli_error($koneksi));

		if($input){
			echo "DATA BERHASIL DITAMBAHKAN";
			echo "<a href='tambah.php'>Back</a>";
		}
		else{
			echo "GAGAL MENAMBAHKAN DATA";
			echo "<a href='tambah.php'>Back</a>";
		}
	}
	else
	{
		echo "Isikan Semua Data";
		echo "<a href='tambah.php'>Back</a>";
	}
?>