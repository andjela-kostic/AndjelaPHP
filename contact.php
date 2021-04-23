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
						<input type='text' id="fnm" onBlur="regEx(this.value,this.id);" name='nm' size=35><p></p>
					</div>
						
					<div class="py-4">
						<p class="regText">Vaš mejl:</p>
						<input type='text' id="mail" onBlur="regEx(this.value,this.id);" name='email' size=35><p></p>
					</div>
						
					<div>
						<p class="regText">Poruka:</p>
						<textarea cols="40" id="message" onBlur="regEx(this.value,this.id);" rows="10" name='query' ></textarea><p></p>
					</div>

						<input class="btn btn-success my-5" onclick="slanje_kontakt()" id="submit" type='submit' name='btn' value='   Pošalji   '  >

						
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
			<script src="js/regex.js" type="text/javascript"></script>
</body>
</html>
