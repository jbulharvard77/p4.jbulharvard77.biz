
<?php if (isset($type) && $type == 'customer') :?>
	<div class='span-20'>
		
		<h1>Welcome back <?=$user->name?>.</h1><br>

		<form action="/posts/add" id='existing'>
			<input type='submit' value= 'Click here to request to have you driveway plowed'>
		</form>

	</div>

<?php elseif (isset($type) && $type === 'customer') :?>
	<div class='span-20'>
		
		<h1>Welcome back <?=$user->name?>.</h1><br>

		<h1>test</h1>

	</div>

<?php else: ?>
	<div class='span-22'>

		<h2>Welcome to Easy Plow, where you can easily request that your residential driveway be plowed within a couple of hours of your request.</h2>

	</div>

	<div class='span-12'>

		<form action="/users/signup">
			<input id='newuser' type='submit' value='Click here if you are a new customer'>
		</form>

	</div>

<?php endif; ?>


