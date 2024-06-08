<?php 
	if(isset($_GET['id'])){
		include("koneksi.php");

		$id = $_GET['id'];

		// Check if the id exists
		$stmt = $koneksi->prepare("SELECT id_mahasiswa FROM biodata WHERE id_mahasiswa = ?");
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$stmt->store_result();

		if($stmt->num_rows == 0){
			echo "<script>window.history.back()</script>";
		} else {
			// Delete the record
			$stmt->close();
			$stmt = $koneksi->prepare("DELETE FROM biodata WHERE id_mahasiswa = ?");
			$stmt->bind_param("i", $id);
			if($stmt->execute()){
				echo "BERHASIL MENGHAPUS DATA";
				echo "<a href='index.php'>Back</a>";
			} else {
				echo "GAGAL MENGHAPUS DATA";
				echo "<a href='index.php'>Back</a>";
			}
			$stmt->close();
		}

		$koneksi->close();
	}
?>