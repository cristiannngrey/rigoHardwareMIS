<!DOCTYPE <!DOCTYPE html>
<html>
<head>

	<title>
		<?php 
			//session_start();
			if(isset($pageTitle)){
				echo $pageTitle;
			}
		?>
	</title>
		<?php
			$user = $_SESSION['uname']; 
		?>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<header>
    <nav>
		<ul>	
			<div class = "user_info">
				Logged in as: <strong><?php echo $user; ?></strong><br>
				<a id="btnempty" href='php/user_logout.php'>Logout</a>
			</div>
		</ul>
		<ul>
			<p>
				<a href="javascript:history.go(-1)" title="Return to the previous page">&laquo;Back</a>
			</p>
		</ul>	
    </nav>
</header>
<body>