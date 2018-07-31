<?php include '../connection/connection.php'; ?>
<?php

	$target	=	$_GET['app'];
	
	$query	=	"SELECT * FROM `requests_to_approve` WHERE id='".$target."'";
	$result =  mysqli_query($connect,$query);
	
	while ($row = mysqli_fetch_assoc($result)) {
		$name	=	$row['name'];
		$email	=	$row['email'];
		$contact	=	$row['contact'];
		$password	=	$row['password'];
		$remarks	=	mysqli_real_escape_string($connect,$row['remarks']);
	}


	$mysqli_query	=	"INSERT INTO `donors`(id,name,email,contact,password,remarks) VALUES('','".$name."','".$email."','".$contact."','".$password."','".$remarks."')";

	// print_r($mysqli_query);
	// exit();

	$result	=	mysqli_query($connect,$mysqli_query);
	
	if ($result) {

		$mysqli_query2	=	"DELETE FROM `requests_to_approve` WHERE id='".$target."'";
		$deletion	=	mysqli_query($connect,$mysqli_query2);

		if ($deletion) {
			header("Location: requests.php");
		}
	}
	else {
		echo "Record isn't Deleted";
	}




?>