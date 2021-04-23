

<nav class="navbar navbar-expand-lg navbar-light bg-dark p-2">
	<div class="container-fluid">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse px-5" id="navbarSupportedContent">
			
			<ul class="navbar-nav me-auto mb-2 ">
				
				<li class="nav-item">
				<?php 
						if(isset($_SESSION['status']))
						{
							$query="select * from menu_logged_in ";
							
						}
						else
						{
							$query="select * from menu ";
						}
				?>

				<?php
			
	
					$res=mysqli_query($conn,$query);
						
					while($row=mysqli_fetch_assoc($res))
						{
							echo '<li class="nav-item    mx-2"><a class="nav-link bg-primary  text-white" href="'.$row['href'].'">'.$row['link_name'].'</a></li>';
							//pass catid not catnm
						}
	
						
				?>
				
			</ul>
			<div class="d-flex flex-row bd-highlight">
				<h1 class="text-primary mt-3">BOOK</h1>
				<img src="images/logo2.png"/>
				<h1 class="text-danger mt-5">SHARK</h1>
			</div>
		</div>
	</div>
</nav>