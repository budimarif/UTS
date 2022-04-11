<?php
	//KONEKSI KE DATABASE MYSQL
	include "conn.php";
	
	$sql = "SELECT * FROM sepatu";
	$query = mysqli_query($conn, $sql);
	while($data = mysqli_fetch_array($query)){
		//echo $data["merk_sepatu"]. " ";
		
		$item[] = array(
			'merk_sepatu'=>$data["merk_sepatu"],
			'ukuran'=>$data["ukuran"],
			'id'=>$data["id_sepatu"]
		);
	}
	
	$response = array(
		'status'=>'OK',
		'data'=>$item
	);
	
	echo json_encode($response);
?>