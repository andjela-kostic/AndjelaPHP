<?php
require('includes/config.php');
 session_start();
	
	
	
	$search=$_GET['s'];
	$query="select * from book where b_nm like '%$search%'";
	
	$res1=mysqli_query($conn,$query) or die("Can't Execute Query...");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
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
		<div class="entry">				
			<table border="3" width="100%" >
				<?php
					$count=0;
					while($row=mysqli_fetch_assoc($res1))
					{
						if($count==0)
						{
							echo '<tr>';
						}
						
						echo '<td valign="top" width="20%" align="center">
							<a href="detail.php?id='.$row['b_id'].'">
							<img src="'.$row['b_img'].'" width="80" height="100">
							<br>'.$row['b_nm'].'</a>
						</td>';
						$count++;							
						
						if($count==4)
						{
							echo '</tr>';
							$count=0;
						}
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
