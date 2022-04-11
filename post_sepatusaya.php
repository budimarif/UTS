<?php
	//koneksi database
	include "conn.php";
	
	//mendapatkan variabel post
	$merk_sepatu = isset($_POST["Sepatu"]) ? $_POST["Sepatu"] : "";
	//echo $merk_sepatu;
	$ukuran = isset($_POST["ukuran"]) ? $_POST["ukuran"] : "";
	//echo $ukuran;
	$id_sepatu = isset($_POST["id"]) ? $_POST["id"] : "";
	//echo $id_sepatu;
	
	//query menambahkan data
	$sql = "INSERT INTO `sepatu` (`merk_sepatu`, `ukuran`) 
	VALUES ('".$merk_sepatu."', '".$ukuran."');";
	//echo $sql;
	
	//runnig query
	$query = mysqli_query($conn, $sql);
	if($query) {
		$msg = "simpan data sepatu berhasil";
	}else{
		$msg = "simpan data sepatu tidak berhasil";
	}
	
	//echo $msg;
	$response = array(
		'status'=>'OK',
		'pesan'=>$msg
	);
	
	echo json_encode($response);

?>