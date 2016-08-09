<?php
	include 'bradapi.php';	// $link
	
	$account = $_REQUEST['account'];
	$password = $_REQUEST['password'];
	$realname = $_REQUEST['realname'];
	$sql = "INSERT INTO member (account,password,member_name)" .
					" VALUES ('{$account}','{$password}','{$realname}')";
	mysqli_query($link, $sql);
	header('Location: 1member.php');
?>