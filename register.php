<?php session_start(); ?>

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
				<h1 class="title">Registrujte se</h1>
		</div>
		<div class="entry">
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
				
				<p class="regText">Puno ime (Ime i prezime) :</p>
				<input class="form-control" type='text' id="fnm" onBlur="regEx(this.value,this.id);" required="required" autofocus size="30" maxlength="30" name='fnm'><p></p>
				<br/>
				
				<p class="regText">Korisničko ime :</p>
				<input class="form-control" type='text' id="unm" onBlur="regEx(this.value,this.id);" required="required" autofocus size="30" maxlength="30" name='unm'><p></p>
				<br/>
				
				<p class="regText">Lozinka :</p>
					<input class="form-control" type='password' id="pwd" onBlur="regEx(this.value,this.id);" required="required" autofocus name='pwd' size="30"><p></p>
				<br/>

				<p class="regText">Ponovite lozinku :</p>
				<input class="form-control" type='password' id="cpwd" onBlur="regEx(this.value,this.id);" required="required" autofocus name='cpwd' size="30"><p></p>
				
				<div class="d-flex justify-content-start">
					<p class="regText">Pol:</p>&nbsp;
					<input  type="radio"  value="Male" name="gender" onChange="regEx(this.value,this.id)" id='m' class='mx-1'><span class='mx-3'> Muški</span>  
					<input  type="radio" value="Female" name="gender" onChange="regEx(this.value,this.id)" id='f' class='mx-1'> <span> Ženski</span>  
				</div>

				<p class="regText m-2">Mejl :</p>
				<input class="form-control" type='text' id="mail" onBlur="regEx(this.value,this.id);" required="required" autofocus name='mail'><p></p>
			
				<p class="regText">Broj telefona:</p>
				<input class="form-control" type='text' id="contact" onBlur="regEx(this.value,this.id);" required="required" autofocus name='contact' size="30"><p></p>
			
				<p class="regText">Grad :</p>
					
				<select style="width: 195px;" id="city" onChange="regEx(this.value,this.id);" name="city"></select>

				<button class="btn btn-success"  type="button" onclick="slanje()" name="submit" id="submit"><i class="fa fa-user"></i> Registruj se</button><p id='registration'></p>
						
			</form>			
		</div>
	</div>
				
						<!-- end content -->
						
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
