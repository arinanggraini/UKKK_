<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document UKK_</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php">website galeri foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNav">
      <ul class="navbar-nav me-auto">
      </ul>
        <a href="register.php" class="btn btn-outline-primary m-1">daftar</a>
        <a href="login.php" class="btn btn-outline-success m-1">masuk</a>
    </div>
  </div>
</nav>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body bg-light">
                    <div class="text-center">
                        <h5>Login disini</h5>
                    </div>
                    <form action="config/aksi_login.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <!-- Repeat similar structures for other form fields -->
                        <div class="d-grid mt-2">
                            <button class="btn btn-primary" type="submit" name="kirim">Daftar</button>
                        </div>
                    </form>
                    <hr>
                    <p>Belum punya akun? <a href="register.php">Daftar disini</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <p>&copy; Ukk Ayinn||</p>
</footer>

<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>