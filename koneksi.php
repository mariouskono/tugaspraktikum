<?php
    $host = "localhost";
    $user = "id22271821_root";
    $pass = "Akuganteng0912@";
    $name = "id22271821_database";

    $koneksi = mysqli_connect($host, $user, $pass, $name);

    // Check koneksi
    if (!$koneksi) {
        die("Koneksi ke database gagal: " . mysqli_connect_error());
    }
?>