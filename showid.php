<html>
<body bgcolor="coral">
<font size=3><a href="profile.php" target="nav">Myaccount:</a></font>
<br>
<br>
<br>

YOUR BOOKINGS ARE:<br><br>

<?php
include 'db.php';
$username=$_POST['username'];
$result=mysql_query("select *from transaction where username='$username'");
$i=0;
while($row=mysql_fetch_array($result))
{ 
  echo "<br>".$i+1 .".";
  echo "<br>ID::::".$row['transaction_id'];
  echo "<br>CLASS::::".$row['classtype'];
  echo "<br>FLIGHT-ID 1::::".$row['flight_id1'];
  echo "<br>FLIGHT-ID 2(RETURN)::::".$row['flight_id'];
  echo "<br>DISCOUNT::::".$row['discount_id'];
  echo "<br>SERVICE::::".$row['service_id'];
  echo "<br>MEAL::::".$row['meal_id'];
  echo "<br>NETFARE::::".$row['netfare'];
  ECHO "<br>----------------------------------------------------------------------------------------------------------------";
$i++;
}


?>



</body>
</html>
