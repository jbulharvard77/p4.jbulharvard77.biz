<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="/css/babyan.css" type="text/css">	
	<link rel="stylesheet" href="/css/main.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	

	<div id="navigation">
    <ul>
      <li id="navpart1"><a href="/users/logout">[Log out]</a></li>
      <li id="navpart2"><a href="/announcements/create">[Create Announcement]</a></li>
      <li id="navpart3"><a href="/announcements/existing">[View Announcements]</a></li>
    </ul>
	</div>

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>

	<script src="/js/babyannouncement.js"></script>
</body>
</html>