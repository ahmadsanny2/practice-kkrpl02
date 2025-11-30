<?php
ob_start();

$host = "127.0.0.1";
$username = "admin";
$password = "admin";
$dbname = "mahasiswa";

$connection = mysqli_connect($host, $username, $password) or die("Can't connect to MySQL server");

mysqli_select_db($connection, $dbname) or die("Can't select database");

$query = "CREATE TABLE mhs (
    nim VARCHAR(10) PRIMARY KEY NOT NULL,
    nama VARCHAR(50) NOT NULL,
    tanggal_lahir DATE,
    alamat TEXT
)";

$result = mysqli_query($connection, $query);

if ($result) {
    echo "Membuat tabel sukses!";
} else {
    echo "Gagal membuat tabel: " . mysqli_error($connection);
}

mysqli_close($connection);
ob_end_flush();
?>