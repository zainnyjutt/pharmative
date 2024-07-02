<html>
<head>

<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<form method="POST" action="presslogin.php">
<div class="login-box">
<h2>LOGIN</h2>
<div class="textbox">
<i class="fa fa-envelope-o" aria-hidden="true"></i>

<input type="text" placeholder="E-mail / Phone" name="email" required="required">
</div>

<div class="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>
<input type="password" placeholder="Password" name="password" required="required">
</div>
<input id="btn"  type="submit" value="LOGIN">
<a href="signup.php"><input id="btn"   value="SIGN UP"></a>
</div>
</form>
</body>

</html>