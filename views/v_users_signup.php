<form id='profile' method='POST' action='/users/p_signup'>

	    Email<br>
	    <input type='text' name='email'>
	    <br><br>

	    Password<br>
	    <input type='password' name='password'>
	    <br><br>

	    Name<br>
	    <input type='text' name='name'>
	    <br><br>

	    Street Address<br>
	    <input type='text' name='address'>
	    <br><br>

	    City<br>
	    <input type='text' name='city'>
	    <br><br>

	    Zip<br>
	    <input type='text' name='zip'>
	    <br><br>

	    Approximately how long is your driveway<br>
	    <input type='text' name='length'>
	    <br><br>

	    Approximately how wide is your driveway<br>
	    <input type='text' name='width'>
	    <br><br>

	    <?php if(isset($error) && $error == 'email_dupe'): ?>
	    	<p>This email address is already in use.  Please choose another.</p>
	    <?php endif; ?><br>

	    <input type='submit' value='Sign up'><br><br>

	    *You will be asked to validate your email and password on the next page.

	</form>
