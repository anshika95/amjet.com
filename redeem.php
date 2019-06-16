<HTML>
<BODY bgcolor="aquamarine">
<?php 
include 'phpfunction.php';

display("discount");

?>
<form  action="meal.php"  method="post">
<BR>ENTER THE DISCOUNT CODE IF U WANT
<input type="text" NAME="discount" > 
<input type="submit" value="PROCEED" > 
</form>
<br>
<br>

IF NO DISCOUNT PROCEED:
<form action="meal.php" method="post">
<input type="submit" 
 value="PROCEED">
 

</form>
</body>
</html>

