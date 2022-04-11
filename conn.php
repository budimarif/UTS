<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "utsweb";
	
	$conn = mysqli_connect($servername, $username, $password, $databasename);
	if(!$conn){
		die("koneksi gagal");
	}
?>