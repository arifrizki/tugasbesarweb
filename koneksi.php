<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "admincem_tugasbesar";

	$koneksi = mysqli_connect($servername, $username, $password, $databasename);

	if(mysqli_connect_errno()){
		printf ("Connect failed %s\n", mysqli_connect_error());
		exit();
	}
?>




