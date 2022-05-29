<?php
// $pass = password_hash("string", PASSWORD_DEFAULT);

// echo $pass;
require 'user/inc/db.php';

	global $link;
	$sql = "SELECT * FROM users ORDER BY date_created DESC";
	$query = mysqli_query($link, $sql);
	if($query){
		while ($row = mysqli_fetch_assoc($query)) {
			$inv[] = $row; 
		}echo json_encode(array('users' => $inv, 'error' => '', 'success' => 1));
	}else{
		echo json_encode(array('error' => 'Failed', 'success' => 0));
	}
