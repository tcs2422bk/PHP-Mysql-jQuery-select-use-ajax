<?php
session_start();
	include 'bradapi.php';	// $link	
	$account = $_REQUEST['account'];
	$sql = "SELECT * FROM member WHERE account='{$account}'";
	$rs = mysqli_query($link, $sql);
	if (mysqli_num_rows($rs)>0){

		echo 'X';
	}else  if (mysqli_num_rows($rs)==0){

		echo 'V';
	}
?>