<!doctype html>
<html lang="en-US">
<?php
 			include("includes/header.php");
?>
<div id="leftcontainer">
 <h2 class="mainheading">You have added a new restaurant!</h2>

 <?php
$db = mysqli_connect('localhost', 'root', '', 'restaurant_reviews');
 $authorname = $_SESSION['username'];
 $RestName = $_POST['RestName'];
 $category = $_POST['Category'];
 $StreetNum = $_POST['address1'];
 $StreetName = $_POST['address2'];
 $local = $_POST['location'];
 $phone = $_POST['phone'];
 $content = $_POST['comment'];
 $qRating = $_POST['qRating'];
 $vRating = $_POST['vRating'];

// Get the restaurant ID
$idQuery = "SELECT id FROM restaurants WHERE Name='$RestName'";
$idResult = mysqli_query($db, $idQuery);
$row = mysqli_fetch_array($idResult);
$restid = $row['id'];

// Get the author ID
$authorQ = "SELECT user_id FROM user_info WHERE username='$authorname'";
$aResult = mysqli_query($db, $authorQ);
$row2 = mysqli_fetch_array($aResult);
$authorid = $row2['user_id'];
 
 $query2 = "INSERT INTO reviews (Restaurant_Name, Review_Text, Restaurant_ID, authorid, category, Num_Stars, Price_Rating ) VALUES ('$RestName','$content',$restid,$authorid,'$category',$qRating,$vRating)";
 $sql2 = mysqli_query($db, $query2);
 
 // Average the overall rating for this restaurant
 $query3 = "SELECT AVG(Num_Stars) FROM reviews WHERE Restaurant_ID=$restid";
 $sql4 = mysqli_query($db, $query3);
 $qAvg = $qRating;
 
 if($sql4 != false)
 {
	while($row5 = mysqli_fetch_array($sql4))
	{
		$qAvg = $row5['AVG(Num_Stars)'];
	}
 }
 
 // Average the price rating for this restaurant
 $query4 = "SELECT AVG(Price_Rating) FROM reviews WHERE Restaurant_ID=$restid";
 $sql5 = mysqli_query($db, $query4);
 $vAvg = $vRating;
 
 if($sql5 != false)
 {
	while($row6 = mysqli_fetch_array($sql5))
	{
		$vAvg = $row6['AVG(Price_Rating)'];
	}
 }
 
 $query = "INSERT INTO restaurants (Name, Street_Number, Street_Name, Area, phone, Avg_Review, Price_Rating) VALUES ('$RestName', $StreetNum, '$StreetName', '$local', $phone, $qAvg, $vAvg)";
 $sql = mysqli_query($db, $query);
 ?>
   
</div>
</section>
<section id="sidebar">
<?php
	include("includes/footer.php");
	?>