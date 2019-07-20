<?php
  include "koneksi.php" 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <title>Login!</title>
  </head>
  <body>
    </body>

      <div class="container">
        <h4 class="text-center">LOGIN ADMIN</h4>
        <hr>
        <br>
<?php 
if(isset($_GET['pesan'])){
  if($_GET['pesan'] == "gagal"){
      echo "Login gagal! username dan password salah!";
  }else if($_GET['pesan'] == "logout"){
      echo "Anda telah berhasil logout";
  }else if($_GET['pesan'] == "belum_login"){
      echo "Anda harus login untuk mengakses halaman admin";
  }
}
?>
        <br>
        <form method="post" action="proseslogin_admin.php">
          <div class="form-group">
            <label>Username</label>

            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user"></i></div>
              </div>
                <input type="text" name="username_admin" class="form-control" placeholder="Masukkan Username anda">
            </div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
              </div>
              <input type="Password" name="password_admin" class="form-control" placeholder="Masukkan Password anda">
            </div>
<!--             <hr>
              <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>
            </hr> -->
          </div>
          <center><input type="submit" class="btn btn-primary" value="LOGIN"></center>
          <!-- <button type="reset" class="btn btn-danger">RESET</button> -->
        </form>

      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>