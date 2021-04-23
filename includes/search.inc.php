<div class="d-flex flex-column bd-highlight mb-3">
	<div id="login" class="py-5 mb-3">
		
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
							<b class="searchInp text-light">Korisničko ime:</b>
							<br><input type="text" class="searchInp" name="usernm"><br>
							<br>							
							<b class="searchInp text-light">Lozinka:</b>
							<br><input type="password" class="searchInp" name="pwd"><br/>
							<input type="submit" id="x"  class="btn btn-primary" value="Potvrdi" />
					 </form>';
			}
		?>
	</div>

	<div id="search" class="pb-5">
		<h2>Pretraga po imenu knjige</h2>
		<form method="GET" action="search_result.php">

			<input type="text" id="s" class="searchInp" name="s" value="" /><br/>
			<input type="submit" id="x" class="btn btn-primary"value="Pretraži" />

		</form>
	</div>
	<div class="pb-5">
		<h2>Kategorije</h2>
		<ul>
			<?php
					

				$query="select * from category ";

				$res3=mysqli_query($conn,$query);
					
				while($row=mysqli_fetch_assoc($res3))
					{
						echo '<li><a href="booklist.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></li>';
						//pass catid not catnm
					}

					mysqli_close($conn);
			?>
		</ul>
	</div>
			
</div>