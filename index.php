<?php
	require "header.php";
?>
	<div class="image-slider-wrapper">
		<div>
			<img src="img/bg1.jpg" id="picture" alt="">
		</div>
		
		<div class="nested">
			
			<div>
				<img src="img/img1.jpg">
			</div>
			<div>
				<img src="img/img2.jpg">
			</div>
			<div>
				<img src="img/img3.jpg">	
			</div>
			<div>
				<img src="img/img4.jpg">	
			</div>
		</div>
						
	</div>

	<div id="events-news-wrapper">
		
			<div>
				<img id="news-photo" src="img/newsphoto.jpg">
			</div>
			
			<div id="news">
			<h3>News</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<h3>News</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div id="events">
			<h3>Upcomming Events</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<h3>Upcomming Events</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>

	<div  id="badge-bg">
		<div id="badge-bg-text" >
			<h2>Care a bit</h2>
			<h1>Change a lot</h1>
		</div>
	</div>

	<div >
		<h2>Our Mission</h2>
		<p>
		The mission of the Puerto Rican Police Association (PRPA) is to bring together law enforcement officers of Hispanic descent in a united effort to foster positive relationships with the communities we serve. We will demonstrate a higher degree of professionalism and integrity in all of our interactions as we strive to remove any obstacles to this partnership. In addition, we are dedicated to supporting, and initiating programs and policies that show our commitment to being of service to those communities.
		</p>
	</div>

	
		<!--<div class="container-fluid p-0 " >
			<div class="row">
				<div class="col-sm-8" id="top-bg-container">
					<div id="top-bg-img">
					<?php
						if (isset($_SESSION['userId'])) {
						echo '<p>You are logged in!</p>';
					}
						else {
						echo '<p id="logged-out">You are logged out!</p>';
					}
				
					?>
					</div>
				</div>
				<div class="col-sm-2">
						<img class="img-responsive" src="img/img1.jpg">
				</div>
				<div class="col-sm-2">
						<img class="img-responsive" src="img/img2.jpg">
				</div>
				<div class="col-sm-2">
						<img class="img-responsive" src="img/img3.jpg">
				</div>
				<div class="col-sm-2">
						<img class="img-responsive" src="img/img4.jpg">
				</div>
			</div>
		</div>

		<div class="container-fluid bottom-section ">
			<div class="row">
				<div class="col-sm-12">
					<h2>The Puerto Rican Police Association of Chicago</h2>
					<h3>Serving With Pride</h3>
				<div id="box-container mx-auto">
					<div class="boxes" id="box1">box1</div>
					<div class="boxes"  id="box2">box2</div>
					<div class="boxes" id="box3">box3</div>
				</div>
			</div>
			</div>
		</div>-->
<?php
	require "footer.php";
?>