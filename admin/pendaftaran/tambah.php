<?php include '../header2.php'; ?>
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
    } else {
      alert("Registrasi Berhasil Di Lakukan");
      window.location.replace("pendaftaran.php");
    }
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
<?php
if (isset($_GET['alert'])) {
  if ($_GET['alert'] == "gagal") {
    echo '<label style="color:#FF0000;text-align:center;">Gagal Mendaftar! </label>';
  }
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pendaftaran</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Tambah Pendaftaran</div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form onsubmit="return verifyPassword()" action="tambah_act.php" method="post" enctype="multipart/form-data">

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

                <p>
                  <label for="">
                    <input type="checkbox" onclick="myFunction()" /> Tampilkan Password
                  </label>
                </p>

                <div class="d-flex justify-content-end mr-3">
                  <button class="btn btn-primary mt-3 mr-3" type="submit" name="submit" value="Submit"><i class="fa fa-save"></i> Tambah</button>
                  <a href="index.php" class="btn btn-danger mt-3"><i class="fa fa-close"></i> Batal</a>
                </div>
                <center>
                  <label>Punya Akun?
                    <a href=""> Klik Disini </a>
                    untuk Login!</label>
                </center>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include '../footer.php'; ?>