<?php
include '../../koneksi.php';

$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$gender = isset($_POST['jk']) ? $_POST['jk'] : false;
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO pendaftaran VALUES ('','$nama','$no_telp','$tempat_lahir','$tgl_lahir', '$gender','$alamat','$email','$username','$password')";
mysqli_query($db, $sql);

header("location:index.php");