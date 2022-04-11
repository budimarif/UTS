<?php
	//include koenksi ke database
	include "conn.php";
	
	//echo "update sepatu";
	
	//menangkap variabel paramete get_browser
	$id = $_GET['id'];
	//echo $id;
	
	//bagian yang ingin di ubah
	$merk_sepatu = $_POST['sepatu'];
	$ukuran = $_POST['ukuran'];
	
	$sql = "UPDATE `sepatu` SET `merk_sepatu` = '".$merk_sepatu."', `ukuran` = '".$ukuran."'
	WHERE `sepatu`.`id_sepatu` = ".$id.";";
	//echo $sql;
	
	//runnig query
	$query = mysqli_query($conn, $sql);
	if($query) {
		$msg = "update data sepatu berhasil";
	}else{
		$msg = "update data sepatu tidak berhasil";
	}
	
	$response = array(
		'status'=>'OK',
		'pesan'=>$msg
	);
	
	echo json_encode($response);

?>