

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Edit Card</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f5ebe0;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card mx-auto" style="width: 18rem;">
      <div class="card-body">
        <h1 class="card-title text-center mb-4">Form Isi Data Course</h1>
        <form method="POST" action="simpan-course.php">
          <div class="mb-3">
            <label for="cardTitle" class="form-label">Nama Course</label>
            <input type="text" class="form-control" id="cardTitle" name="cardTitle" required>
          </div>
          <div class="mb-3">
            <label for="cardText" class="form-label">keterangan</label>
            <textarea class="form-control" id="cardText" name="cardText" rows="3" required></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>

</html>
