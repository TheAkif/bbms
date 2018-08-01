
	<div class="header-main">
		<div class="img-admin">
			<img src="../img/others/logo3.png" height="40px" width="50px">
		</div>
		<div class="bank-name-admin">
			<p><span> BS </span> Blood Bank</p>
		</div>	
	</div>
	
		<div class="header">

			<h1><?php


				$url = $_SERVER['REQUEST_URI'];
				// echo $url;
				if ($url == '/BBMS/main/admin.php') {
					echo '<h1>Super Admin <i class="fas fa-user-cog"></i></h1>';
				 }
				else if ($url == '/BBMS/actions/new_admin.php') {
					echo '<h1>Super Admin <i class="fas fa-user-cog"></i></h1>';
				}
				else if ($url == '/BBMS/actions/requests.php') {
					echo '<h1>Requests <i class="fas fa-user-clock"></i></h1>';
				}


			?></h1>
		</div>