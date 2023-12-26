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

$id = 1; // ID yang ingin ditampilkan

// Mengambil data pengguna berdasarkan ID
$query = "SELECT * FROM tb_admin WHERE id = $id";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan.";
    exit;
}

// Menutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Profile</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

  <style>
    body {
      background-color: #bde0fe;
    }

    .container {
      margin-top: 50px;
    }

    .form-container {
      background-color: #8d99ae;
      padding: 20px;
      border-radius: 10px;
      color: white;
    }

    .input-group {
  position: relative;
}

.input-group .form-control {
  padding-right: 40px; /* Atur padding kanan agar ikon mata tidak tumpang tindih dengan teks */
}

.input-group .btn {
  position: absolute;
  right: 0;
  top: 0;
  height: 100%;
  z-index: 10;
  border: none;
}

     
    
  </style>
</head>
<body>
  <!-- start navbar -->
 <nav class="navbar navbar-expand-lg bg-transparent navbar-nav-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold fs-3" href="#">AEZAQ COURSE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active fw-bold fs-5" aria-current="page" href="../halaman-utama-admin.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold fs-5" href="../course/course-admin1-user.php">Course</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold fs-5" href="../mentor/halaman-mentor-admin1.php">Menthor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold fs-5" href="../../about-us/aboutus.php">About Us</a>
            </li>
            
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../asset/foto/profil.png" alt="Profile Picture" width="30" height="30" class="rounded-circle">
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Hello Admin </a></li>
                <li><a class="dropdown-item" href="./profil1.php">Profil</a></li>
                <li><a class="dropdown-item" href="../login_user/login-admin-user.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->
  

  <!-- Start edit profile -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-5">
        <div class="form-container">
          <h1 class="text-center text-dark">Edit Profile</h1>
          <form class="text-dark" method="POST" action="update-data-admin.php">
            <div class="form-group mb-3">
              <label class="mb-2" for="full-name">Nama Lengkap:</label>
              <input type="text" class="form-control" id="full-name" name="nama" placeholder="Masukkan Nama Lengkap" value="<?php echo $row['nama']; ?>">
            </div>
            <div class="form-group mb-3">
              <label class="mb-2" for="address">Alamat:</label>
              <input type="text" class="form-control" id="address" name="alamat" placeholder="Masukkan Alamat" value="<?php echo $row['alamat']; ?>">
            </div>
            <div class="form-group mb-3">
              <label class="mb-2" for="phone">Nomor HP:</label>
              <input type="text" class="form-control" id="phone" name="no_hp" placeholder="Masukkan Nomor HP" value="<?php echo $row['no_hp']; ?>">
            </div>
            <div class="form-group mb-3">
              <label class="mb-2" for="gender">Jenis Kelamin:</label>
              <select class="form-select" id="gender" name="jenis_kelamin">
                <option value="Laki-laki" <?php if ($row['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                <option value="Perempuan" <?php if ($row['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
              </select>
              <div class="form-group mb-3">
              <label class="mb-2" for="username">Username:</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" value="<?php echo $row['username']; ?>">
            </div>
              <div class="form-group mb-3">
            <label class="mb-2" for="password">Password:</label>
             <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" value="<?php echo $row['password']; ?>">
               <button type="button" class="btn btn-outline-secondary bg-white" id="togglePassword">
                    <i class="bi bi-eye"></i>
               </button>
             </div>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">Perbarui</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
 <!-- end edit profile -->
  <script>
  const togglePassword = document.getElementById('togglePassword');
  const passwordInput = document.getElementById('password');

  togglePassword.addEventListener('click', function () {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    this.querySelector('i').classList.toggle('bi-eye');
    this.querySelector('i').classList.toggle('bi-eye-slash');
  });
</script>
</body>
</html>
