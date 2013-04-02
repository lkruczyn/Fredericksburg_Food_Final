
<!doctype html>

<html lang="en-US">
<?php
 			require("includes/header.php");
?>
<div id="leftcontainer">
<section id="normalheader" class="header2">

</section>
  <h2>
	<?php
		if($_SESSION['loggedIn'] == 0)
		{
			echo "You need to log in to do that.";
		}
	?>
  </h2>

  <article class="post">

	<?php 
		if($_SESSION['loggedIn'] == 1)
		{
			include 'includes/newReviewForm.php';
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