<?php 
	// mysqli_connect("localhost","root","", "db_daftar"); 
	$db = mysqli_connect("localhost","root","", "db_daftar"); //sesuaikan dengan password dan username mysql anda
	// mysqli_select_db("db_daftar"); //nama database yang kita gunakan\

	if( !$db ){
    	die("Gagal terhubung dengan database: " . mysqli_connect_error());
	}
?>