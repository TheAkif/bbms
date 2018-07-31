<?php include '../connection/connection.php'; ?>
<?php session_start(); ?>


<?php
if (!isset($_SESSION['name'])) {
		header("Location: ../login/login.php");
	}
	$query	=	"SELECT * from `requests_to_approve`";
	$data	=	mysqli_query($connect,$query);
?>



<!DOCTYPE html>
<html>
<head>
	<link rel="apple-touch-icon" sizes="57x57" href="../img/others/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../img/others/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../img/others/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../img/others/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../img/others/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../img/others/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../img/others/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../img/others/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../img/others/apple-icon-180x180.ico">
<link rel="icon" type="image/png" sizes="192x192"  href="../img/others/android-icon-192x192.ico">
<link rel="icon" type="image/png" sizes="32x32" href="../img/others/favicon-32x32.ico">
<link rel="icon" type="image/png" sizes="96x96" href="../img/others/favicon-96x96.ico">
<link rel="icon" type="image/png" sizes="16x16" href="../img/others/favicon-16x16.ico">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.ico">
<meta name="theme-color" content="#ffffff">
	<title>-Requests for Approval</title>
<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>

	<div class="container">
		<div class="header-main">
		<div class="img-admin">
			<img src="../img/others/logo3.png" height="40px" width="50px">
		</div>
		<div class="bank-name-requests">
			<p><span> BS </span> Blood Bank</p>
		</div>	
	</div>
	
		<div class="header">
			<h1>Requests <i class="fas fa-user-clock"></i></h1>
		</div>
	</div>
	<div class="back-forward">
			<input type="button" value=" &#8249;&#8249; Previous " onclick="history.back(-1)" />
			<input type="button" value=" Next &#8250;&#8250; " onclick="history.back(+1)" />
	</div>

		<?php

			$mysqli_query="SELECT * FROM `admins` WHERE email='".$_SESSION['name']."'";
			$result=mysqli_query($connect,$mysqli_query);

			if( mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) {  ?>
		<div class="aside">
			<div class="" align="center">
				<div class="image">
					<img src="../img/others/img_avatar1.jpeg" class="avatar" />
				</div>
				<div class="name-admin">
					<h3>Akif Hussain</h3>
				</div>
				<div class="mail-admin">
					<p><b>Email</b> : <?php echo $row['email']; ?></p>
				</div>
				<div class="role-admin">
					<p><b>Role</b> : <?php echo $row['role']; ?></p>
				</div>
				<div class="req-admin">
					<p><a href="new_admin.php"><b>Create New Admin </b> : <span class="updates">New</span></a></p>
				</div>
				<div class="new-don">
					<p><b>New Donors</b> : <span class="updates"><a href="#"><?php echo 45; }}?></a></span></p>
				</div>
				<div class="logout">
					<legend><a href="../logout/logout.php"><i class="fas fa-sign-out-alt"></i> LOGOUT </a></legend>
				</div>
			</div>
		</div>
		<div class="list">
			<table border="1px solid #CCC">
			<?php
				
				if( mysqli_num_rows($data) > 0) {
					
					$counter = 0;
					while($row = mysqli_fetch_assoc($data)) { 
						
						if ( $counter == 0 ) {
							echo 	"<tr>
										<th><h3>Number </h3></th>
										<th><h3> Name </h3></th>
										<th><h3> Email </h3></th>
										<th><h3> Contact </h3></th>
										<th><h3> Actions </h3></th>
									</tr>";
									$counter++;
						}
						else {
							echo 	"<tr>
										<td>".($counter)."</td>
										<td>".$row['name']."</td>
										<td>".$row['email']."</td>
										<td>".$row['contact']."</td>
										<td>
											<a class='accept-btn' href='../actions/approve.php?app=".$row['id']."'>Accept</a>
											<a class='decline-btn' href='../actions/decline.php?dec=".$row['id']."'>Decline</a>
										</td>
									</tr>";
								$counter++;
						}
					}
				}
			?>
			</table>
		</div>

</body>
</html>