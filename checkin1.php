<html>
<head></head>
<title> checkin</title>
<body bgcolor=" #39C0CF ">

<?php

$username=$_POST['username'];
$tid=$_POST['tid'];

$sql="select * from transaction where transaction_id='$tid'";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
	echo "FLIGHT NO:::::::".$row['gate_number'];
	echo "ARRIVAL TIME:::::::".$row['gate_number'];
	echo "DEPARTURE TIME:::::::".$row['gate_number'];
	echo "GATE NUMBER:::::::".$row['gate_number'];
	echo "GATE NUMBER:::::::".$row['gate_number'];
	
}





?>


</body>
</html>