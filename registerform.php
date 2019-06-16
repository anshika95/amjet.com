<html>
<head><style>.error {color: #FF0000;}</style></head>
<title> registerform</title>
<body background="castle.jpg">

<h3>REGISTRATION FORM:</h3>
<p><span class="error">* Required Field.</span></p>
<form method="post"  action="insertusername.php">
Firstname:
<input type="text" size=30 name="fname" > *   <p>
Lastname: 
<input type="text" size=30 name="lname" >  *<p>
Username:
<input type="text" size=30 name="username"> * <p>
Password:
<input type="password" size=30 name="password"> * <p>
EmailId: 
<input type="text" size=30 name="email" > *<p>
<input type="submit" value="REGISTER">

</form>

<form method="post" action="slider1.php" target="nav">
<input type="submit" value="BACK">
</form>

</body>
</html>