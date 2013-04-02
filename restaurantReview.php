<!doctype html>

<html lang="en-US">
<?php
 			include("includes/header.php");
?>

<?php	
	$db = mysqli_connect('localhost', 'Reviewer', 'food', 'restaurant_reviews');

	$restName = $_POST['restName'];
	
	echo "<div id=\"leftcontainer\"><h2 class=\"mainheading\">Reviews for <b>$restName</b></h2>";
	
	// Get Restaurant Id
	$idQuery = "SELECT id FROM restaurants WHERE Name='$restName'";
	$idResult = mysqli_query($db, $idQuery);
	$id = 0;
	while($row2 = mysqli_fetch_array($idResult))
	{
		$id = $row2['id'];
	}
	
	$query = "SELECT * FROM reviews WHERE Restaurant_ID=$id";
	$result = mysqli_query($db, $query);
	
	while($row = mysqli_fetch_array($result))
	{
		$authorid = $row['authorid'];
		
		// Identify the author
		$userQuery = "SELECT real_name FROM user_info WHERE user_id=$authorid";
		$userResult = mysqli_query($db, $userQuery);
		$author = "Unknown";
		
		while($row3 = mysqli_fetch_array($userResult))
		{
			$author = $row3['real_name'];
		}
		
		$numStars = $row['Num_Stars'];
		$priceRating = $row['Price_Rating'];
		$review = $row['Review_Text'];
		
		echo "<hr><table>";
		echo "<tr><td><b>Author</b>:</td><td>$author</td></tr>";
		echo "<tr><td><b>Quality</b>:</td><td>";
		
		for($i = 0; $i < $numStars; $i++)
		{
			echo "★";
		}
		echo "</td></tr>";
		echo "<tr><td><b>Value</b>: </td><td>";
		
		for($i = 0; $i < $numStars; $i++)
		{
			echo "★";
		}
		echo "</td></tr>";
		echo "<tr><td><b>Review</b>: </td>";
		echo "<td>$review</td></tr></table>";
	}
	echo "<hr>";
?>
</section>
<section id="sidebar">
<?php
	include("includes/footer.php");
	?>