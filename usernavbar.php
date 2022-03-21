

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Digital Media Emporium</title>




    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	
	<link rel="stylesheet" href="css/style.css">
	<div id="navbar">
		<div class="navbar_container">
		<a href="/" id="navbar_logo">Digital Media Emporium</a>
		<div class="navbar_toggle" id="mobile-menu">
		<span class="bar"></span>
		<span class="bar"></span>
		<span class="bar"></span>
			</div>
		<ul class="navbar_menu">
		
			<?php

if (isset($_SESSION['user'])) { ?>
	<li class="navbar_item">
		 <a href="userhome.php" class="navbar_links"><?php echo $_SESSION['user']; ?></a>
		</li>
		<li class="navbar_item">
		 <a href="logout.php" class="navbar_links">Logout</a>
		</li>
		<li class="navbar_item">
		 <a href="index.php" class="navbar_links">Home</a>
		</li>
		<li class="navbar_item">
		 <a href="services.php" class="navbar_links">Services</a>
		</li>
		<li class="navbar_item">
	 	<a href="cart.php" class="navbar_links">Cart</a>
	 	</li>
		
		<?php } ?>
	
		</ul>
		</div>
	</div>
		
</nav>




</head>

<body>
	

		

</body>

</html>
