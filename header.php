<!DOCTYPE html>
<html lang="en">
<head>
	<title>Puerto Rican Police Association of Chicago</title>

	<!---------------main style sheet--------------------------->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="Vergil Kelley" content="">

</head>
<body>
	<header>
		<nav>
			<a href="#">
				<img src="img/logo.jpg">
			</a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="donate.php">Donate</a></li>
			</ul>
			<div>
				<form action="includes/login.inc.php" method="post">
					<input type="text" name="mailuid" placeholder="Username/Email...">
					<input type="password" name="pwd" placeholder="Password...">
					<button type="submit" name="login-submit">Login</button>
				</form>
				<a href="signup.php">SignUp</a>
				<form action="includes/logout.php" method="post">
					<button type="submit" name="logout-submit">Logout</button>
				</form>
			</div>
		</nav>
	</header>