<h2>Available plow requests</h2>	

			<table id="myTable" class="tablesorter"> 
				<thead> 
				<tr> 
				    <th>Date</th> 
				    <th>Name</th> 
				    <th>Address</th> 
				    <th>City</th> 
				    <th>Zip</th> 
				</tr> 
				</thead>

		<?php foreach($posts as $post): ?>
				
				<tbody> 
				<tr> 
					<td><?=$post['date']?></td>
					<td><?=$post['name']?></td>
					<td><?=$post['address']?></td>
					<td><?=$post['city']?></td>
					<td><?=$post['zip']?></td>
					<td><form method='POST' action='/posts/p_email/<?=$post['post_id']?>' class='avail'>
							<input type='hidden' name="info" value="<?=$post['post_id']?>">			
							<input type="submit" name='selected' value="Select">
					</form></td>

		<?php endforeach; ?>

		





