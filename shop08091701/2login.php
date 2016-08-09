<?php
	session_start();
	include 'bradapi.php';	// $link
	
	$account = $_REQUEST['account'];
	$password = $_REQUEST['password'];
	$sql = "SELECT * FROM member WHERE account='{$account}'" .
			" and password='{$password}'";
	$rs = mysqli_query($link, $sql);
	$count = mysqli_num_rows($rs);
	if ($count>0){
		$_SESSION['key'] = 'ok';
		header('Location: 4myShop.php');
	}else{
?>
	<meta content='10; url=1member.php' http-equiv='refresh' />
	Account or Password Fail
<?php 
	}
?>