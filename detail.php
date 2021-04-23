<?php session_start();
	require('includes/config.php');
	
	$id=$_GET['id'];
	
	$q="select * from book where b_id=$id";
	
	$res6=mysqli_query($conn,$q) or die("Can't Execute Query..");
	$row1=mysqli_fetch_assoc($res6);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/java.js"></script>
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
			<h1 class="title"><?php echo $row1['b_nm'];?></h1>
		</div>
		<div class="entry">
			<?php
			
				echo '	<table border="0" width="100%">
						<tr>
						<td><hr color="purple"></td>
					</tr>
						<tr align="center" bgcolor="#EEE9F3">
							<td>Detalji o proizvodu</td>
					</tr>
					<tr>
						<td><hr color="purple"></td>
					</tr>
					</table>
				
				<table border="0"  width="100%" bgcolor="#ffffff">
					<tr> 
						
						<td width="15%" rowspan="3">
							<img src="'.$row1['b_img'].'" width="100">
						
						</td>
					</tr>
				
					<tr> 
						<td width="50%" height="100%">
							<table border="0"  width="100%" height="100%">
								<tr valign="top">
									<td align="right" width="10%">NAME</td>
									<td width="6%">: </td>
									<td align="left">'.$row1['b_nm'].'</td>
								</tr>

								
								<tr>
									<td align="right">ISBN</td>
									<td>: </td>
									<td align="left">'.$row1['b_isbn'].'</td>
									
								</tr>
								
														
								<tr>
									<td align="right">Publisher </td>
									<td>: </td>
									<td align="left">'.$row1['b_publisher'].'</td>
									
								</tr>											
								
								<tr>
									<td align="right"> Izdanje </td>
									<td> : </td>
									<td align="left">'.$row1['b_edition'].'</td>
									
								</tr>
								
								<tr>
									<td align="right">  Broj strana </td>
									<td> : </td>
									<td align="left">'.$row1['b_page'].'</td>
								</tr>
								
								<tr>
									<td align="right"> Cena </td>
									<td> : </td>
									<td align="left">'.$row1['b_price'].'</td>
								</tr>
							</table>
			
							
						</td>
					</tr>
				</table>
			
				
				
				<table border="0" width="100%">
						<tr>
						<td><hr color="purple"></td>
					</tr>
						<tr align="center" bgcolor="#EEE9F3">
							<td>Opis</td>
					</tr>
					<tr>
						<td><hr color="purple"></td>
					</tr>
											
					</table>
					
					'.$row1['b_desc'].'
													

					
					<tr><td colspan=2><hr color="purple"></td></tr>
				
				<table border="0" width="100%">
					
						<tr align="center" bgcolor="#EEE9F3">';
						
						if(isset($_SESSION['status']))
						{
						echo ' <td><a href="process_cart.php?nm='.$row1['b_nm'].'&cat='.$_GET['cat'].'&rate='.$row1['b_price'].'">
							<img src="images/addcart.jpg">
						</a></td>';
					}
					else
					{
						echo '<td><img src="images/addcart.jpg"><br><a href="register.php"> <h4>Da biste kupili ovaj proizvod, molimo, ulogujte se.</h4></a></td>';
					}
					echo '</tr>
				</table>';
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
