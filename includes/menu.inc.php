

<nav class="navbar navbar-expand-lg navbar-light bg-warning p-3">
	<div class="container-fluid">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active fw-bold" aria-current="page" href="index.php">Početna</a>
				</li>
				<li class="nav-item">
				<?php 
						if(isset($_SESSION['status']))
						{
							
							echo '<li class="nav-item"><a class="nav-link" href="logout.php">Odjavi se</a></li>';
						}
						else
						{
							echo '<li class="nav-item"><a class="nav-link" href="register.php">Registruj se</a></li>';
						}
				?>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Kontakt</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="aboutus.php">O nama</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="viewcart.php">Korpa</a>
				</li>
			</ul>
		</div>
	</div>
</nav>