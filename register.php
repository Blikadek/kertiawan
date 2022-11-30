<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('capcha', {
          'sitekey' : '6Lcw3jsjAAAAAJ-QvVMuHU5uHlmpf6BdxPlaNhLP'
        });
      };
    </script>



    <script>
        function verifyPassword() {
            var pw = document.getElementById("password").value;
            var pwc = document.getElementById("password_confirm").value;
            //check empty password field  
            if (pw == "") {
                document.getElementById("message1").innerHTML = "password tidak boleh kosong!";
                return false;
            }

            if (pw != pwc) {
                document.getElementById("message").innerHTML = "konfirmasi password salah!";
                return false;
            } 

            // else {
            //     alert("Registrasi Berhasil Di Lakukan");
            //     window.location.replace("pendaftaran.php");
            // }
        }
    </script>
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            var y = document.getElementById("password_confirm");
            if (x.type === "password") {
                x.type = "text";
                // y.type = "text";
            } else {
                x.type = "password";
                // y.type = "password";
            }

            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }
    </script>
</head>

<body class="hold-transition register-page">
    <div class="register-box" style="width: 800px">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>Kertiawan</b></a>
            </div>

            <div class="card-body">
                <?php
                if (isset($_GET['alert'])) {
                    if ($_GET['alert'] == "gagal") {
                        echo '<p class="login-box-msg">
            <span style="color:#FF0000;text-align:center;">Register Gagal! Username atau Password Salah! </span>
            </p>';
                    }
                }
                ?>

                <form onsubmit="return verifyPassword()" action="register_act.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input class="form-control" type="text" placeholder="E.g: Putu Gede" name="nama" id="nama" required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>No. Telp.</label>
                                <input class="form-control" type="tel" name="no_telp" id="no_telp" name="phone" placeholder="087886xxxxxx" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input class="form-control" type="text" placeholder="Denpasar" name="tempat_lahir" id="tempat_lahir" required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" type="date" placeholder="dd/mm/yyyy" name="tgl_lahir" id="tgl_lahir" required />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jk">
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" placeholder='Jl. Prof. Dr. Ida Bagus Mantra-"' maxlength="1000" minlength="10" name="alamat" id="alamat" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" placeholder="putugede@hotmail.com" name="email" id="email" required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text" placeholder="PutuGede" id="username" name="username" required />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" placeholder="********" minlength="6" id="password" name="password" required />
                                <p id="message1" style="color:red"> </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input class="form-control" type="password" placeholder="********" minlength="6" id="password_confirm" name="password_confirm" required />
                                <p id="message" style="color:red"> </p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <p class="mb-1">
                        <label for="">
                            <input type="checkbox" onclick="myFunction()" /> Tampilkan Password
                        </label>
                    </p>
                    <div class="g-recaptcha" id="capcha" data-sitekey="6Lcw3jsjAAAAAJ-QvVMuHU5uHlmpf6BdxPlaNhLP"></div><br/>

                    <div class="d-flex justify-content-end mb-3" style="margin-top: -50px">
                        <button class="btn btn-primary mt-3" type="submit" name="submit" value="Submit"><i class="fa fa-user-plus"></i> Register</button>
                        <!-- <a href="index.php" class="btn btn-danger mt-3"><i class="fa fa-close"></i> Batal</a> -->
                    </div>
                    <center>
                        <label>Punya Akun?
                            <a href="login.php"> Klik Disini </a>
                            untuk Login!</label>
                    </center>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>