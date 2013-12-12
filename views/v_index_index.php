<?php if($user): ?>	

	Router::redirect("/announcements/create/");

<?php else: ?>

	<form method='POST' action='/users/p_signup'>

	    Email<br>
	    <input type='text' name='email'>
	    <br><br>

	    Password<br>
	    <input type='password' name='password'>
	    <br><br>

	    <input type='submit' value='Sign up'>

	</form>

<?php endif; ?>
	