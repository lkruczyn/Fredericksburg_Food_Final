<!doctype html>

<html lang="en-US">
<?php
 			include("includes/header.php");
?>
<div id="leftcontainer">
<section id="normalheader" class="header2">

</section>
  <h2>
	Advanced Search
 </h2>

  <article class="post">
	 <form action="advancedSearchQuery.php" method="post" class="form">
   <p class="textfield">
   <label for="Restaurant Name">
             <small>Restaurant Name</small>
          </label>
		  <input name="RestName" id="RestName" value="" size="22" tabindex="1" type="text">
         <label for="Area">
             <small>City or Area</small>
          </label>
		  <input name="Area" id="location" value="" size="22" tabindex="1" type="text">
         
		  <br/>
		  <label for="Category">
             <small>Category</small>
          </label>
		  <select name="Category">
			<?php
					$db = mysqli_connect('localhost', 'Reviewer', 'food', 'restaurant_reviews');
					$q="SELECT DISTINCT category FROM restaurants";
					$query=mysqli_query($db, $q);	
					
					while($row=mysqli_fetch_array($query))
					{
						$thisCategory = $row['category'];
						echo "<option value='$thisCategory'>$thisCategory</option>";
					}
				?>
			</select>
         <label for="qRating">
             <small>Minimum Overall Rating</small>
          </label>
		  <select name="qRating">
									<option value=5>5</option>
									<option value=4>4</option>
									<option value=3>3</option>
									<option value=2>2</option>
									<option value=1>1</option>
								</select>
       <label for="vRating">
             <small>Minimum Price Rating</small>
          </label>
		  <select name="vRating">
									<option value=5>5</option>
									<option value=4>4</option>
									<option value=3>3</option>
									<option value=2>2</option>
									<option value=1>1</option>
         
   </p>
   <p>
       <input name="submit" id="submit" tabindex="5" type="image" src="images/submit.png">
       <input name="comment_post_ID" value="1" type="hidden">
   </p>
   <div class="clear"></div>
</form>
  
<!--Important--><div class="clear"></div>
</article>
</div>
</section>
<section id="sidebar">

<?php
	include("includes/footer.php");
?>