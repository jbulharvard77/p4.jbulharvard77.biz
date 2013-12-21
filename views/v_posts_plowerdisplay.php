
	
	<?php foreach($posts as $post): ?>

		<?php if ($post['date'] > $today): ?> 

	<?=$post['date']?><?=$post['name']?><?=$post['address']?><?=$post['city']?><?=$post['zip']?><br>

		<?php endif; ?>

	<?php endforeach; ?>




