<?php if($user): ?>
	<h1>Welcome back <?=$user->name?>.</h1><br>

	<form action="/posts/add" id='existing'>
	<input type='submit' value= 'Click here to request to have you driveway plowed'>
	</form>

<?php else: ?>

<h2>Welcome to Easy Plow, where you can easily request that your residential driveway to be plowed within a couple of hours of your request.</h2>


<form action="/users/signup" id="newuser">
	<input type='submit' value='Click here if you are a new customer'>
</form>

<?php endif; ?>


