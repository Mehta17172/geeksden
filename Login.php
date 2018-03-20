
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</Head>
<body background="log.jpg">
	<h1 align="center"><font size="8" color="grey">geeksden</font></h1>
	
	<div class="header">
	<h2>Login</h2>
	</div>
<form method="post" action="logind.php">
		<div class="input-group">
		<label><b>User ID</b></label>
		<input type="email" name="id" required placeholder="Enter your User ID">
	</div>
	<div class="input-group">
		<label><b>Password</b></label>
		<input type="Password" name="password" required placeholder="Enter your Password!">
	</div>
	<div class="input-group">
		<button type="submit"  class="btn">Login</button>
	</div>
	<p>
		<b>Not yet a member? </b><a href="signup.php">Sign Up</a>
	</p>
</form>

</body>
</html>