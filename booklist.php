<?php
require('includes/config.php');
 session_start();
	
	$cat=$_GET['cat'];
	
	$totalq="select count(*) \"total\" from book where b_cat='$cat'";
	
	$totalres=mysqli_query($conn,$totalq) or die("Can't Execute Query...");
	$totalrow=mysqli_fetch_assoc($totalres);
	$query1="select *from book where b_cat='$cat'";

				$res4=mysqli_query($conn,$query1) or die("Can't Execute Query...");
?>
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
			<h1 class="title"><?php  echo @$_GET['catnm']; ?></h1>
		</div>
		<div class="entry row d-flex justify-content-around">
																		
			<?php
				
				while($row2=mysqli_fetch_assoc($res4))
				{							
					echo '<div class="card col-3 mb-4" style="width: 13rem;">
							<a href="detail.php?id='.$row2['b_id'].'">
							<img src="'.$row2['b_img'].'" class="card-img-top"/>
							<br>'.$row2['b_nm'].'</a>
						</div>';

				}
			?>
										

										
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
