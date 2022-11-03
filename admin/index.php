<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <!--NAVBAR-->
    <header>
<nav class="navbar navbar-expand-lg bg-dark text-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><span>./Dayy</span>404</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <i class="bars text-primary fa-solid fa-bars"></i>
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="gallery.html">Admin Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.html">Admin Gallery</a>
        </li>
        <li class="nav-item dropdown text-light">
          <a class="nav-link dropdown-toggle" href="/category/downloads/index.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Admin Downloads
          </a>
          <ul class="dropdown-menu text-light">
            <li><a class="dropdown-item" href="/category/downloads/android/index.html">Apps Android</a></li>
            <li><a class="dropdown-item" href="/category/downloads/windows/index.html">Apps Windows</a></li>
          </ul>
          <li class="nav-item">
          <a class="nav-link text-light" href="#">Logout>></a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<br>
<main>
  <?php 
  $katakunci = (isset($_GET['katakunci']))?$_GET['katakunci']:"";
  ?>
  <h1 style="padding-top:30px">Halaman Admin</h1>
  <p>
    <a href="halaman_input.php">
      <input type="button" class="btn btn-primary" value="Buat Halaman Baru">
    </a>
  </p>
  <form class="d-flex" menthod="get">
        <input class="form-control me-2" type="text" placeholder="Cari Kata Kunci" name="katakunci" value="<?php echo $katakunci?>">
        <input class="btn btn-outline-primary" type="submit" name="cari" value="Cari"></input>
      </form>

      <table class="table table-strippe">
        <thead>
          <tr>
            <th class="col-1">#</th>
            <th>Judul</th>
            <th>Kutipan</th>
            <th class="col-2">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, nulla?</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
            <td>
              <span class="badge text-bg-warning">Edit</span>
              <span class="badge text-bg-danger">Delete</span>
            </td>
          </tr>
        </tbody>
      </table>
</main>


<footer class="bg-light fixed-bottom">
<div class="text-center p-3" style="background:#CCCCCC">
Copyright 2022
</div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>