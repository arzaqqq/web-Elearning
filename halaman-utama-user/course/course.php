<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
      .card-img-top {
        height: auto;
        max-height: 200px;
        width: 100%;
        object-fit: cover;
        margin: 10px 0;
      }

      .card-body {
        text-align: center;
      }

      .mt-5 {
        margin-top: 80px;
      }

      .carousel {
        width: 100%;
        height: 50vh;
        overflow: hidden;
      }

      .carousel-inner {
        height: 100%;
      }

      .carousel-item {
        height: 100%;
      }

      .carousel-item img {
        height: 100%;
        object-fit: cover;
      }

      .page-border {
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
      }

      
  .page-frame {
    background-color: #f8f9fa; /* Warna latar belakang bingkai */
    padding: 20px; /* Jarak padding pada bingkai */
    margin-left: 50px; /* Jarak dari kiri halaman */
    margin-right: 50px; /* Jarak dari kanan halaman */
  }
</style>

   
  </head>
  <body>
 <div class="container mt-5 page-frame">
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
              <a class="nav-link active fw-bold fs-5" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold fs-5" href="course/course.php">Course</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold fs-5" href="#">Mentor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold fs-5" href="#">About Us</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="asset/profil.png" alt="Profile Picture" width="30" height="30" class="rounded-circle">
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Hello Miftahul Arzaq</a></li>
                <li><a class="dropdown-item" href="./edit-data-user.php">Profile</a></li>
                <li><a class="dropdown-item" href="../login_user/login-admin-user.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- start carousel -->
    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="asset/foto1.png" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
          <img src="asset/foto2.png" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
          <img src="asset/foto11.jpg" class="d-block w-100" alt="Slide 3">
        </div>
        <div class="carousel-item">
          <img src="asset/foto9.jpg" class="d-block w-100" alt="Slide 4">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
    <!-- end carousel -->

    <!-- start card -->
    <div class="container mt-2">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 page-border">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fs-1">Aezaq Course</h5>
              <p class="card-text">Kami menawarkan berbagai jenis E-learning yang sesuai dengan yang dibutuhkan di era digital ini dan ssauid dengan kebutuhna anda</p>
              <p class="card-text"><small class="text-body-secondary fw-italy ">CEO - Miftahul Arzaq</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- end card -->

  <!-- start course web programing -->
  <div class="container mt-5 page-frame">
  <h2> Web Development</h2>
  <div class="d-flex justify-content-between">
    <div class="card text-center mb-3" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card text-center mb-3" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    
    <div class="card text-center mb-3" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card text-center mb-3" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>

  <!-- end course web programing -->

  <!-- start course bahasa -->
  <div class="container mt-5 page-frame">
  <h2>Bahasa Asing</h2>
  <div class="d-flex justify-content-between">
    <div class="card text-center mb-3" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card text-center mb-3" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card text-center mb-3" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card text-center mb-3" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>

  <!-- end course bahasa -->
  </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
