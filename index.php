<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		Login
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<header>
    <nav>
        <ul>
			<img src="includes/logo.png" alt="Logo" height="50">
        </ul>
    </nav>
</header>
<body background="includes/loginBg.jpg" height="100%">
	<?php
		$pageTitle = "Login";
	?>
		<div class="login_container">
			<form action="php/user_login.php" method="POST">
				<input type="text" name="uname" id="input" class="form-control" value="" placeholder="Username" required>
				<p></p>
				<input type="password" name="pass" id="input" class="form-control" value="" placeholder="Password" required>
				<p></p>
				<button type="submit" style='background-color: #32CD32;'>Login</button>
			</form>
		</div>	
</body>
</html>