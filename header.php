<?php
 	session_start();

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="This is a example">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylsheet" href="style.css">
	</head>
<body>

	<header>
		<nav>
			
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#">courses</a></li>
				<li><a href="#">about</a></li>
				<li><a href="#">connect</a></li>

			</ul>
			<div class="header-login">
				 
					<form action="includes/login.inc.php" method="post">
						<input type="text" name="mailuid" placeholder="E-mail/Username">
						<input type="password" name="pwd" placeholder="Password">
						<button type="submit" name="login-submit">Login</button>
				
					</form>
					<a href="signup.php" class="header-signup">Signup</a>
					<form action="includes/logout.inc.php" method="post">
						<button type="submit" name="logout-submit">Logout</button>
					</form>
				
				
				
			</div>
		</nav>
	</header>

</body>
</html>