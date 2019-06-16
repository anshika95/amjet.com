<html>
<head>FLIGHT SEARCHED :
</head>
<body>
<h1>
<?php
include 'db.php';
//declaring variables
$from = $_POST['from'] ;echo "<h1>SOURCE:".$from."<br>"; 
$to =$_POST['to'] ;echo "DESTINATION:".$to."</h1>";
$on=$_POST['on']; 
$return=$_POST['return'] ;
$adult =$_POST['adult']; 
$child=$_POST['child'] ; 
$class=$_POST['class']; echo $class;
if (isset($_POST['trip']))   
{$trip =$_POST['trip'];    }
else
  echo "nothing was selected.";
echo "<br>";

$count=$adult+$child;

//query for flight search


if($class=="economy")
{

$sql="select f.flight_id as fid,a.eco_fare as aef,a.eco_childfare as aecf,r.source as rs,r.destination as rd,f.departure_time as fdt,f.arrival_time as fat
from airfare as a inner join route as r 
on r.route_id=a.route_id 
inner join flight_details as f
on f.fare_id=a.fare_id
where r.source='$from' and r.destination='$to' and f.flight_date='$on' and f.eco_seatcount>='$count';";
$result=mysql_query($sql);
}


if($class=="business")
{
	$sql="select             f.flight_id as fid,a.business_fare as aef,a.business_childfare as aecf,r.source as rs,r.destination as rd,f.departure_time as fdt,f.arrival_time as fat
from airfare as a inner join route as r 
on r.route_id=a.route_id 
inner join flight_details as f
on f.fare_id=a.fare_id
where r.source='$from' and r.destination='$to' and f.flight_date='$on' and f.business_seatcount>='$count';";
$result=mysql_query($sql);
	
}

if($class=="vip")
{
	$sql="select f.flight_id as fid,a.vip_fare as aef,r.source as rs,r.destination as rd,f.departure_time as fdt,f.arrival_time as fat
from airfare as a inner join route as r 
on r.route_id=a.route_id 
inner join flight_details as f
on f.fare_id=a.fare_id
where r.source='$from' and r.destination='$to' and f.flight_date='$on' and f.vip_seatcount>='$count';";
$result=mysql_query($sql);}



if($result === FALSE) { 
    die(mysql_error()); // for mysql error handling
}
//statements to display the flight searched:
$i=1;
while($row=mysql_fetch_array($result))
{echo "<h3>".$i." --> ".$row['fid']."   <br>   ARRIVAL:        " .$row['fdt']."   <br>    DEPARTURE:  ".$row['fat']."</h3>";
  echo "<br><br><br>";
  $i++;}




	


?>
</h1>
</body>
</html>