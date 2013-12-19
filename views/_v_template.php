<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<link rel="stylesheet" href="/css/main.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>

<div id='header-image'>

	<h1>Easy Plow</h1>	

	<div id='navigation'>

		<?php if($user): ?>
	
			<a href="/users/profile"> [Profile]</a>
      		<a href="/users/logout"> [Log out]</a>

		<?php else: ?>
   
      		<a href="/users/login">[Log in]</a>
   
	</div>

</div>

<?php endif; ?>

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>

</body>
</html>