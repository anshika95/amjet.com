<html>
<body bgcolor="coral">
<h2>
<?php include 'variables.php';
include 'phpfunction.php';
include 'filterdata.php';
$p_no=$_POST['p_no'];
$city=$_POST['city'];
$address=$_POST['address'];
$email=$_POST['email'];
$username=$_SESSION['username'];
//--------------------------------------------PHP VALIDATION-------------------------------------

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   if (empty($_POST["address"])) 
   {
     ECHO "Address is required<BR>";
   } 
   
  
   
   if (empty($_POST["p_no"])) 
   {
     ECHO "Phone Number is required<BR>";
   }
   else 
   { $p_no=$_POST["p_no"];
     // check if PHONE NUMBER  only contains NUMBERS
     if(!preg_match("/^[0-9\/-]+$/", $p_no)) {
         ECHO "***only numbers allowed IN PHONE NUMBER<BR>";
	}
   }//close else
	   
   
   if (empty($_POST["city"])) 
   {
     echo "City is required<br>";
   } else 
   { $city=$_POST["city"];
     // check if CITYonly contains letters
     if (!preg_match("/^[a-zA-Z]*$/",$city))
		 {
       ECHO "****Only letters allowed IN CITY<BR>"; 
         }
   }//close else
	   
   
   if (empty($_POST["email"])) 
   {
     ECHO "EMAIL is required<BR>";
   } 
   else 
   { $email=$_POST["email"];
     // check validity of email
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	 {
       ECHO "*****Invalid email format<BR>"; 
   }
   }//close else
	   
   
   if(strlen($_POST["p_no"])!=10)
{
     echo "****phone number must be of length 10<br>";
   
}  

}//end of if
   
   
   

if(empty($p_no) || empty($address) || empty($city) || empty($username) ||
     empty($email))
{
    echo "You did not fill out the required fields.";
	
?>	<form method="post" action="contactform.php">
<input type="submit" value="BACK">
</form>
<?php
}

 else{  
//------------------------------------------------------------------------------------------------------------------------




if(insertcontact($p_no,$city,$email,$address,$username)){echo "problem in insert---please retry";}
else
{ $_SESSION['cid']=getlastcontactid();
	?>
<form action="passengerform.php" method="post"><input type="submit" name="back" value="PROCEED"></form>	
<?php
}
 }//end of main else
	 
?>
</h2>
</body>
</html>
