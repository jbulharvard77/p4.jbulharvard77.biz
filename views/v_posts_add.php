<div id='wrap' class='span-6 prepend-1'>

	<h2>Plow Request</h2>

	<form method='POST' action='/posts/p_add'>

		Service date: <input type="date" name="date">
	  	<input type="submit">

	</form><br>

</div>

<div class='span-24'>

	<?php if(isset($error) && $error == 'date_dupe'): ?>

		<h2>You have already scheduled your driveway to be plowed on this date.</h2>

	<?php endif; ?>

</div>