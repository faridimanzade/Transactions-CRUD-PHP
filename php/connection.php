<?php 

	ini_set('display_errors', 1);

	$host = "mysql-faridimanzada.alwaysdata.net";
	$user = "190076";
	$passwd = "ferid54321";
	$db = "faridimanzada_hw";

	// $host = "localhost";
	// $user = "root";
	// $passwd = "";
	// $db = "hw";

	$link = new mysqli($host,$user,$passwd,$db);
		if ($link->connect_errno) {
			echo "Error code ".$link->connect_errno." , Msg ".$link->connect_error."<br>";
			exit();
		}

	$link->set_charset("utf8");


 ?>