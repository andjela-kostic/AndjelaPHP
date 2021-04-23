<?php session_start();?>

<!DOCTYPE html>

<html>
<head>
	<?php
		include("includes/head.inc.php");
	?>
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
			<h1 class="title">About me</h1>
		</div>
		<div class="entry" style="height:auto">
							
			We <a href="http://www.phptpoint.com">Phptpoint</a> are an online free PHP tutorial website for PHP interested candidates.<br/>
			We are providing industry specific PHP tutorial designed for intermediate to advanced PHP levels of complexity.<br/> We are an Online Php Tutorial for Beginners as well as for active PHP programmers to learn and improve their knowledge about PHP, Mysql, cake php, codeigniter & joomla.
			<br/>
			The tutorial we provide comes easy and appropriate examples that give learner the ability to create powerful PHP based web applications very quickly.
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
