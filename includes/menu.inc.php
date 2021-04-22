

<nav class="navbar navbar-expand-lg navbar-light bg-dark p-2">
	<div class="container-fluid">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse px-5" id="navbarSupportedContent">
			
			<ul class="navbar-nav me-auto mb-2">
				<li class="nav-item  mx-2">
					<a class="nav-link  bg-primary  text-white" aria-current="page" href="index.php">Početna</a>
				</li>
				<li class="nav-item">
				<?php 
						if(isset($_SESSION['status']))
						{
							
							echo '<li class="nav-item  mx-2"><a class="nav-link bg-primary  text-white" href="logout.php">Odjavi se</a></li>';
						}
						else
						{
							echo '<li class="nav-item  mx-2"><a class="nav-link bg-primary  text-white" href="register.php">Registruj se</a></li>';
						}
				?>
				</li>
				<li class="nav-item  mx-2">
					<a class="nav-link text-white bg-primary  text-white" href="contact.php">Kontakt</a>
				</li>
				<li class="nav-item  mx-2">
					<a class="nav-link bg-primary  text-white" href="aboutus.php">O nama</a>
				</li>
				<li class="nav-item  mx-2">
					<a class="nav-link bg-primary  text-white" href="viewcart.php">Korpa</a>
				</li>
			</ul>
			<div class="d-flex flex-row bd-highlight">
				<h1 class="text-primary mt-3">BOOK</h1>
				<img src="images/logo2.png"/>
				<h1 class="text-danger mt-5">SHARK</h1>
			</div>
		</div>
	</div>
</nav>