  <form action="query2.php" method="post" class="form">
   <p class="textfield">
   <label for="Restaurant Name">
             <small>Restaurant Name (required)</small>
          </label>
		  <input name="RestName" id="RestName" value="" size="22" tabindex="1" type="text">
         <label for="Address">
             <small>Category</small>
          </label>
		  <input name="Category" id="Category" value="" size="22" tabindex="1" type="text">
          <label for="Address">
             <small>Street Number</small>
          </label>
		  <input name="address1" id="address1" value="" size="22" tabindex="1" type="text">
          <label for="Address">
             <small>Street Name</small>
          </label>
		  <input name="address2" id="address2" value="" size="22" tabindex="1" type="text">
         <label for="location">
             <small>City</small>
          </label>
		  <input name="location" id="location" value="" size="22" tabindex="1" type="text">
           <label for="phone">
             <small>Phone Number</small>
          </label>
		  <input name="phone" id="phone" value="" size="22" tabindex="1" type="text">
          <label for="qRating">
		   <small>Overall Rating</small>
		   </label>
		  <select name="qRating">
									<option value=5>5</option>
									<option value=4>4</option>
									<option value=3>3</option>
									<option value=2>2</option>
									<option value=1>1</option>
								</select>
	
		<label for="vRating">
             <small>Price Rating</small>
          </label>
		  <select name="vRating">
									<option value=5>5</option>
									<option value=4>4</option>
									<option value=3>3</option>
									<option value=2>2</option>
									<option value=1>1</option>
								</select>
			
   </p>
   <p>
   <small>Does it have a bar?</small>
		   </label>
		  <select name="bRating">
									<option value=Y>Yes</option>
									<option value=N>No</option>
									<option value=U>Don't Know</option>
									
								</select>
								
								</p>
								<p>
								
	<small>Is it open late (past 10)?</small>
	</label>
	<select name="lRating">
									<option value=Y>Yes</option>
									<option value=N>No</option>
									<option value=U>Don't Know</option>
									
								</select>
								
								</p>
								<p>
	<small>Do they accept EagleOne as payment?</small>
		   </label>
		  <select name="eRating">
									<option value=Y>Yes</option>
									<option value=N>No</option>
									<option value=U>Don't Know</option>
									
								</select>
								</p>
								<p>
	
       <small><strong>Your Thoughts?</strong> </small>
   </p>
   <p class="text-area">
       <textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea>
   </p>
   <p>
       <input name="submit" id="submit" tabindex="5" type="image" src="images/submit.png">
       <input name="comment_post_ID" value="1" type="hidden">
   </p>
   <div class="clear"></div>
</form>