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
			
				<form action="process_cart.php" method="POST">
				<table width="100%" border="0">
					<tr >
						<Td> <b>ID
						<td> <b>Kategorija
						<td> <b>Proizvod
						<td> <b>Količina
						<td> <b>Rate
						<td> <b>Cena
						<td> <b>Obriši
					</tr>
					<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
				
					<?php
						$tot = 0;
						$i = 1;
						if(isset($_SESSION['cart'])){
							foreach($_SESSION['cart'] as $id=>$x){	
								echo '
									<tr>
									<Td> '.$i.'
									<td> '.$x['cat'].'
									<td> '.$x['nm'].'
									<td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
									<td> '.$x['rate'].'
									<td> '.($x['qty']*$x['rate']).'
									<td> <a href="process_cart.php?id='.$id.'">Obriši</a>
								</tr>
								';
								
								$tot = $tot + ($x['qty']*$x['rate']);
								$i++;
							}
						}
					
					?>
				<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
					
				<tr>
				<td colspan="6" align="right">
				<h4>Ukupno:</h4>
				
				</td>
				<td> <h4><?php echo $tot; ?> </h4></td>
				</tr>
				<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
				
				<Br>
					</table>						

					<br><br>
				<center>
				<input type="submit" value=" Izračunaj " > 
				<a href="checkout.php">Potvrdi i nastavi<a/>
				</center>
				</form>
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
