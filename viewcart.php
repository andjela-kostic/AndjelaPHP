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
			<h1 class="title">Pregled korpe</h1>
		</div>
			<div class="entry">

				<pre><?php
				//	print_r($_SESSION);
				?></pre>
				<?php if(!isset($_SESSION['cart'])){echo 'Vaša korpa je trenutno prazna!';} 

				else{
						echo '<form action="process_cart.php" method="POST">
						<table width="100%" border="0">
							<tr >
								<td> ID</td>
								<td> Kategorija</td>
								<td> Proizvod</td>
								<td> Količina</td>
								<td> Rate</td>
								<td> Cena</td>
								<td>Obriši</td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>';
						
							
								$tot = 0;
								$i = 1;
								if(isset($_SESSION['cart'])){
									foreach($_SESSION['cart'] as $id=>$x){	
										echo '
											<tr>
											<Td> '.$i.'
											<td> '.$x['nm'].'
											<td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
											<td> '.$x['rate'].'
											<td> '.($x['qty']*$x['rate']).'
											<td> <a href="process_cart.php?id='.$id.'#content">Obriši</a>
										</tr>
										';
										
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
									}
								}
								echo '<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
					
								<tr>
								<td colspan="6" align="right">
								<h4>Ukupno:</h4>
								
								</td>
								<td> <h4>';
								echo @$tot; echo'</h4></td>
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
								<Br>
									</table>						
				
									<br><br>
								<center>
									<input class="btn btn-danger text-white" type="submit" value=" Izračunaj " > 
									<a class="btn btn-primary text-white" href="checkout.php#content">Potvrdi i nastavi</a>
								</center>
								</form>';
				}
				
				
					?>
				
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
