<?php if (isset($type) && $type == 'customer'): ?>

	<div id='wrap-profile' class='span-9 prepend-1'>

		<h2>Your Information</h2>

			Email: <?=$user->email?><br>
			Name: <?=$user->name?><br>
			Address: <?=$user->address?><br>
			City: <?=$user->city?><br>
			Zip: <?=$user->zip?><br><br>

	</div><br><br><br>

	<div class='span-24'>

		<form action='/posts/add' id='request'>
			<input id='submit-p' type='submit' value= 'Click here to request to have your driveway plowed'>
		</form>

	</div>

<?php else: ?>
	<div id='wrap-profile' class='span-9 prepend-1'>

		<h2>Your Information</h2>

			Email: <?=$user->email?><br>
			Name: <?=$user->name?><br>

	</div><br><br><br>

<?php endif; ?>
