<!doctype html>

<html lang="en-US">
<?php
 			include("includes/header.php");
?>
<div id="leftcontainer">
<h2 class="mainheading">
News

</h2>
<!-- LOGIN CODE -->
<?php
	$db = mysqli_connect('localhost','Reviewer','food','restaurant_reviews');
	$uname = $_POST['login'];
	$upass = $_POST['password'];

	// Check to see if the username exists
	$query = "SELECT username,password,real_name,isAdmin FROM user_info WHERE username='$uname'";
	$result = mysqli_query($db, $query);
	$numRows = $result->num_rows;
	
	// If it doesn't exist, tell the user.
	if($numRows == 0)
	{
		echo "<p>Login failed. User $uname not found.</p>";
	}
	// If the username does exist, check the password.
	else
	{
		$row = mysqli_fetch_array($result);
		$serverside_pass = $row['password'];
		$isAdmin = $row['isAdmin'];
		$realName = $row['real_name'];
		
		// Successful login
		if($upass == $serverside_pass)
		{
			$_SESSION['loggedIn'] = 1;
			$_SESSION['isAdmin'] = $isAdmin;
			$_SESSION['real_name'] = $realName;
			$_SESSION['username'] = $uname;
			
			header("Location: index.php");
		}
		// Wrong password
		else
		{
			echo "<p>Password incorrect.</p>";
		}
	}
?>
</section>
<section id="sidebar">
<?php
	include("includes/footer.php");
	?>