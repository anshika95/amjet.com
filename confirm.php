<HTML>
<BODY>
<?php 
include 'variables.php';
include 'phpfunction.php';
$_SESSION['service']=$_POST['service'];
$_SESSION['total']=$_SESSION['total']+$count*(calculatefare("service",$_SESSION['service']));
$_SESSION['total1']=$_SESSION['total1']+$count*(calculatefare("service",$_SESSION['service']));


?>
PROCEED BUTTON WILL DIRECT YOU TO TRANSACTION PAGE:
<BR>
DO NOT PRESS BACK BUTTON:
<FORM METHOD="post" action="cardfill.php">
<input type="submit"  value="PROCEED">
</form>
</body>
</html>