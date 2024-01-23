<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>LogIn</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="Type UserName Here" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <div class="sing"> <a href="register.php">Sign Up here</a> </div>
  	</p>
  </form>
</body>
<div class="s"> <p class="copy-right">&copy 2018  All rights reserved | Design by <a href="https://www.facebook.com/Rkusman">RkUsman</a></p> </div>
</html>