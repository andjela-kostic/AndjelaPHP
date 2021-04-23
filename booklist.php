<?php
require('includes/config.php');
 session_start();

	
	
	
	$cat=$_GET['cat'];
	
	$totalq="select count(*) \"total\" from book where b_cat='$cat'";
	
	$totalres=mysqli_query($conn,$totalq) or die("Can't Execute Query...");
	$totalrow=mysqli_fetch_assoc($totalres);
	
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
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title"><?php /* echo $_GET['b_nm']; */?></h1>
									<div class="entry">
										
										<table border="4" width="100%" >
											<br><br><br><br><br>
											<?php
												$query1="select *from book where b_cat='$cat'";
												$res4=mysqli_query($conn,$query1) or die("Can't Execute Query...");
												$count=0;
												while($row2=mysqli_fetch_assoc($res4))
												{
													
													if($count==0)
													{
														echo '<tr>';
													}	
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?id='.$row2['b_id'].'">
														<img src="'.$row2['b_img'].'" width="80" height="100">
														<br>'.$row2['b_nm'].'</a>
													</td>';
													$count++;							
													
													if($count==2)
													{
														echo '</tr>';
														$count=0;
													}
												}
											?>
											
										</table>
										
										
										<br><br><br>
										
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
