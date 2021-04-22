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

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title">Dobrodošli  
			<?php 
				if(isset($_SESSION['status']))
				{
					echo $_SESSION['unm']; 
				}
				else
				{	
					echo 'u BookShark knjižaru';
				}
			?>
			</h1>
			<div class="entry">
				
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
					
	<!-- start sidebar -->
	<div id="sidebar">
			<?php
				include("includes/search.inc.php");
			?>
	</div>
	<!-- end sidebar -->
		<div style="clear: both;">&nbsp;</div>
				</div>
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
