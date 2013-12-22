<div id='wrap' class='span-6 prepend-1'>

	<h2>Login</h2>

		<form method='POST' action='/users/p_login'>

		    Email<br>
		    <input type='text' name='email'>
		    <br>

		    Password<br>
		    <input type='password' name='password'>
		    <br>

		    <input type='submit' value='Log in'>

		</form>

</div>

<div class='span-24'>
	<?php if(isset($error)): ?>

		<h3>Login failed.  Please try again.</h3>

	<?php endif; ?><br>
</div>