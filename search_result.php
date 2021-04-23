<?php
require('includes/config.php');
 session_start();
	
	$search=$_GET['s'];
	$query="select * from book where b_nm like '%$search%'";
	
	$res1=mysqli_query($conn,$query) or die("Can't Execute Query...");

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
			<h1 class="title"><?php echo @$_GET['cat'];?></h1>
		</div>
		<div class="entry row d-flex justify-content-around">				
			
				<?php
					while($row=mysqli_fetch_assoc($res1))
					{	
						echo '<div class="card col-3 mb-4" style="width: 13rem;">
								<a href="detail.php?id='.$row['b_id'].'">
								<img src="'.$row['b_img'].'" class="card-img-top"/>
								<div class="card-body">
									<br>'.$row['b_nm'].'</a>
							 	</div>
							</div>';						
					}
				?>
			</table>								
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
