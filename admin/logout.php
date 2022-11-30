<?php
include '../koneksi.php';
session_start();
if ($_SESSION['status'] = "admin_logedin") {
	# code...
	session_destroy();
}
header("location:../login.php?alert=logout");
?>

