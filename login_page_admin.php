<?php
	session_start();
?>
<html>
	<head>
		<title>
	      Login Admin
		</title>
		<link rel="stylesheet" type="text/css" href="css/loginstyle.css?v=?php echo time(); ?>">
		
	</head>
	<body>
		<br>
		<br>
		<br>
		<form id= "form" class="float_form" style="padding-left: 0px" action="login_handler_2.php" method="POST">
			<fieldset>
				<legend>Login Admin:</legend>
				<strong>Username:</strong><br>
				<input type="text" name="username" placeholder="Enter your username" required><br><br>
				<strong>Password:</strong><br>
				<input type="password" name="password" placeholder="Enter your password" required><br>
				<?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
					}
				?>
				<input type="submit" name="Login" value="Login">
				<br>
				<a href="new_user.php"><i class="fa fa-user-plus"></i> Create New User Account?</a>
			</fieldset>
			<br>
		</form>
	</body>
</html>