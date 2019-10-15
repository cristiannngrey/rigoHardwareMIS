<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		<?php 
			session_start();
			$user = $_SESSION['uname'];
			if(isset($pageTitle)){
				echo $pageTitle;
			} 
		?>
	</title>
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
    </nav>
</header>
<body>