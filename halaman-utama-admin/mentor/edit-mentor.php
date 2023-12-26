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

    // Mengambil data dari database berdasarkan id
    $sql = "SELECT * FROM tb_mentor WHERE id = $id";
    $result = $conn->query($sql);

    // Memeriksa apakah data ditemukan
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $cardTitle = $row["mentor"];
        $cardText = $row["isi"];
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak diberikan.";
    exit;
}

// Memproses data yang diisi melalui tombol "Update"
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $cardTitle = $_POST["cardTitle"];
    $cardText = $_POST["cardText"];

    // Memperbarui data di database
    $sql = "UPDATE tb_mentor SET mentor='$cardTitle', isi='$cardText' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data pengguna berhasil diperbarui.'); window.location.href = 'halaman-mentor-admin1.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Course</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body{
            background-color: #f5ebe0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container ">
        <div class="card text-center">
            <div class="card-body">
                <h2 class="card-title">Edit Data Mentor</h2>

            <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] . "?id=" . $id; ?>">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label for="cardTitle text-end ">Course Title:</label>
                    <input type="text" class="form-control" id="cardTitle" name="cardTitle" value="<?php echo $cardTitle; ?>">
                </div>
                <div class="form-group">
                    <label for="cardText">Course Text:</label>
                    <textarea class="form-control" id="cardText" name="cardText"><?php echo $cardText; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary ">Update</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

