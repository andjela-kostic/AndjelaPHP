<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
</head>

<body>
<!-- start header -->
<?php
		include("includes/menu.inc.php");
    ?>
	<header>
		<div id="logo">
			<?php
				include("includes/logo.inc.php");
			?>
		</div>
	</header>
<!-- end header -->
<!-- start page -->

<div id="page" class="row">					
	<!-- start sidebar -->
	<div id="sidebar" class="col-3 bg-dark">
		<?php
			include("includes/search.inc.php");
		?>
	</div>
	<!-- end sidebar -->

	<!-- start content -->			

	<div id="content" class="col-9">
		<div class="post bg-dark">
			<h1 class="title">Kontaktirajte nas</h1>
		</div>	
			<div class="entry" >
			
				<form action="process_contact.php" method="POST">						
					<div>
						<p class="regText">Ime i prezime:</p>
						<input type='text' name='nm' size=35>
					</div>
						
					<div class="py-4">
						<p class="regText">Vaš mejl:</p>
						<input type='text' name='email' size=35>
					</div>
						
					<div>
						<p class="regText">Poruka:</p>
						<textarea cols="40" rows="10" name='query' ></textarea>
					</div>

						<input class="btn btn-success my-5" type='submit' name='btn' value='   Pošalji   '  >

						
				</form>
			
			</div>
			
		
		
	</div>
						<!-- end content -->

			<!-- end page -->
						
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
