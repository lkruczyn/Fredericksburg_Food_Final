  <form action="query2.php" method="post" class="form">
   <p class="textfield">
		  <input name="RestName" id="RestName" value="" size="22" tabindex="1" type="text">
          <label for="Restaurant Name">
             <small>Restaurant Name (required)</small>
          </label>
		  <input name="address1" id="address1" value="" size="22" tabindex="1" type="text">
          <label for="Address">
             <small>Street Number</small>
          </label>
		  <input name="address2" id="address2" value="" size="22" tabindex="1" type="text">
          <label for="Address">
             <small>Street Name</small>
          </label>
		  <input name="location" id="location" value="" size="22" tabindex="1" type="text">
          <label for="location">
             <small>City</small>
          </label>
		  <input name="phone" id="phone" value="" size="22" tabindex="1" type="text">
          <label for="phone">
             <small>Phone Number</small>
          </label>
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