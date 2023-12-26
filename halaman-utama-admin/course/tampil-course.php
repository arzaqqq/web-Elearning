<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_aezaq";

$conn = new mysqli($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari database
$query = "SELECT * FROM tb_course";
$result = mysqli_query($conn, $query);

// Cek apakah query berhasil dieksekusi
if (!$result) {
    die("Query gagal: " . mysqli_error($conn));
}

// Tampilkan data di card
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="col-lg-3">
    <div class="card  text-center mb-3 border-5">
        <div class="card-body">
            <h5 class="card-title">' . $row['course'] . '</h5>
            <p class="card-text text-truncate text-wrap">' . $row['isi'] . '</p>
            <a href="edit-course.php?id=' . $row['id'] . '" class="btn btn-primary">Edit</a>
            <a href="hapus-course.php?id='. $row['id'] . '" class="btn btn-danger">Hapus</a>
        </div>
    </div>
</div>';
;


}

// Tutup koneksi ke database
mysqli_close($conn);
?>
