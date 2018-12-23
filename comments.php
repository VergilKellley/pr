<?php
	require "header.php";
	date_default_timezone_set('America/Chicago');
	include 'includes/dbh.inc.php';
	include 'includes/comments.inc.php';
?>

<div>
	<img class="comments-img" src="img/policepatch.jpg">
</div>

<div id="comments">
	<?php
		$sql = "SELECT * FROM comments LIMIT 2";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<p>";
				echo $row['uid'];
				echo "<br>";
				echo $row['message'];
				echo "</p>";
			}
		} else {
			echo "There are no comments!";
		}
	?>
</div>

<button class="more-comments">Show more comments</button>
<div>
	<?php
	//echo "<form method='POST' action='".setComments($conn)."'>
	//	<input type='hidden' name='uid' value='Anonymous'>
	//	<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
		echo "<textarea name='message'></textarea><br>
		<button class='comment-button' type='submit' name='commentSubmit'>Comment</button>
	</form>";

	//getComments($conn);
	?>
</div>


<?php
	require "footer.php";
?>