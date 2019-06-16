<html>
<head>
</head>
<body background="register.jpg" >
<center>
<h1>WELCOME TO AMJET.COM<br><center>
<br>
<?php
include 'db.php';
$fname= $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$insert=0;
$error=0;
//--------------------------------------------------PHP FORM VALIDATION------------------------------------------------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   if (empty($_POST["username"])) 
   {
     echo "USERNAME is required<br>";$error++;
   } 
   else 
   { $username=$_POST["username"];
     // check if USERname only contains letters and numbers
		if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) 
		{
			echo"****Only letters and numbers allowed in username<br>"; $error++;
        }
   }
   
   if (empty($_POST["password"])) 
   {
     echo"PASSWORD is required<br>";$error++;
   } 
   else 
   { $password=$_POST["password"];
     // check if PASSWORD only contains letters and numbers
		if (!preg_match("/^[a-zA-Z0-9]*$/",$password))
		 {
		echo "****Only letters and numbers allowed in password<BR>"; $error++;
         }
   }//close else
	   
   
   if (empty($_POST["fname"])) 
   {
     echo "FIRSTNAME is required<br>";$error++;
   } else 
   { $fname=$_POST["fname"];
     // check if FIRSTNAME only contains letters
     if (!preg_match("/^[a-zA-Z]*$/",$fname)) 
	 {
       echo "***Only letters allowed in firstname<br>"; $error++;
      }
   }//close else
	   
   
   if (empty($_POST["lname"])) 
   {
     echo "LASTNAME is required<br>";$error++;
   } else 
   { $lname=$_POST["lname"];
     // check if LASTNAME only contains letters
     if (!preg_match("/^[a-zA-Z]*$/",$lname))
		 {
       echo "****Only letters allowed in lastname<br>"; $error++;
         }
   }//close else
	   
   
   if (empty($_POST["email"])) 
   {
     echo "EMAIL is required<br>";$error++;
   } 
   else 
   { $email=$_POST["email"];
     // check validity of email
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	 {
       echo "****Invalid email format<br>"; $error++;
   }
   }//close else
	   
   
   
   
}  
   


if((empty($fname) || empty($lname) || empty($username) || empty($password) ||
     empty($email))&& $error !=0)
{
    echo "You did not fill out the required fields.";
	
?>	<form method="post" action="registerform.php" target="nav">
<input type="submit" value="BACK">
</form>
<?php
}

 else{  


//check if username is unique---------------------------------------------------------------------------------------------
		$sql1="select * from user_login where username='$username' and password='$password'";

		$result=mysql_query($sql1);
		if(!$result )//add php validation here
			echo "ERROR IN REGISTRATION PROCESS";

		elseif($row=mysql_fetch_array($result)>0)
			{


				echo "USERNAME OR PASSWORD ALREADY EXISTS";
			}
 
//if ok insert in database 
        else
		{
				$sql= "INSERT INTO user_login VALUES('$username','$password','$email','$fname','$lname')";
				$result=mysql_query($sql);

				$insert++;
				echo "REGISTERED SUCCESFULLY";
		}
		
        if($insert>0)	
         {
?>
<br>
<br>
<form method="post" action="login.php" target="nav">
<input type="submit" value="LOGIN">
</form>

<?php    }
	
	    else
		 {
?>
	        <form method="post" action="register.php" target="nav">
			<input type="submit" value="BACK">
			</form>
<?php	 }
 }//end of main else	

?>
</H1>
</body>
</html>