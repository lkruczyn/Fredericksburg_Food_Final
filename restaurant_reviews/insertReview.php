
<!doctype html>

<html lang="en-US">
<?php
 			include("includes/header.php");
?>
<div id="leftcontainer">
<section id="normalheader" class="header2">

</section>
  <h2>Your review has been submitted.</h2>

 <?php
	$db = mysqli_connect('localhost', 'root', '', 'restaurant_reviews');
	
	$rest_name = $_POST['restaurantName'];
	$authorname = $_SESSION['username'];
	
	echo "<p><b>authorname = $authorname</b></p>";
	$numStars = $_POST['qRating'];
	$priceRating = $_POST['vRating'];
	$content = $_POST['reviewText'];
	
	// Get the restaurant ID
	$idQuery = "SELECT id FROM restaurants WHERE Name='$rest_name'";
	$idResult = mysqli_query($db, $idQuery);
	$row = mysqli_fetch_array($idResult);
	$restid = $row['id'];
	
	// Get the author ID
	$authorQ = "SELECT user_id FROM user_info WHERE username='$authorname'";
	$aResult = mysqli_query($db, $authorQ);
	$row2 = mysqli_fetch_array($aResult);
	$authorid = $row2['user_id'];
	
	$query = "INSERT INTO reviews (Num_Stars, Price_Rating, Review_Text, authorid, Restaurant_ID) VALUES ($numStars, $priceRating, '$content', $authorid, $restid)";
	$sql = mysqli_query($db, $query);
	
	// Update average reviews
	$query4 = "SELECT AVG(Price_Rating) FROM reviews WHERE Restaurant_ID=$restid";
	$sql5 = mysqli_query($db, $query4);
	$vAvg = 2.5;
 
	while($row6 = mysqli_fetch_array($sql5))
	{
		$vAvg = $row6['AVG(Price_Rating)'];
	}
	
	$query3 = "SELECT AVG(Num_Stars) FROM reviews WHERE Restaurant_ID=$restid";
	$sql4 = mysqli_query($db, $query3);
	$qAvg = 2.5;
 
	while($row5 = mysqli_fetch_array($sql4))
	{
		$qAvg = $row5['AVG(Num_Stars)'];
	}
	
	$updateQuery = "UPDATE restaurants SET Avg_Review=$qAvg, Price_Rating=$vAvg WHERE id=$restid";
	$resultx = mysqli_query($db, $updateQuery);
 ?>
   
</div>
</section>
<section id="sidebar">
<?php
	include("includes/footer.php");
	?>