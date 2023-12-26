<?php
// Membuat koneksi ke server MySQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_aezaq";

$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah parameter id ada dalam URL
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Menghapus data dari database berdasarkan id
    $sql = "DELETE FROM tb_mentor WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo '<script>';
        echo 'if(confirm("Apakah Anda yakin menghapus?")){';
        echo 'window.location.href = "halaman-mentor-admin1.php";';
        echo '} else {';
        echo 'history.go(-1);'; // Go back to the previous page
        echo '}';
        echo '</script>';
    } else {
        echo "Kesalahan: " . $sql . "<br>" . $koneksi->kesalahan;
    }
} else {
    echo "ID tidak diberikan. ";
    exit;
}

// Menutup koneksi
$conn->close();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hapus Kursus Data</title>
</head>

