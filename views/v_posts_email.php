

<h2>Please confirm that you that you are accepting this job.</h2>


<table id="myTable" class="tablesorter"> 
				<thead> 
				<tr> 
				    <th>Date</th> 
				    <th>Address</th> 
				    <th>City</th> 
				    <th>Zip</th> 
				    <th>Email</th>
				</tr> 
				</thead>

		<?php foreach($posts as $post): ?>
				
				<tbody> 
				<tr> 
					<td><?=$post['date']?></td>
					<td><?=$post['address']?></td>
					<td><?=$post['city']?></td>
					<td><?=$post['zip']?></td>
					<td id='email'><?=$post['email']?></td>		
					
					<div class='span-24'>
					<form method ='POST' action='/users/profile'>		
						<input type='submit' id='email-send' value='Confirm'>
					</form>
					</div>

		<?php endforeach; ?>

					