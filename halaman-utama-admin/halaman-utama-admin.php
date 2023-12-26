<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body{
            background-color: #e5e5e5;
        }

        .custom-img {
            max-height: 350px;
        }
    </style>
</head>
  <body>
    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg bg- transparentnavbar-nav-dark fixed-top ">
      <div class="container-fluid mb-5">
        <a class="navbar-brand fw-bold fs-3" href="#">AEZAQ COURSE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active fw-bold fs-5" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold fs-5" href="./course/course-admin1.php">Course</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold fs-5" href="./mentor/halaman-mentor-admin1.php">Menthor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold fs-5" href="../about-us/aboutus.php">About Us</a>
            </li>
            
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="asset/foto/profil.png" alt="Profile Picture" width="30" height="30" class="rounded-circle">
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Hello Admin</a></li>
                <li><a class="dropdown-item" href="./edit-profile/edit-data-admin.php">Profile</a></li>
                <li><a class="dropdown-item" href="#">Data Pengguna</a></li>
                <li><a class="dropdown-item" href="#">Data Admin</a></li>
                <!-- edit profile -->
                <!-- edit profile -->
                <li><a class="dropdown-item" href="../login_user/login-admin-user.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- start utama  -->
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <img src="asset/foto/utama4.gif" alt="Foto Pertama" class="img-fluid custom-img">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="text-center">
                    <h2 class="mb-3">AEZAQ COURSE</h2>
                    <p class="mb-3">Pelajari banyak hal baru dengan banyak pilihan mentor yang sudah profesional di bidangnya masing-masing</p>
                    <button class="btn btn-primary mb-3">Langganan</button>
                    <button class="btn btn-secondary mb-3">Free Trial</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
            <div class="text-center ">
                    <h2 class="mb-3">Keunggulan AEZAQ COURSE</h2>
                    <p class="mb-3">Pengalaman belajar yang tidak akan dapat dirasakan ditempat lain dengan berbagai program dan kegiatas unggulan !</p>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end ">
                <img src="asset/foto/utama1.gif" alt="Foto Kedua" class="img-fluid custom-img me-3">
            </div>
        </div>
    </div>
    <!-- end utama  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
