<?php include 'db.php';


function checkfillform($form_var)
{
foreach($form_var as $key =>$value)
{
if(isset($key)||($value=="")) return false;

}
return true;

}//end of function

function validemail($email)
{
	
     // check if USERname only contains letters and numbers
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	 {
       return false; 
   }
   
}//end of function
	
	
?>