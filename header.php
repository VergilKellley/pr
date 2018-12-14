<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Puerto Rican Police Association of Chicago</title>

	<!---------------main style sheet--------------------------->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="Vergil Kelley" content="">

	<script >

	$(document).ready(function() {
		var commentCount = 2;
		$('.more-commments').click(function() {
				commentCount = commentCount + 2;	
			$('#comments').load("load-comments.php", {
				commentNewCount: commentCount
			});
		});
	});
		
	</script>

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
				<?php
			if (isset($_SESSION['userId'])) {
					echo '<form action="includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit">Logout</button>
				</form>';
		}
				else {
					echo '<form action="includes/login.inc.php" method="post">
					<input type="text" name="mailuid" placeholder="Username/Email...">
					<input type="password" name="pwd" placeholder="Password...">
					<button type="submit" name="login-submit">Login</button>
				</form>
				<a href="signup.php">SignUp</a>';
			}
		?>	
					
			</div>
		</nav>
	</header>