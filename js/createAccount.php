
<!doctype html>

<html lang="en-US">
<?php
 			require("includes/header.php");
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
			require 'includes/createAccountForm.php';
		}
	?>
  
<!--Important--><div class="clear"></div>
</article>
</div>
</section>
<section id="sidebar">
<div id="sidebarwrap">
<h2>About FredFood</h2>
<p>Here you can find and create reviews for all your local restaurants and watering holes! </p>

<h2>Recently Added</h2>
<h2>Restaurant --> Stars (out of 10)</h2>
<ul>

	<li><a href="#">Restaurant1</a> 5</li>
	<li><a href="#">Restaurant2</a>8</li>
	<li><a href="#">Restaurant3</a>10</li>
	<li><a href="#">Restaurant4</a>4</li>
	<li><a href="#">Restaurant5</a>4</li>
	<li><a href="#">Restaurant6</a>5</li>
	<li><a href="#">Restaurant7</a>6</li>
	<li><a href="#">Restaurant8</a>1</li>


</ul>
<h2>Latest Reviews</h2>

<ul>

	<li><a href="#">Add Name and Review from 3 most recent DB entries</a></li>


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