<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
     

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$query = mysqli_query($db, $sql);

$role = mysqli_fetch_array($query);

if ($role['role'] == null) {
	# code...
	header("location:login.php?alert=gagal");
}

if ($role['role'] == 1) {

	echo "ini Admin";
	$cek = mysqli_num_rows($query);

	if ($cek > 0){
		session_start();
	    $data = mysqli_fetch_assoc($query);
		$_SESSION['id'] = $data['id'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['status'] = "admin_logedin";
		// header("location:admin/?alert=sukses");
		header("location:admin/");
	} else {
		header("location:login.php?alert=gagal");
	}
}

if ($role['role'] == 3) {

	echo "ini Nasabah";
	$cek = mysqli_num_rows($query);

	if ($cek > 0){
		session_start();
	    $data = mysqli_fetch_assoc($query);
		$_SESSION['id'] = $data['id'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['status'] = "nasabah_logedin";
		header("location:blank-page.php");
	} else {
		header("location:login.php?alert=gagal");
	}
}
?>
