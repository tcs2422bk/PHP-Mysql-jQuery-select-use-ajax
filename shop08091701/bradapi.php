<?php 
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = 'root';
	$db_name = 'shop';
	
	$link = mysqli_connect($db_host, $db_user,
					$db_pass, $db_name) 
			or die("Server ERROR");
mysqli_set_charset ($link,"utf8");

?>