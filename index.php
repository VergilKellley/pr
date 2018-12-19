<?php
	require "header.php";
?>

	
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col-sm-12" id="top-bg-container">
					<div id="top-bg-img"></div>
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
		</div>

		<div class="container-fluid bottom-section ">
			<div class="row">
				<div class="col-sm-12">
				<div id="box-container mx-auto">
					<div class="boxes" id="box1">box1</div>
					<div class="boxes"  id="box2">box2</div>
					<div class="boxes" id="box3">box3</div>
				</div>
			</div>
			</div>
		</div>
<?php
	require "footer.php";
?>