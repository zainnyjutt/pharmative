<html>
<head>
                                                                                                                                                                                                                                                                                                                               
<title>Transparent Signup Forms</title>
<link rel="stylesheet" href="style_signup.css">
</head>
<body>
<form method="POST" action="connection.php">
<div class="signup-box">
<h2>SIGNUP</h2>

<div class="textbox">
<i class="fa fa-user" aria-hidden="true"></i>
<input type="text" placeholder="Full Name" name="fname" required="required">
</div>

<div class="textbox">
<i class="fa fa-envelope-o" aria-hidden="true"></i>
<input type="text" placeholder="E-mail / Phone" name="email" required="required">
</div>

<div class="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>
<input type="password" placeholder="Password" name="password" required="required">
</div>

<div class="textbox">
<i class="fa fa-id-card" aria-hidden="true"></i>
<input type="text" placeholder="CNIC No" name="cnic" required="required">
</div>

<input class="btn" type="submit" name="btn" value="SIGN UP">
</div>
</form>
</body>
</html>