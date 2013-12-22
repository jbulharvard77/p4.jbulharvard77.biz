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
					<td><form method='POST' action='/posts/p_plowerselect' class='avail'>			

						<input type='hidden' name="selected" value='yes'>
			
						<input type="submit" value="Select">

					</form></td>

		<?php endforeach; ?>

		<script>
			$(document).ready(function() 
		    { 
		        $("#myTable").tablesorter(); 
		    } 
		); 

			$(document).ready(function() 
		    { 
		        $("#myTable").tablesorter( {sortList: [[0,0], [1,0]]} ); 
		    } 
		); 
		</script>
    





