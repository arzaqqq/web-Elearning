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

// Memproses data yang diisi melalui tombol "Update"
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai yang diisi melalui form
   
    $cardTitle = $_POST["cardTitle"];
    $cardText = $_POST["cardText"];

    // Memperbarui data di database
    $sql = "UPDATE tb_course SET course='$cardTitle', isi='$cardText' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        // Mengarahkan kembali ke halaman sebelumnya dengan metode refresh
        header("Refresh: 0; url=course-admin1.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>
