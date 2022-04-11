<?php
	//include koenksi ke database
	include "conn.php";
	
	//echo "delete sepatu";
	
	//menangkap variabel paramete get_browser
	$id = $_GET['id'];
	//echo $id;
	
	$sql = "DELETE FROM `sepatu` 
	WHERE `id_sepatu` = ".$id.";";
	//echo $sql;
	
	//runnig query
	$query = mysqli_query($conn, $sql);
	if($query) {
		$msg = "delete data sepatu berhasil";
	}else{
		$msg = "delete data sepatu tidak berhasil";
	}
	
	$response = array(
		'status'=>'OK',
		'pesan'=>$msg
	);
	
	echo json_encode($response);

?>
