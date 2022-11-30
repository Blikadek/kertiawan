<?php include '../header2.php';
include '../../koneksi.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
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
              <div class="card-title">Data Pendaftaran Akun Nasabah</div>
              <div class="d-flex justify-content-end">
                <!-- <a href="tambah.php" class="btn btn-primary btn-sm"><i class="fas fa-plus mr-2"></i>Tambah Data</a> -->
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telp</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $sql = "SELECT * FROM pendaftaran";
                  $query = mysqli_query($db, $sql);
                  $no = 1;

                  while ($data = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $data['nama'] . "</td>";
                    echo "<td>" . $data['alamat'] . "</td>";
                    echo "<td>" . $data['jenis_kelamin'] . "</td>";
                    echo "<td>" . $data['no_tlp'] . "</td>";
                    echo "<td>" . $data['tempat_lahir'] . "</td>";
                    echo "<td>" . $data['tgl_lahir'] . "</td>";
                    echo "<td>" . $data['email'] . "</td>";
                    echo "<td>" . $data['username'] . "</td>";
                    echo "<td>" . $data['password'] . "</td>";


                    echo "<td>";
                    echo "
                            <a href='edit.php?id=" . $data['id'] . "' class='btn btn-warning btn-sm'><i class='fas fa-edit mr-2'></i>Edit</a>
                            <a href='detail.php?id=" . $data['id'] . "' class='btn btn-primary btn-sm'><i class='fas fa-info mr-2'></i>Detail</a>
                            ";
                            ?>
                            <a onclick="return confirm(' Yakin Ingin Dihapus?')" <?php echo " href='hapus.php?id=" . $data['id']. "' "; ?> class='btn btn-danger btn-sm'><i class='fas fa-trash mr-2'></i>Delete</a>
                  <?php
                    echo "</td>";
                  echo "</tr>";
                  $no++; }
                  ?>
                </tbody>

                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telp</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
              </table>
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

<?php include '../footer2.php'; ?>