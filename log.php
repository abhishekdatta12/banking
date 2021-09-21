<!DOCTYPE html>
<head>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="logincss.css">
</head>
<body>
<form method="post" action="includes/login.inc.php">
<div class="box">
<h1>Login</h1>

<input name="username" placeholder="Username"  class="email" required="required" />
  
<input type="password" name="password" placeholder="Password" class="email" required="required" />
<br>
<br>
<button type="submit" name="submit">Sign in</button>
<!--<a href="includes/login.inc.php"><div class="btn">Sign In</div></a>-->

  
</div> <!-- End Box -->
  
</form>

  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
</body>
</html>