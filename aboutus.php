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
			<h1 class="title">O autoru</h1>
		</div>
		<div class="entry row" style="height:auto">
			<div class='col-12'>
				<img src='images/ak.jpg'/>
			</div>				
			<div class='col-12'>
				<p class="h3 mt-2">Andjela Kostic 51/19</p>
				<p class="h4">Visoka ICT</p>
				<a class="h5" href="https://andjela-kostic.github.io/portfolio2021/">Portfolio</a>
			</div>	
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
