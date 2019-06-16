<html>
<body background="AA3.jpg">

<center><H1>
"WELCOME TO AMJET.COM"
<br>
<?php 
include 'db.php';
$username =$_POST['username'];
$password = $_POST['password'];

//--------------------------------------------------------php validation-----------------------------------

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   if (empty($_POST["username"])) 
   {
     echo "USERNAME is required<br>";
   } 
   else 
   { $username=$_POST["username"];
     // check if USERname only contains letters and numbers
		if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) 
		{
			echo"****Only letters and numbers allowed in username<br>"; 
        }
   }
   
   if (empty($_POST["password"])) 
   {
     echo"PASSWORD is required<br>";
   } 
   else 
   { $password=$_POST["password"];
     // check if PASSWORD only contains letters and numbers
		if (!preg_match("/^[a-zA-Z0-9]*$/",$password))
		 {
		echo "****Only letters and numbers allowed in password<BR>"; 
         }
   }//close else



}



//check if form empty or not
if(empty($username) || empty($password))
{
    echo "You did not fill out the required fields.";
	
?>	<form method="post" action="registerform.php" target="nav">
<input type="submit" value="BACK">
</form>
<?php
}
//---------------------------------------------------------------------------------------------------------------------
 else{  
$insert=0;
//check if username is PRESENT
$sql1="select * from user_login where username='$username' and password='$password';";

$result=mysql_query($sql1);
if(!$result)
echo "ERROR IN login PROCESS";

elseif($row=mysql_fetch_array($result)>0){ echo "LOGIN SUCCESSFULL";
$insert++;
}
 
//if NOT THEN ERROR 
else{
echo "USERNAME OR PASSWORD DOESNT EXISTS";
}

if($insert==1)	
{
	
?>
<br>
<br>
<form method="post" action="logoutform.php" target="nav"><br>
****CLICK ON THE CHECKBOX BEFORE PROCEDDING
<input type="checkbox".checked name="user" value=<?php echo $username;?>>
<br><br>
<input type="submit" value="PROCEED">
</form>

<?php }
	
	else{
		
		?>
		<form method="post" action="loginform.php" target="nav">
<input type="submit" value="BACK">
</form>
<?php	}

 }//end of main else	?>
</H1>
</center>
</body>
</html>