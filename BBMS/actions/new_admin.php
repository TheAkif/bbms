<?php include '../connection/connection.php'; ?>
<?php session_start(); ?>


<?php
if (!isset($_SESSION['name'])) {
		header("Location: ../login/login.php");
	}
	
?>



<!DOCTYPE html>
<html>
<head>
	<title>-Requests for Approval</title>
<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js">
<link rel="stylesheet" type="text/javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.bundle.min.js">
<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<script type="text/javascript">

window.onload = function onload_focus(){
	document.getElementById('#foc').focus();
}

</script>
<style type="text/css">
.back-forward{
	background-color: #fff;
	width: 100%;
	text-align: center;
}
</style>
</head>

<body>
<div class="wrapper">
	<div class="container mw-100%">
	<div class="header-main">
		<div class="img-admin">
			<img src="../img/others/logo3.png" height="40px" width="50px">
		</div>
		<div class="bank-name-admin">
			<p><span> BS </span> Blood Bank</p>
		</div>	
	</div>
	
		<div class="header">
			<h1>Create New Admin <i class="fas fa-user-edit"></i></h1>
		</div>
	</div>
	<div class="back-forward">
			<input type="button" value=" &#8249;&#8249; Previous " onclick="history.back(-1)" />
			<input type="button" value=" Next &#8250;&#8250; " onclick="history.back(+1)" />
	</div>
		<?php

			$mysqli_query="SELECT * FROM `accounts` WHERE email='".$_SESSION['name']."'";
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
					<p><a href="../actions/requests.php"><b>Requests to Approve</b> : <span class="updates">
						<?php 
							$mysqli_query2="SELECT COUNT(*) FROM `requests_to_approve` ";
							$fetch_count=mysqli_query($connect,$mysqli_query2);
							while($count = mysqli_fetch_assoc($fetch_count)) { echo "0".$count['COUNT(*)'];}
						?>
					</span></a></p>
				</div>
				<div class="new-don">
					<p><b>New Donors</b> : <span class="updates"><a href="#"><?php echo 45; }}?></a></span></p>
				</div>
				<div class="logout">
					<legend><a href="../logout/logout.php"><i class="fas fa-sign-out-alt"></i> LOGOUT </a></legend>
				</div>
			</div>
		</div>
		<div class="" align="center">
			<form method="POST" style="background-image: url('../img/others/unnamed7.jpg'); opacity: 0.5;" action="new_admin.php">
				<div class="create-admin">
					<table>
					<tr>	
					<div class="username">
						<td>
							<label for="username"><h4>Username :</h4></label>
						</td>
						<td>
							<input type="text" autofocus="" name="username" required="" placeholder="Enter Your name here...">
						</td>
					</div>
					</tr>
					<tr>
						<div class="signup-mail">
							<td>
								<label for="username"><h4>Email :</h4></label>
							</td>
							<td>
								<input type="email" name="mail" required="" placeholder="Enter Your Email Address...">
							</td>
						</div>
					</tr>
					<tr>
						<div class="signup-contact">
							<td>
								<label for="cont"><h4>Contact :</h4></label>
							</td>
							<td>
								<input type="tel" maxlength="11" minlength="11" name="cont" required="" placeholder="Enter Your Contact Number here...">
							</td>
						</div>
					</tr>
					<tr>
					<div class="signup-password">
						<td>
							<label for="pass"><h4>Password :</h4></label>
						</td>
						<td>
							<input type="password" name="pass" required="" placeholder="Enter Your password here...">
						</td>
					</div>
					</tr>
					
					<tr>
					<div class="signup-confirm-password">
						<td>
							<label for="username"><h4>Confirm Password :</h4></label>
						</td>
						<td>
							<input type="password" name="pass" required="" placeholder="Confirm Your Password...">
						</td>
					</div>
					</tr>
					<tr>
					<div class="submit-btn">
						<td>
							
						</td>
						<td>
							<input type="submit" id="submit-btn" name="signup-submit" value="Create New Admin ">
						</td>
					</div>
					</tr>
				</table>
				</div>
			</form>
		</div>
	</div>
</body>
</html>



