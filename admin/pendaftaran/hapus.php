<?php

include '../../koneksi.php';


if( isset($_GET['id']) ){

    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM pendaftaran WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        // header('Location: index.php');
        echo '<script language="javascript">
                  alert ("Data Berhasil Di Hapus!);
                  </script>';
                header('location:index.php');
            exit();
    } else {
        die("gagal menghapus...");
        echo '<script language="javascript">
                  alert ("Gagal Menghapus!);
                  </script>';
                header('location:index.php');
            exit();
    }

} else {
    die("akses dilarang...");
}

?>