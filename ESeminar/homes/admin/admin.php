  <?php 
  include '../koneksi.php';
  session_start();
    if($_SESSION['status']!="login"){
    header("location:../login_admin.php?pesan=belum_login");
  }
  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../admin.css">

    <title>ADMIN!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fix-stop">
      <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>E-SEMINAR</b></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="icon ml-4">
          <h5>
            <i class="fas fa-envelope mr-3" data-toogle="tooltip" title="Pesan"></i>
            <i class="fas fa-bell mr-3" data-toogle="tooltip" title="Notifikasi"></i>
            <a href="log_out_admin.php" class="fas fa-sign-out-alt mr-3"data-toogle="tooltip" title="Keluar"></a>
          </h5>
        </div>
      </div>
    </nav>

<div class="row no-gutters mt-1">
  <div class="col-md-2 bg-dark  pr-3 pt-5">
        <ul class="nav flex-column ml-3 mb-5">
      <li class="nav-item">
        <a class="nav-link active" href="admin.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="seminar.php"><i class="fas fa-list mr-2"></i>Daftar Seminar</a><hr class="bg-secondary">
      </li>
       <li class="nav-item">
        <a class="nav-link text-white" href="workshop.php"><i class="fas fa-place-of-worship mr-2"></i>Daftar Workshop</a><hr class="bg-secondary">
      </li>
       <li class="nav-item">
        <a class="nav-link text-white" href="lomba.php"><i class="fab fa-ravelry mr-2"></i>Daftar Lomba</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="peserta.php"><i class="fas fa-users mr-2"></i>Daftar Peserta</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="organisasi.php"><i class="fas fa-users-cog mr-2"></i>Daftar Organisasi</a><hr class="bg-secondary">
      </li>
    </ul>
  </div>
  <div class="col-md-10 p-5 pt-2">
    <h3><i class="fas fa-tachometer-alt mr-3"></i>DASBOARD</h3><hr>

        <div class="row text-white">
          <div class="card bg-info ml-5" style="width: 18rem;">
          <div class="card-body pr-10">
          <h5 class="card-title">DAFTAR SEMINAR</h5>
          <div class="display-4"></div>
          <a href=""><p class="card-text text-white">DETAIL <i class="fas fa-angle-double-right ml-2"></i></p></a>
          
        </div>
      </div>
       
          <div class="card bg-success ml-3" style="width: 18rem;">
          <div class="card-body pr-10">
          <h5 class="card-title">DAFTAR LOMBA</h5>
          <div class="display-4"></div>
          <a href=""><p class="card-text text-white">DETAIL <i class="fas fa-angle-double-right ml-2"></i></p></a>
          
        </div>
      </div>
       
          <div class="card bg-danger ml-3" style="width: 18rem;">
          <div class="card-body pr-10">
          <h5 class="card-title">DAFTAR WORKSHOP</h5>
          <div class="display-4"></div>
          <a href=""><p class="card-text text-white">DETAIL <i class="fas fa-angle-double-right ml-2"></i></p></a>
          
        </div>
      </div>
    </div>
    <div class="row text-white mt-4">
      <div class="card bg-warning ml-5" style="width: 18rem;">
          <div class="card-body pr-10">
          <h5 class="card-title">DAFTAR PESERTA</h5>
          <div class="display-4"></div>
          <a href=""><p class="card-text text-white">DETAIL <i class="fas fa-angle-double-right ml-2"></i></p></a>
          
        </div>
      </div>
      <div class="card bg-info ml-3" style="width: 18rem;">
          <div class="card-body pr-10">
          <h5 class="card-title">DAFTAR ORGANISASI</h5>
          <div class="display-4"></div>
          <a href=""><p class="card-text text-white">DETAIL <i class="fas fa-angle-double-right ml-2"></i></p></a>
          
        </div>
      </div>
    </div>

  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" scr="../admin.js"></script>

  </body>
</html>