<div id='wrap' class='span-12 prepend-1'>

	<h2>Sign Up Form</h2>
		<p>*all field are required</p>

		<form id='profile' method='POST' action='/users/p_signup'>

			    Email:<br>
			    <input type='text' name='email' id='email' required>
			    <br>

			    Password:<br>
			    <input type='password' name='password' id ='password' required>
			    <br>

			    Name:<br>
			    <input type='text' name='name' id='name' required>
			    <br>

			    Street Address:<br>
			    <input type='text' name='address' id='address' required>
			    <br>

			    City:<br>
			    <input type='text' name='city' id='city' required>
			    <br>

			    Zip:<br>
			    <input type='text' name='zip' id='zip' required>
			    <br>

			    <input type='hidden' name="user_type" value="customer">

			    <input type='submit' value='Sign up'><br><br>

			    *You will be asked to validate your email and password on the next page.

			</form>

</div>

<div class='span-15'>

	<?php if(isset($error) && $error == 'email_dupe'): ?>

		<h2>This email address is already in use.  Please choose another.</h2>

	<?php endif; ?><br>
</div>

