<?php if(!$user): ?>

	<div class='span-22 prepend-1'>

		<h2>Welcome to Easy Plow, where you can easily request that your residential driveway be plowed.</h2>

	</div>

	<div class='span-10 prepend-1'>

		<form action='/users/size'>
			<input class='newuser' type='submit' value='Click here if you are a new customer'>
		</form>

	</div>

	<div class='span-10 prepend-1'>

		<form action='/users/plowersignup'>
			<input class='newuser' type='submit' value='Click here if you are a new plower'>
		</form>

	</div>

<?php else: ?>

	<h2>Welcome back!</h2><br>

	<div class='span-10'>

		<form action='/users/profile'>
			<input class='newuser' type='submit' value='Click here to head to your profile'>
		</form>

	</div>


<?php endif; ?>




