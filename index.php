<?php
	require "header.php";
?>
	<div class="wrapper">
		<div>
			<h2 id="caption"></h2>
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