<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<link rel="stylesheet" href="/css/main.css" type="text/css">
	<link rel="stylesheet" href="/css/blueprint/screen.css" type="text/css" media="screen" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>
<div class='container'>

	<div id='header-image' class='span-24'>

		<h1>Easy Plow</h1>

	</div>

		<?php if($user): ?>

			<div id='navigation' class='span-3 prepend-21'>
	
				<a href="/users/profile"> [Profile]</a>
      			<a href="/users/logout"> [Log out]</a>

      		</div>
      		
		<?php else: ?>

			<div id='navigation' class='span-2 prepend-22'>
   
      			<a href="/users/login">[Log in]</a>

      		</div>

      	<?php endif; ?>
   






	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</div>
</body>
</html>