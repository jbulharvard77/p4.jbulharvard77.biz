<div id='wrap' class='span-8 prepend-1'>

	<h2>Sign Up Form</h2>

		<form id='profile' method='POST' action='/users/p_plowersignup'>

			    Email<br>
			    <input type='text' name='email'>
			    <br>

			    Password<br>
			    <input type='password' name='password'>
			    <br>

			    Name<br>
			    <input type='text' name='name'>
			    <br>

			    <input type='hidden' name="user_type" value="plower">

			    <input type='submit' value='Sign up'><br><br>

			    *You will be asked to validate your email and password on the next page.

			</form>

</div>

<div class='span-15'>

	<?php if(isset($error) && $error == 'email_dupe'): ?>

		<h2>This email address is already in use.  Please choose another.</h2>

	<?php endif; ?><br>
</div>
