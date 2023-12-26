<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_aezaq";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$password = $_POST['password'];

// Query untuk menyimpan data ke database
$sql = "INSERT INTO tb_admin (nama, username, alamat, no_hp, jenis_kelamin, password)
        VALUES ('$nama', '$username', '$alamat', '$no_hp', '$jenis_kelamin', '$password')";

// Eksekusi query
if (mysqli_query($conn, $sql)) {
  echo "Data berhasil disimpan.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
