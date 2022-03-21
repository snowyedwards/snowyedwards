<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Digital Media Emporium</title>
	
	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	
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

if (isset($_SESSION['admin'])) { ?>
	<li class="navbar_item">
		 <a href="adminhome.php" class="navbar_links"><?php echo $_SESSION['admin']; ?></a>
		</li>
		<li class="navbar_item">
		 <a href="logout.php" class="navbar_links">Logout</a>
		</li>
		<li class="navbar_item">
		 <a href="adminhome.php" class="navbar_links">Home</a>
		</li>
		
		
		
		<?php } ?>
	
		</ul>
		</div>
	</div>
		
</nav>
		

</body>

</html>
