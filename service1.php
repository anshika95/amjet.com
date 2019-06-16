<html>
<body bgcolor="aquamarine">
<?php 
include 'variables.php';
include 'phpfunction.php';
$_SESSION['meal']=$_POST['meal'];
$_SESSION['total']=$_SESSION['total']+($count*calculatefare("meal",$_SESSION['meal']));
$_SESSION['total1']=$_SESSION['total1']+($count*calculatefare("meal",$_SESSION['meal']));




display("service");
?>
<form  action="confirm.php"  method="post">
<BR>ENTER THE SPECIAL SERVICE CODE
<input type="text" NAME="service" >
<input type="submit" value="SERVICE" > 
<br>
<br>
IF NO service PROCEED:
<input type="button" onclick="confirm.php" value="PROCEED">


</body>
</html>