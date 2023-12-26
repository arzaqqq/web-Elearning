<!DOCTYPE html>
<html>
<head>
  <title>Edit Profile</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body{
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
              <a class="nav-link active fw-bold fs-5" aria-current="page" href="./halaman-utama.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold fs-5" href="#">Course</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold fs-5" href="#">Menthor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold fs-5" href="#">About Us</a>
            </li>
            
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="profil.png" alt="Profile Picture" width="30" height="30" class="rounded-circle">
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Hello Miftahul Arzaq</a></li>
                <li><a class="dropdown-item" href="./profil1.php">Profil</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

   <!--start edit profile -->
  
   <div class="container">
   <div class="row justify-content-center">
     <div class="col-md-6 mt-5">
       <div class="form-container">
         <h1 class="text-center text-dark">Edit Profile</h1>
         <form class="text-dark" method="post" action="simpan-data-user.php">
           <div class="form-group mb-3">
             <label class="mb-2" for="full-name">Nama Lengkap:</label>
             <input type="text" class="form-control" id="full-name" name="nama" placeholder="Masukkan Nama Lengkap">
           </div>
           <div class="form-group mb-3">
             <label class="mb-2" for="username">Username:</label>
             <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
           </div>
           <div class="form-group mb-3">
             <label class="mb-2" for="address">Alamat:</label>
             <textarea class="form-control" id="address" name="alamat" placeholder="Masukkan Alamat"></textarea>
           </div>
           <div class="form-group mb-3">
             <label class="mb-2" for="phone-number">Nomor HP:</label>
             <input type="tel" class="form-control" id="phone-number" name="no_hp" placeholder="Masukkan Nomor HP">
           </div>
           <div class="form-group mb-3">
             <label class="mb-2" for="gender">Jenis Kelamin:</label>
             <select class="form-control" id="gender" name="jenis_kelamin">
               <option value="">Pilih Jenis Kelamin</option>
               <option value="Laki-laki">Laki-laki</option>
               <option value="Perempuan">Perempuan</option>
             </select>
           </div>
           <div class="form-group mb-3">
             <label class="mb-2" for="password">Password:</label>
             <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
           </div>
           <button type="submit" class="btn btn-primary">Simpan</button>
         </form>
       </div>
     </div>
   </div>
 </div>
 <!-- end edit profile -->

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</html>
