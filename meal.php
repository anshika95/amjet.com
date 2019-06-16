<html>
<body bgcolr="aquamarine">
<?php 

include 'variables.php';
include 'phpfunction.php';
$_SESSION['discount']=$_POST['discount'];
$_SESSION['total']=$_SESSION['total']-($count*(calculatefare("discount",$_SESSION['discount'])));
$_SESSION['total1']=$_SESSION['total1']-($count*(calculatefare("discount",$_SESSION['discount'])));
display("meal");
?>

<form  action="service1.php"  method="post">
<BR>ENTER THE MEAL CODE
<input type="text" NAME="meal" > 
<input type="submit" value="MEAL" > 
</form>
<br>
<br>
IF NO MEAL PROCEED:
<input type="submit" onclick="service1.php" value="PROCEED">
<br>
<br>
<br>
</body>
</html>