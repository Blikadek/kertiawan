<?php

include '../../koneksi.php';

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['submit'])){

        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $no_telp = $_POST['no_telp'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $gender = isset($_POST['jk']) ? $_POST['jk'] : false;
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $username = $_POST['username'];

    if ($_POST['password'] == "") {
        # code...
    
        $sql = "UPDATE pendaftaran SET nama='$nama', no_tlp='$no_telp', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jenis_kelamin='$gender', alamat='$alamat', email='$email', username='$username'  WHERE id='$id'";
        $query = mysqli_query($db, $sql);

        if ($query) {
                echo '<script language="javascript">
                      alert ("Update Data Berhasil Di Lakukan!);
                      </script>';
                header('location:index.php');
                exit();

            } else {
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($db);
                echo "Data Kosong";
            }
            mysqli_close($db);

    } else {

        $password = $_POST['password'];

        $sql = "UPDATE pendaftaran SET nama='$nama', no_tlp='$no_telp', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jenis_kelamin='$gender', alamat='$alamat', email='$email', username='$username', password='$password' WHERE id='$id'";
        $query = mysqli_query($db, $sql);


        if ($query) {
                 echo '<script language="javascript">
                      alert ("Update Data Berhasil Di Lakukan!);
                      </script>';
                header('location:index.php');
            } else {
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($db);
                echo "Data Kosong";
            }
            mysqli_close($db);
        }

} else {
    die("Akses dilarang...");
}

?>