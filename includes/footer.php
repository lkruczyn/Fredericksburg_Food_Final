<div id="sidebarwrap">
<h2>About FredFood</h2>
<p> FredFood gives you an avenue to review your favorite restaurants in the Fredericksburg, VA area. Share it with your friends!</p>

<h2>What's Happening</h2>
<ul>

	<li><a href="#">Restaurants</a></li>
	<?php
	
	$db = mysqli_connect('localhost', 'root', '', 'restaurant_reviews');
	$query = "SELECT Name, Avg_Review FROM restaurants";
	$result = mysqli_query($db, $query);
	While($row = mysqli_fetch_array($result))
	{
	$rest = $row['Name'];
	$revVal = $row['Avg_Review'];
	
	echo "<article class = \"post\">";
	echo $rest . "                  " . $revVal;
	echo "";
	
	}
	?>
	<br/>
	<li><a href="#">User Profiles</a></li>
	<?php
	
	$db = mysqli_connect('localhost', 'root', '', 'restaurant_reviews');
	$query = "SELECT username FROM user_info";
	$result = mysqli_query($db, $query);
	While($row = mysqli_fetch_array($result))
	{
	$user = $row['username'];
	
	echo "<article class = \"post\">";
	echo $user . " ";
	echo "";
	
	}
	?>


</ul>
<h2>Latest Posts</h2>
<?php

$db = mysqli_connect('localhost', 'Reviewer', 'food', 'restaurant_reviews');
$query = "SELECT username, Review_Text, Name FROM user_info INNER JOIN 
	reviews ON user_info.user_id = authorid INNER JOIN restaurants ON 
	restaurants.id = Restaurant_ID ORDER BY reviews.date";
$result = mysqli_query($db, $query);
while($row = mysqli_fetch_array($result))
{
$author = $row['username'];
$rest = $row['Name'];
$review = $row['Review_Text'];

echo "<article class=\"post\">";
echo '<b>' . $author . '</b>' . ' said: "<i>' . $review . '"</i> about ' . '<b>' . $rest . '</b>';
echo "</article>";


}

?>




</div>
</section>



<div class="clear"></div>
</div>

</div>
<footer id="pagefooter">
<div id="footerwrap">
<div class="copyright">
2013 &copy; Steve and Lauren
</div>
<div class="credit">
<a href="http://cssheaven.org" title="Downlaod Free CSS Templates">Website Template</a> by CSSHeaven.org </div>
</div>
</footer>
</body>
</html>
