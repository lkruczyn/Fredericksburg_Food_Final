
<!doctype html>

<html lang="en-US">
<?php
 			include("includes/header.php");
?>
<div id="leftcontainer">
<section id="normalheader" class="header2">

</section>
  <h2>

 <?php
	$db = mysqli_connect('localhost', 'root', '', 'restaurant_reviews');
	
	$newUser = $_POST['username'];
	$newPassword = $_POST['password'];
	$newRealname = $_POST['realName'];
	
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
<?php
	include("includes/footer.php");
	?>