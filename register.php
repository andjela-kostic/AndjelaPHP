<?php session_start(); ?>

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

				<div id="page">
						<!-- start content -->
				
							<div id="content">
					
								<div class="post">
									<h1 class="title">Registrujte se</h1>
						
									<div class="entry">
									<br><br>
										<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="blue">You are successfully Registered..</font>';
												echo '<br><br>';
											}
										
										?>
									
										
											<form >
												
													<b>Puno ime(Ime i prezime):</b>&nbsp;&nbsp; 
													<input class="form-control" type='text' id="fnm" onBlur="regEx(this.value,this.id);" required="required" autofocus size="30" maxlength="30" name='fnm'><p></p>
												
												
												
												<br/>
												
												<b>Korisničko ime :</b>
													 <input class="form-control" type='text' id="unm" onBlur="regEx(this.value,this.id);" required="required" autofocus size="30" maxlength="30" name='unm'><p></p>
												<br/>
												
												<b>Lozinka :</b>
													<input class="form-control" type='password' id="pwd" onBlur="regEx(this.value,this.id);" required="required" autofocus name='pwd' size="30"><p></p>
												<br/>
													<b>Ponovite lozinku:</b>
													<input class="form-control" type='password' id="cpwd" onBlur="regEx(this.value,this.id);" required="required" autofocus name='cpwd' size="30"><p></p>
												<b>Pol:</b>
													<input  type="radio"  value="Male" name="gender" onChange="regEx(this.value,this.id)" id='m'><span> Muški</span>  
														<input  type="radio" value="Female" name="gender" onChange="regEx(this.value,this.id)" id='f'> <span> Ženski</span>  
														<br/>
											<b>Mejl:</b>
													<input class="form-control" type='text' id="mail" onBlur="regEx(this.value,this.id);" required="required" autofocus name='mail'><p></p>
												<b>Broj telefona:</b>
													<input class="form-control" type='text' id="contact" onBlur="regEx(this.value,this.id);" required="required" autofocus name='contact' size="30"><p></p>
											<b>Grad:</b>
													
													<select style="width: 195px;" id="city" onChange="regEx(this.value,this.id);" name="city">
													
													</select>
												
												
												
												
												
												
												
												
													
													<button class="btn btn-success"  type="button" onclick="slanje()" name="submit" id="submit"><i class="fa fa-user"></i> Registruj se</button><p id='registration'></p>
												
											</form>
										
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
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script src="js/regex.js" type="text/javascript"></script>
			
</body>
</html>
