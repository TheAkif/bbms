<div id="Donors" class="tabcontent">
		<div class="list">
			
			<table>
			<?php
				if( mysqli_num_rows($data1) > 0) {
					
					$counter = 0;
					while($row = mysqli_fetch_assoc($data1)) { 
						
						if ( $counter == 0 ) {
							echo 	"<tr>
										<th><h4>Number </h4></th>
										<th><h4> Name </h4></th>
										<th><h4> Email </h4></th>
										<th><h4> Role </h4></th>
										<th><h4> Actions </h4></th>
									</tr>";
									$counter++;
						}
						else {
							echo 	"<tr>
										<td>".($counter)."</td>
										<td>".$row['name']."</td>
										<td>".$row['email']."</td>
										<td>".$row['role']."</td>
										<td>
											<a href='../actions/edit.php?id=".$row['id']."'> <i class='fa fa-edit'> </i></a>
											<a href='../actions/delete.php?id=".$row['id']."' onclick='confirm_del(this); return false;'> <i class='fa fa-trash-alt'> </i> </a>
											<a href='../actions/information.php?id=".$row['id']."'> <i class='fas fa-info'> </i> </a>
										</td>
									</tr>";
								$counter++;
						}
					}
				}
			?>
			</table>
			</div>
		</div>
		<div id="Admins" class="tabcontent">
		<div class="list">
			<table>
			<?php
				
				if( mysqli_num_rows($data2) > 0) {
					
					$counter = 0;
					while($row = mysqli_fetch_assoc($data2)) { 
						
						if ( $counter == 0 ) {
							echo 	"<tr>
										<th><h4>Number </h4></th>
										<th><h4> Name </h4></th>
										<th><h4> Email </h4></th>
										<th><h4> Role </h4></th>
										<th><h4> Actions </h4></th>
									</tr>";
									$counter++;
						}
						else {
							echo 	"<tr>
										<td>".($counter)."</td>
										<td>".$row['name']."</td>
										<td>".$row['email']."</td>
										<td>".$row['role']."</td>
										<td>
											<a href='../actions/edit.php?id=".$row['id']."'> <i class='fa fa-edit'></i></a>
											<a onclick='confirm_del(this); return false;' href='../actions/delete.php?id=".$row['id']."'> <i class='fa fa-trash-alt'></i></a>
											<a href='../actions/information.php?id=".$row['id']."'> <i class='fas fa-info'></i></a>
										</td>
									</tr>";
								$counter++;
						}
					}
				}
			?>
			</table>
			</div>
		</div>