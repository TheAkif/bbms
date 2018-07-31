<?php include '../connection/connection.php'; ?>
<?php session_start(); ?>
<?php



	$target	=	$_GET['id'];
	$query	=	"DELETE FROM `accounts` WHERE id='".$target."'";
	
	if (mysqli_query($connect,$query)) {
		header("Location: ../main/admin.php");
	}
	else{
		echo "Query didn't execute";
	}


?>