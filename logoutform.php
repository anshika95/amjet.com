<?php session_start();?>
<html>
<head>
<title> logout form </title>
</head>
<body  background="snow.jpg">
<?php 
if(isset($_POST['user'])){$username=$_SESSION["username"]=$_POST['user'];}?>
<font size=5> <strong>AMJET      
<a href="home1.php" target="nav">  Home  </a> </strong>  </font>   
<form align="right" name="logout" action="home.php" method="post" target="nav">  
<h3><?php echo "WELCOME"." "."".$_SESSION["username"];?>
<input type="submit" value="logout"> 
<font size=3><a href="profile.php" target="nav">Myaccount:</a></font><h3>
  

</form>
</body>
</html>