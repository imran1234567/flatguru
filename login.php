<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<div class="header">
	<h2>Login</h2>
</div>

<form method="post" action="login.php">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username">
	</div>


	<div class="input-group">
		<label>Password</label>
		<input type="text" name="password_1">
	</div>

	
	<div class="input-group">
		<button type="submit" name="login" class="btn">Login</button>
	</div>

	<p>
		Not yet a member?<a href="register.php">Sign Up</a>
	</p>
</form>
</body>
</html>