
			<?php
			include ('includes/config.php');
				if($_SESSION['unm']=="admin")
				{
					echo '<ul class="navbar-nav me-auto mb-2 ">
				
					<li class="nav-item">';
						if(isset($_SESSION['status']))
						{
							$query="select * from admin_menu";
							
						}
						$res1=mysqli_query($conn,$query);
						
					while($row=mysqli_fetch_assoc($res1))
						{
							echo '<li class="nav-item    mx-2"><a class="nav-link bg-primary  text-white" href="'.$row['href'].'">'.$row['link_name'].'</a></li>';
							//pass catid not catnm
						}
				}
		echo '</ul>';
		?>