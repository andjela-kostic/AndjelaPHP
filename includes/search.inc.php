<ul>
			<li id="login">
				
						<?php
						require('includes/config.php');
							if(isset($_SESSION['status']))
							{
								echo '<h2>Korisnik :  '.$_SESSION['unm'].'</h2>';
							}
							else
							{
								echo '<form action="process_login.php" method="POST">
										<h2>Ulogujte se</h2>
											<b>Korisničko ime:</b>
											<br><input type="text" name="usernm"><br>
											<br>
											
											
											<b>Lozinka:</b>
											<br><input type="password" name="pwd">
											<input type="submit" id="x" value="Potvrdi" />
										</form>';
							}
						?>
			</li>

			<li id="search">
				<h2>Pretraga po imenu knjige</h2>
				<form method="GET" action="search_result.php">
					<fieldset>
					<input type="text" id="s" name="s" value="" />
					<input type="submit" id="x" value="Pretraži" />
					</fieldset>
				</form>
			</li>
			<li>
				<h2>Kategorije</h2>
				<ul>
					
					
					<!--
					<li><a href="#">Economics</a></li>
					<li><a href="#">Fiction</a></li>
					<li><a href="#">Forestry & WildLife</a></li>
					<li><a href="#">Health & Physics</a></li>
					<li><a href="#">Historical</a></li>
					<li><a href="#">Social</a></li>
					<li><a href="#">Sports & Physical Education</a></li>
					<li><a href="#">Terrorism</a></li>
					<li><a href="#">Tourism</a></li>
					<li><a href="#">Tracking </a></li>
					<li><a href="#">Yoga</a></li>
					-->
								<?php
										
			
										$query="select * from category ";
			
										$res=mysqli_query($conn,$query);
											
										while($row=mysqli_fetch_assoc($res))
											{
												echo '<li><a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></li>';
												//pass catid not catnm
											}
			
											mysqli_close($conn);
								?>
				</ul>
			</li>
			
		</ul>