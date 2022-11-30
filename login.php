<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- <script>
        function myFunction() {
            var x = document.getElementById("username");
            var y = document.getElementById("password");
            if (x == "") {
                document.getElementById("message").innerHTML = "Username tidak boleh kosong!";
                return false;
            }

            if (y == "") {
              document.getElementById("message1").innerHTML = "Password tidak boleh kosong!";
                return false;
            } 
        }
  </script> -->
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>Kertiawan</b></a>
      </div>

      <div class="card-body">
        <?php
        if (isset($_GET['alert'])) {
          if ($_GET['alert'] == "gagal") {
            echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align: center">
            <strong>Login Gagal!<br> Username atau Password Salah!!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          }
          if ($_GET['alert'] == "belum_login") {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert" style="text-align: center">
            <strong>Mohon Login Terlebih Dahulu!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          }
          if ($_GET['alert'] == "logout") {
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="text-align: center">
            <strong>Berhasil Logout!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          }
        }
        ?>

        <form onsubmit="return myFunction()" action="aktif_login.php" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username" id="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            <p id="message" style="color:red"> </p>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <p id="message1" style="color:red"> </p>
          </div>
          <div class="row">
            <div class="col-8">
              <!-- <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> -->
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Log In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <p class="mb-3">
          <a href="forgot-password.html">Lupa Password?</a>
        </p>

        <center>
          <label>
            Belum Punya Akun?
            <a href="register.php"> Klik Disini </a>
          </label>
        </center>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>