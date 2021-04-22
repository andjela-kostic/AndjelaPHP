<ul>
			<li class="current_page_item"><a href="index.php">Početna</a></li>
			<li><a href="category.php">Kategorije</a></li>
			<li><a href="subcategory.php">Podkategorije</a></li>
			<li><a href="all_book.php">Knjige</a></li>
			<li class="last"><a href="contact.php">Kontakt</a></li>
			
			<?php
				if(isset($_SESSION['status'])&& $_SESSION['unm']=="admin")
				{
					echo '<li><a href="../logout.php">Logout</a></li>';
				}
				else
				{
					echo '<li><a href="../register.php">Register</a></li>';
				}
			?>
			
		</ul>