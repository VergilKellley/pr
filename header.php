<?php
	session_start();
	date_default_timezone_set('Europe/Amsterdam');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Puerto Rican Police Association of Chicago</title>

	
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!------------------bootstrap min.css file------------------>
	<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->

	<!-------------------jquery cdn-------------------------------->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="Vergil Kelley" content="">

	<script src="js/main.js"></script>

	<!------------JavaScript Chicago Clock ----------------------------------------->
	<script>
			// Comment out the PHP line you will actually use for demostration purposes
		 var d = new Date(<?php echo time() * 1000 ?>);
		//var d = new Date(1389971032 * 1000);

		function updateClock() {
		  // Increment the date
		  d.setTime(d.getTime('') + 1000);

		  // Translate time to pieces
		  var currentHours = d.getHours();
		  var currentMinutes = d.getMinutes();
		  var currentSeconds = d.getSeconds();

		  // Add the beginning zero to minutes and seconds if needed
		  currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
		  currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

		  // Add either "AM" or "PM"
		  var timeOfDay = (currentHours < 12) ? "am" : "pm";

		  // Convert the hours our of 24-hour time
		  currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;
		  currentHours = (currentHours == 0) ? 12 : currentHours;

		  // Generate the display string
		  var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;

		  // Update the time
		  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
		}

		window.onload = function() {
		  updateClock();
		  setInterval('updateClock()', 1000);
		}
	</script>

	<script >
		/*********show more comments*****************/
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

	<script>
			/****display signup-form********/
			$(function(){
		   $('#signupButton').on('click',function(){  
		      $('#signup-form').show();
		   });
		});
	</script>

	<script>
		$(function(){
		   $('#signupButton').on('click',function(){  
		      $('#signupButton').hide();
		   });
		});
	</script>

</head>
<body>

		<div class="header-wrapper">
		
				<!--<p id="datetime"></p>-->
			<div id="chicago-clock">
				<span>Chicago </span><div id="clock">&nbsp;</div>
			</div>
		
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="upcoming.php">Upcoming Events</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="join.php">Join PRPA</a></li>
					<li><a href="board.php">Board Members</a></li>
					<li><a href="partnerships.php">Partnerships</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="donate.php">Donate</a></li>
				</ul>
			</nav>
		</div>

			<div class="logo login-signup">
				<div id="capture"></div>
				<!--<div class="row">
					<div class="col-sm-12 col-md-5 logo">-->
					<!--<div id="logo-phone">
						<a href="#">
							<img src="img/logo.jpg">
						</a>
						<p id="prpa">Puerto Rican Police Association</p>
						<p id="phone">773.888.7176</p>
					</div>-->
						<!--<?php
							if (isset($_SESSION['userId'])) {
								echo '<form action="includes/logout.inc.php" method="post">
									<button type="submit" name="logout-submit">Logout</button>
									</form>';
								} else {
								echo '<form action="includes/login.inc.php" method="post">
									<input type="text" name="mailuid" placeholder="Username/Email...">
									<input type="password" name="pwd" placeholder="Password...">
									<button type="submit" name="login-submit">Login</button>
									</form>
									';
								}
							?>
					</div>-->
					<!--<div class="col-sm-12 col-md-7">-->
						<!--<div id="flag">
							<img src="img/flag3kings.jpg">
						</div>-->
					<!--</div>
				</div>-->
			</div>			

	<!--<script>
		var date = new Date();
		document.getElementById('datetime').innerHTML = date;
	</script>-->
