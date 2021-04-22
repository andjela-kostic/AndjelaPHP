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
			<h1 class="title">Dobrodošli  
			<?php 
				if(isset($_SESSION['status']))
				{
					echo $_SESSION['unm']; 
				}
				else
				{	
					echo 'u BOOKSHARK knjižaru';
				}
			?>
			</h1>
			<div class="entry">				
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
