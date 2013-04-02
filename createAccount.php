
<!doctype html>

<html lang="en-US">
<?php
 			include("includes/header.php");
?>
<div id="leftcontainer">
<section id="normalheader" class="header2">

</section>
  <h2>Create a New Account
	<?php
		if($_SESSION['loggedIn'] == 1)
		{
			echo "<br/>You already have an account.";
		}
	?>
  </h2>

  <article class="post">

	<?php 
		if($_SESSION['loggedIn'] == 0)
		{
			include 'includes/createAccountForm.php';
		}
	?>
  
<!--Important--><div class="clear"></div>
</article>
</div>
</section>
<section id="sidebar">
<?php
	include("includes/footer.php");
	?>