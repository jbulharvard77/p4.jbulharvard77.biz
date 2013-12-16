<div id='wrapper'>

	<h2>Create a Baby Announcement</h2>

	<!-- Left side with all the controls -->
	<div id='controls'>
	
		<!-- Color picker -->
			<h2>Pick a color</h2>
			<div class='colors' id='red'></div>
			<div class='colors' id='orange'></div>
			<div class='colors' id='yellow'></div>
			<div class='colors' id='green'></div>
			<div class='colors' id='blue'></div>
			<div class='colors' id='indigo'></div>
			<div class='colors' id='violet'></div>
			<div class='clearfix'></div><br>
					
						
		<!-- Message -->	
			<h2>It's a ...</h2>
			<input type='radio' class='itsa' name='itsa' id='itsagirl'>
			<label for='itsagirl'>It's a girl!</label><br>
			
			<input type='radio' class='itsa' name='itsa' id='itsaboy'>
			<label for='itsaboy'>It's a boy!</label><br>

		<!-- First name -->	
			<h2>First name</h2>	
			<input type='text' id='first_name'><br>
		
		<!-- Last name -->	
			<h2>Last name</h2>	
			<input type='text' id='last_name'><br>
					
		
		<!-- Recipient -->	
			<h2>Message</h2>	
			<textarea name='content' id='message' maxlength="255"></textarea>
			<span class='error' id='message-error'></span>
			
		</div>
	
	<!-- Right side with the live preview -->
	<div id='preview'>
	
			<div id='canvas'>
				<div id='itsa-output'></div>
				<div id='first_name-output'></div>
				<div id='last_name-output'></div>
				<div id='message-output'></div>
			</div><br><br>
		
		<!-- Buttons -->
			<input type='button' id='refresh-btn' value='Start over'>
			<input type='button' id='print-btn' value='View'>
			<form method='POST' action='/announcements/save'>
				<input type='hidden' value = "<?php echo $chosen_color ?>" name='color'>
				<input type='hidden' value = "<?php echo $gender ?>" name='gender'>
				<input type='hidden' value = "<?php echo $f_name ?>" name='first name'>
				<input type='hidden' value = "<?php echo $l_name ?>" name='last name'>
				<input type='hidden' value = "<?php echo $mess ?>" name='message'>
				<input type='submit' value='Save'>
			</form>
			
			
	</div>
	
</div>
