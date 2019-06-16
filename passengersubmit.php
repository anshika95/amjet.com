<HTML>
<BODY bgcolor="aquamarine">
<h2>
<?php
include 'variables.php';
include 'phpfunction.php';
for($i=0;$i<$_SESSION['count1'];$i++)
{
$age[$i]=$_POST['a1'][$i];
$gender[$i]=$_POST['g1'][$i];
$ptype[$i]=$_POST['p1'][$i];
$name[$i]=$_POST['n1'][$i];

$error=0;

//--------------------------------------------------------------PHP VALIDATION---------------------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   if (empty($_POST['n1'][$i])) 
   {
     echo "NAME is required<br>";
	 $error++;
   } 
   else 
   { 
     // check if USERname only contains letters and numbers
		if (!preg_match("/^[A-Z]*$/",$name[$i])) 
		{
			echo"****Only CAPITAL letters  allowed in name<br>"; $error++;
        }
   }




    if (empty($_POST['a1'][$i])) 
   {
     echo "AGE is required<br>";$error++;
   } 
   else 
   { 
     // check if AGE ONLY CONTAINS numbers
		if (!preg_match("/^[0-9]*$/",$age[$i])) 
		{
			echo"****Only number allowed in age<br>"; $error++;
        }
   }

   
   
   
   
    if (empty($_POST['g1'][$i])) 
   {
     echo "gender is required<br>";$error++;
   } 
   
  
    if (empty($_POST['p1'][$i])) 
   {
     echo "PASSENGER TYPE is required<br>";$error++;
   } 

}//end of if

}//close of for














if($error==0)

{
//---------------------------------------------------------------------------------------------------------------------
$seatnumber=getseatnumber($class,$_SESSION['fid']);
$seatnumber1=getseatnumber($class,$_SESSION['fid1']);
insertpassenger($name,$age,$gender,$ptype,$_SESSION['cid'],$seatnumber,$_SESSION['fid']);
insertpassenger($name,$age,$gender,$ptype,$_SESSION['cid'],$seatnumber1,$_SESSION['fid1']);

?>

WANT TO PROCEED:
<form  action="redeem.php"  method="post">
<BR>CLICK PROCEED TO AVAIL DISCOUNTS AND SERVICES <BR>
<input type="submit" value="PROCEED" name="proceed"  > 
</form>



<?php

}

else
{
		
?>	<form method="post" action="passengerform.php" >
<input type="submit" value="BACK">
</form>
<?php
}//end of else
?>
</h2>
</BODY>
</HTML>