<?php if($user): ?>
	<?php foreach($posts as $post): ?>

	<h2>Thank you for using Easy plow.  You have scheduled a service on <?=$post['date']?>.</h2>

	<?php endforeach; ?>
<?php endif; ?>


