<?php

			$mysqli_query1="SELECT * FROM `admins` WHERE email='".$_SESSION['name']."'";
			$result=mysqli_query($connect,$mysqli_query1);

			if( mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) {  

		?>

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
						</span></a>
					</p>
				</div>
				<div class="new-don">
					<p><b>New Donors</b> : <span class="updates"><a href="#"><?php echo 45; }}?></a></span></p>
				</div>
				<div class="new-don">
					<p><a href="../actions/new_admin.php"><b>Create New Admin </b> : <span class="updates">New</span></a></p>
				</div>
				<div class="new-don">
					<p><a href="../actions/new_donor.php"><b>Create New Donor </b> : <span class="updates">New</span></a></p>
				</div>
				<div class="logout">
					<legend><a href="../logout/logout.php"><i class="fas fa-sign-out-alt"></i> LOGOUT </a></legend>
				</div>
		</div>
