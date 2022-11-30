<?php include 'header.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="content-header">
    <div class="container-fluid">
      <?php
      if (isset($_GET['alert'])) {
        if ($_GET['alert'] == "sukses") {
          echo '
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  Login Sukses, Selamat Datang Admin!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>';
        }
      }
      ?>
    </div>
  </div>
  <?php include "../koneksi.php"; ?>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <?php
              $sql = "SELECT * FROM user";
              $query = mysqli_query($db, $sql);
              $jumlah_user = mysqli_num_rows($query);
              echo "<h3>" . $jumlah_user . "</h3>"
              ?>
              <p>User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="user/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <?php
              $sql = "SELECT * FROM pendaftaran";
              $query = mysqli_query($db, $sql);
              $jumlah_daftar = mysqli_num_rows($query);
              echo "<h3>" . $jumlah_daftar . "</h3>"
              ?>
              <p>Pendaftaran Akun</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="pendaftaran/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>

              <p>Pengajuan Pembukaan Rekening</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="rekening/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>65</h3>

              <p>Jumlah Pengaduan</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="pengaduan/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include 'footer.php' ?>