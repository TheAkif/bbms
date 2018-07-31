<?php


$dbase	= 'blood_db';
$host	= 'localhost';
$pass	= '';
$name	= 'root';	


$connect = mysqli_connect($host,$name,$pass,$dbase);

	if (!$connect) {
		die("Error".mysql_connect_error());
	}
	else{
		echo "<h5></h5>";
	}


?>
<link rel="stylesheet" type="text/css" href="">
<style type="text/css">

h5{
	font-family: Calibri;
	text-align: center;
}

</style>