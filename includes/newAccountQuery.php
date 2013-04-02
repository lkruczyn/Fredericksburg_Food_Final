
<!doctype html>

<html lang="en-US">
<?php
 			require($DOCUMENT_ROOT . "includes/header.php");
?>
<div id="contents">
<section id="main">
<div id="leftcontainer">
<section id="normalheader" class="header2">

</section>
  <h2>

 <?php
	$db = mysqli_connect('localhost', 'root', '', 'restaurant_reviews');
	
	$newUser = $_POST['username'];
	$newPassword = $_POST['password'];
	$newRealname = $_POST['realName'];
	echo "<p>Real Name: $newRealname</p>";
	
	// Check database to see if this username is already being used.
	$query = "SELECT username FROM user_info WHERE username='$newUser'";
	$result = mysqli_query($db, $query);
	$numRows = $result->num_rows;
	
	if($numRows != 0)
	{
		echo "That username is already taken. Try again.";
	}
	else
	{
		$insertQuery = "INSERT INTO user_info (username, password, real_name, isAdmin) VALUES ('$newUser','$newPassword','$newRealname', 0)";
		$result2 = mysqli_query($db, $insertQuery);
		echo "Congratulations, you've created an account. You can log in above.";
	}
 ?>
 </h2>  
</div>
</section>
<section id="sidebar">
<div id="sidebarwrap">
<h2>From FredFood</h2>
<p>We appreciate you taking the time to help keep our site up-to-date with all the latest and greatest from the culinary world! Bon Apetite! </p>

<h2>What Else Is New?</h2>
<ul>

	<li><a href="#">Most Recent Review Posts</a></li>



</ul>
<h2>Top 10</h2>

<ul>

	<li><a href="#">10 top rated restaurants on FredFood</a></li>


</ul>


</div>
</section>



<div class="clear"></div>
</div>

</div>
<footer id="pagefooter">
<div id="footerwrap">
<div class="copyright">
2010 &copy; Your Copyright Information Goes Here
</div>
<div class="credit">
<a href="http://cssheaven.org" title="Downlaod Free CSS Templates">Website Template</a> by CSSHeaven.org </div>
</div>
</footer>
</body>
</html>