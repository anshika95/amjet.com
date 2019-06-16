<?php session_start();?><html>
<head>
<title> login form </title>
</head>
<body bgcolor="grey" background="snow.jpg">

<script type="text/javascript">
function validateForm() {
    var x = document.forms["login_form"]["username"].value;
    if (x == null || x == "") {
        alert("Username must be filled out");
        return false;
    }
	
	var x = document.forms["login_form"]["password"].value;
    if (x == null || x == "") {
        alert("Password must be filled out");
        return false;
    }
}
	



</script>

<?php
//------------------------------------------------------------------php defining variables and assigning values--------------------------------------------------------------
// define variables and set to empty values

$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username=$_POST["username"];
   $password=$_POST["password"];
    }
   
?>
<font size=5> <strong>AMJET 

<a href="home.php" target="nav">  Home  </a>  </strong>  </font> 
<a href="register.php" target="nav"> <font align="center"> 
<h3>Register now :</h3></font></a>

<form align="left" name="login_form" action="searchusername.php" onsubmit="return validateForm()" method="post" target="nav">
Username:
<input type="text" size=30 name="username">
    
Password:
<input type="password" size=30 name="password" >
    
<input type="submit" value="login">
</form>
</body>
</html>


