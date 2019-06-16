
<html>
<head><style>.error {color: #FF0000;}</style></head>
<title> manage my booking</title>
<body bgcolor=" #39C0CF ">

<?php
//------------------------------------------------------------------php registrtion form validation--------------------------------------------------------------
// define variables and set to empty values
$usernameErr  = $lname = "";
$username = $lnameErr=  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   if (empty($_POST["username"])) 
   {
     $usernameErr = "USERNAME is required";
   } 
   else 
   { $username=$_POST["username"];
     // check if USERname only contains letters and numbers
		if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) 
		{
			$usernameErr = "Only letters and numbers allowed"; 
        }
   }
   
   
   if (empty($_POST["lname"])) 
   {
     $lnameErr = "LASTNAME is required";
   } else 
   { $lname=$_POST["lname"];
     // check if LASTNAME only contains letters
     if (!preg_match("/^[a-zA-Z]*$/",$lname))
		 {
       $lnameErr = "Only letters allowed"; 
         }
   }//close else
	   
   
 
   
   
}  
   
   
   
   ?>
<h3><a href="home.php" target="_blank">HOME </a></h3><p>
<center>

<h1><strong>Find My Booking </strong></h1>

<p><span class="error">* Required Field.</span></p>
</center><p><br>
<form align="center" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


Username:
<input type="text" size=30 name="username" value="<?php echo $username; ?>"> 
<span class="error">* <?php echo $usernameErr;?></span><p>

Lastname: 
<input type="text" size=30 name="lname" value="<?php echo $lname; ?>">
 <span class="error">* <?php echo $lnameErr; ?></span>   <p><br>
 

<input type="submit" value="Find Booking">

</form>

</body>
</html>