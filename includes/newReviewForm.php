  <form action="insertReview.php" method="post" class="form">
   <p class="textfield">
		  <table border="1"><tr><td>Restaurant to Review</td>
		  <td><select name="restaurantName">
				<?php
					$db = mysqli_connect('localhost', 'root', '', 'restaurant_reviews');
					$q="SELECT Name, Area FROM restaurants";
					$query=mysqli_query($db, $q);	
					
					while($row=mysqli_fetch_array($query))
					{
						$thisName = $row['Name'];
						$thisArea = $row['Area'];
						echo "<option value='$thisName'>$thisName ($thisArea)</option>";
					}
				?>
			</select></td></tr>
			
			<tr><td>Quality</td><td align="center"><select name="qRating">
									<option value=5>5</option>
									<option value=4>4</option>
									<option value=3>3</option>
									<option value=2>2</option>
									<option value=1>1</option>
								</select>
			</td></tr>
			
			<tr><td>Value</td><td align="center"><select name="vRating">
									<option value=5>5</option>
									<option value=4>4</option>
									<option value=3>3</option>
									<option value=2>2</option>
									<option value=1>1</option>
								</select>
			</td></tr>
			
			</table>

   </p>
   <p>
       <small><strong>Your Thoughts?</strong> </small>
   </p>
   <p class="text-area">
       <textarea name="reviewText" id="reviewText" cols="50" rows="10" tabindex="4"></textarea>
   </p>
   <p>
       <input name="submit" id="submit" tabindex="5" type="image" src="images/submit.png">
   </p>
   <div class="clear"></div>
</form>