<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    body{
      background-color:#e5e5e5;
       /* background-image: url(asset/foto9.jpg);
      background-size: cover;
      background-position: center;  */
    }

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

    /* .mt-5 {
      margin-top: 80px;
    } */

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

    /* .page-frame {
      background-color: #f8f9fa;
      padding: 20px;
      margin-left: 50px;
      margin-right: 50px;
      overflow-x: auto;
      white-space: nowrap;
    } */

    /* .card {
      max-width: 250px;
    } */

   .page-frame{
    padding-top: 10px ;
   }
    

    .col-lg-3 {
      min-width: 250px;
    }

    .card-text-wrapper {
    display: flex;
    flex-direction: column;
    word-wrap: break-word;
}

/*  */


  </style>
</head>

<body>
  <div class="container mt-5 page-frame">
    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg  navbar-nav-dark fixed-top ">
      <div class="container-fluid mb-5">
        <a class="navbar-brand fw-bold fs-3" href="#">AEZAQ COURSE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active fw-bold fs-5" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold fs-5" href="#">Course</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold fs-5" href="../mentor/halaman-mentor-admin1.php">Mentor</a>
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
                <li><a class="dropdown-item" href="#">Hello User </a></li>
                <li><a class="dropdown-item" href="./edit-data-user.php">profile</a></li>
                
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
          <img src="asset/foto1.jpg" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
          <img src="asset/foto2.jpg" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
          <img src="asset/foto3.jpg" class="d-block w-100" alt="Slide 3">
        </div>
        <div class="carousel-item">
          <img src="asset/foto4.jpg" class="d-block w-100" alt="Slide 4">
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
   <div class="container mt-5 shadow-lg">
   <div class="card mx-auto text-center">
  <div class="card-body text-center">
    <h5 class="card-title">AEZAQ COURSE</h5>
    <p class="card-text">"Selamat datang di AEZAQ COURSE, platform online terbaik untuk meningkatkan pengetahuan dan keterampilan Anda melalui beragam kursus interaktif dan berkualitas tinggi. Dapatkan akses mudah, belajar dengan fleksibilitas, dan tingkatkan potensi diri Anda dalam berbagai bidang. Bergabunglah dengan komunitas kami dan jadilah bagian dari perjalanan belajar yang inspiratif!"</p>
    <p class="card-text"><small class="text-muted">CEO - Miftahul Arzaq</small></p>
  </div>
</div>
</div>

<!-- end card -->

<!-- start course web programing -->
<div class="card bg-light mt-5">
<div class="container mt-5 page-frame  ">
  <h2 class="text-center d-flex justify-content-center align-items-center me-5">COURSE YANG TERSEDIA</h2>

  <div class="row mt-3 text-center" id="cardContainer" style="overflow-x: auto; white-space: nowrap;">
    <?php include 'tampil-course-user.php'; ?>
  </div>

  
</div>


<!-- end course web programing -->


    <!-- end course web programing -->

    <!-- start course bahasa -->
   
    <!-- end course bahasa -->
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <script>
    function addCard() {
      var container = document.getElementById('cardContainer');
      var cards = container.getElementsByClassName('card');
      if (cards.length % 4 === 0) {
        container.innerHTML += '<div class="row mt-3">';
      }

     /*  var newCard = document.createElement('div');
      newCard.className = 'col-lg-3';
      newCard.innerHTML = `
        <div class="card text-center mb-3">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
            <a href="edit-course.php" class="btn btn-white">Edit</a>
            <a href="hapus1-course.php" class="btn btn-danger">Hapus</a>
          </div>
        </div>
      `;*/

      container.lastElementChild.appendChild(newCard);

      if (cards.length % 4 === 0) {
        container.innerHTML += '</div>';
      }
    }

    function removeCard(card) {
      card.parentNode.parentNode.parentNode.remove();
    }
  </script>
</body>

</html>
