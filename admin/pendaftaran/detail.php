<?php

include '../header2.php';
include '../../koneksi.php';


if (!isset($_GET['id'])) {
    header('Location: index.php');
}
$id = $_GET['id'];
$sql = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($db, $sql);
$akun = mysqli_fetch_assoc($query);
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>

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
                            <div class="card-title">Detail Data Pendaftaran</div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form onsubmit="return verifyPassword()" action="" method="post" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="hidden" name="id" id="id" value="<?php echo $akun['id'] ?>" />
                                            <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $akun['nama'] ?>" disabled />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>No. Telp.</label>
                                            <input class="form-control" type="tel" name="no_telp" id="no_telp" name="phone" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" value="<?php echo $akun['no_tlp'] ?>" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" type="text" placeholder="Denpasar" name="tempat_lahir" id="tempat_lahir" value="<?php echo $akun['tempat_lahir'] ?>" disabled />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" placeholder="dd/mm/yyyy" name="tgl_lahir" id="tgl_lahir" value="<?php echo $akun['tgl_lahir'] ?>" disabled />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jk" disabled>
                                                <option value="laki-laki" <?php echo ($akun['jenis_kelamin'] == 'laki-laki') ? "selected" : "" ?>>Laki-Laki</option>
                                                <option value="perempuan" <?php echo ($akun['jenis_kelamin'] == 'perempuan') ? "selected" : "" ?>>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" maxlength="1000" minlength="8" name="alamat" id="alamat" value="" disabled><?php echo $akun['alamat'] ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" name="email" id="email" value="<?php echo $akun['email'] ?>" disabled />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" type="text" value="<?php echo $akun['username'] ?>" id="username" name="username" disabled />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" value="<?php echo $akun['password'] ?>" type="password" minlength="6" id="password" name="password"  disabled/>
                                            <p>
                                                <label for="" class="mt-3">
                                                    <input type="checkbox" onclick="myFunction()" /> Tampilkan Password
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex justify-content-end mr-3">
                                            <!-- <button class="btn btn-primary mt-3 mr-3" type="submit" name="submit" value="Submit"><i class="fa fa-save"></i> Simpan</button> -->
                                            <a href="index.php" class="btn btn-danger mt-3"><i class="fa fa-close"></i> Kembali</a>
                                        </div>
                                    </div>
                                </div>


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