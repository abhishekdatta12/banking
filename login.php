<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="logincss.css">
</head>
<body>
	<h1>Login</h1>
	<div class="login">
		<form action="includes/login.inc.php" method="POST">
			<input type="text" name="username" placeholder="Enter your username:" required="required">
			<input type="text" name="password" placeholder="Enter your password:" required="required">
			<button type="submit" name="submit">Login</button>
		</form>
	</div>
</body>
</html>
