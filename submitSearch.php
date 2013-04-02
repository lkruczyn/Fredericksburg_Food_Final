<!doctype html>

<html lang="en-US">
<?php
 			require("includes/header.php");
?>
<div id="leftcontainer">
<h2 class="mainheading">
Search Results

</h2>
<script language="JavaScript" type="text/javascript">
<!--
function getRestaurant ( selectedtype )
{
  document.restaurantform.restName.value = selectedtype ;
  document.restaurantform.submit() ;
}
-->
</script>
<?php
	$db = mysqli_connect('localhost', 'Reviewer', 'food', 'restaurant_reviews');

	$searchTerms = $_POST['search'];
	$searchClass = $_POST['searchClass'];
	$query = '';
	
	if($searchClass == 'Name')
	{
		$query = "SELECT * FROM restaurants WHERE Name='$searchTerms'";
	}
	else if($searchClass == 'Area')
	{
		$query = "SELECT * FROM restaurants WHERE Area='$searchTerms'";
	}
	else
	{
		$query = "SELECT * FROM restaurants WHERE Num_Stars >= $searchTerms";
	}
	
	$result = mysqli_query($db,$query);
	
	echo "<form name=\"restaurantform\" action=\"restaurantReview.php\" method=\"post\">";
	echo "<input type=\"hidden\" name=\"restName\">";
	
	while($row = mysqli_fetch_array($result))
	{
		// Pull data from results
		$name = $row['Name'];
		$streetNum = $row['Street_Number'];
		$streetName = $row['Street_Name'];
		$area = $row['Area'];
		$phone = $row['Phone'];
		
		
		echo "<p>_________________________________________________________<br/>";
		echo "<b><a href=\"javascript:getRestaurant('$name')\">$name</a></b><br/>";
		echo "$streetNum $streetName, $area, VA <br/>";
		echo "Phone: $phone<br/>";
		echo "_________________________________________________________</p>";
	}
	echo "</form>";
?>
</section>
<section id="sidebar">
<?php
	include("includes/footer.php");
	?>