<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_aezaq";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$id = 1; // ID yang ingin diperbarui

// Memperbarui data pengguna
$nama = $_POST['nama'];
$username = $_POST['username'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$password = $_POST['password'];

$query = "UPDATE tb_admin SET nama='$nama', username='$username', alamat='$alamat', no_hp='$no_hp', jenis_kelamin='$jenis_kelamin', password='$password' WHERE id = $id";

if ($conn->query($query) === TRUE) {
    // Pesan sukses
    echo "<script>alert('Data admin berhasil diperbarui.'); window.location.href = 'edit-admin-user.php';</script>";
} else {
    // Pesan kesalahan
    echo "<script>alert('Terjadi kesalahan saat memperbarui data: " . $conn->error . "'); window.location.href = 'edit-data-user.php';</script>";
}

// Menutup koneksi
$conn->close();
?>
