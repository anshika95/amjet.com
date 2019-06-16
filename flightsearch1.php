<html>
<head>	
</head>
<body bgcolor="coral" background="sky.jpg">

<h1>
<?php
include 'variables.php';
//query for flight search
echo "<h3>".$class."</h3>";
echo "<h1>SOURCE:".$from."<br>"; 
echo "DESTINATION:".$to."</h1>";


//-------------------------------------------------ECONOMY------------------------------------------------

if($class=="economy")
{
	
//source-destination
$sql="select f.flight_id as fid,a.eco_fare as aef,a.eco_childfare as aecf,r.source as rs,r.destination as rd,f.departure_time as fdt,f.arrival_time as fat
from airfare as a inner join route as r 
on r.route_id=a.route_id 
inner join flight_details as f
on f.fare_id=a.fare_id
where r.source='$from' and r.destination='$to' and f.flight_date='$on' and f.eco_seatcount>='$count';";
$result=mysql_query($sql);

//destination to source
if($trip=="rtrip")
{
$sql1="select f.flight_id as fid1,a.eco_fare as aef1,a.eco_childfare as aecf1,r.source as rs1,r.destination as rd1,f.departure_time as fdt1,f.arrival_time as fat1
from airfare as a inner join route as r 
on r.route_id=a.route_id 
inner join flight_details as f
on f.fare_id=a.fare_id
where r.source='$to'and r.destination='$from' and f.flight_date='$on' and f.eco_seatcount>='$count';";
$result1=mysql_query($sql1);
}
else $result1=null;




}

//--------------------------------------------------------BUISNESS----------------------------------------------------
if($class=="business")
{
	
	
	//source-destination
	
	$sql="select             f.flight_id as fid,a.business_fare as aef,a.business_childfare as aecf,r.source as rs,r.destination as rd,f.departure_time as fdt,f.arrival_time as fat
from airfare as a inner join route as r 
on r.route_id=a.route_id 
inner join flight_details as f
on f.fare_id=a.fare_id
where r.source='$from' and r.destination='$to' and f.flight_date='$on' and f.business_seatcount>='$count';";
$result=mysql_query($sql);

if($trip=="rtrip"){
	$sql1="select             f.flight_id as fid1,a.business_fare as aef1,a.business_childfare as aecf1,r.source as rs1,r.destination as rd1,f.departure_time as fdt1,f.arrival_time as fat1
from airfare as a inner join route as r 
on r.route_id=a.route_id 
inner join flight_details as f
on f.fare_id=a.fare_id
where r.source='$to' and r.destination='$from' and f.flight_date='$return' and f.business_seatcount>='$count';";
$result1=mysql_query($sql1);
}
else $result1=null;
	
}
//-------------------------------------------------------VIP------------------------------------------------
if($class=="vip")
{
	
	//source-destination
	$sql="select f.flight_id as fid,a.vip_fare as aef,r.source as rs,r.destination as rd,f.departure_time as fdt,f.arrival_time as fat
from airfare as a inner join route as r 
on r.route_id=a.route_id 
inner join flight_details as f
on f.fare_id=a.fare_id
where r.source='$from' and r.destination='$to' and f.flight_date='$on' and f.vip_seatcount>='$count';";
$result=mysql_query($sql);

if($trip=="rtrip"){
	$sql1="select f.flight_id as fid1,a.vip_fare as aef1,r.source as rs1,r.destination as rd1,f.departure_time as fdt1,f.arrival_time as fat1
from airfare as a inner join route as r 
on r.route_id=a.route_id 
inner join flight_details as f
on f.fare_id=a.fare_id
where r.source='$to' and r.destination='$from' and f.flight_date='$return' and f.vip_seatcount>='$count';";
$result1=mysql_query($sql1);
}
else $result1=null;

}


if($result == FALSE) { 
    die(mysql_error()); // for mysql error handling
}
if($result1 == FALSE && $trip=="rtrip") { 
    die(mysql_error()); // for mysql error handling1
}

?>





<?php// -------------------------------------------------------------FORM FORMATION FOR ONE WAY------------------------------------------?>
 
 <form name="f" method="post" action="viewfare.php">
 <input align="center" type="submit" name="VIEW FARE" value="VIEW FARE DETAILS"><br><br><br>
 <?php
  $i=0;
 
 while($row=mysql_fetch_array($result))
{	
if($class=="vip"){$row['aecf']=null;}
$flightselect[$i]=$row['fid'];
$flight[$i]=$i+1 ." --> ".$row['fid']."   <br>   ARRIVAL:        " .$row['fdt']."   <br>    DEPARTURE:  ".$row['fat']." <br>ADULTFARE:".$row['aef']."<br>CHILDFARE:" .$row['aecf'];

?>

<input type="radio" name="fradio" value="<?php echo $flightselect[$i];?>"required><?php echo $flight[$i];?><br>

<br><br><br>


<?php

  $i=$i+1;
}




?>







 <?php //----------------------------------------------FORM FORMATION OF RETURN JOURNEY--------------------?>
 
 <?php
  $k=0;
 if($trip=="rtrip")
 {
	 echo "---------------------------------------------------------------------------------------";
	 echo "<h3>".$class."</h3>";
echo "<h1>SOURCE:".$to."<br>"; 
echo "DESTINATION:".$from."</h1>";

	 
	 
 while($row=mysql_fetch_array($result1))
{	
if($class=="vip"){$row['aecf1']=null;}
$flightselect1[$k]=$row['fid1'];
$flight[$k]=$k+1 ." --> ".$row['fid1']."   <br>   ARRIVAL:        " .$row['fdt1']."   <br>    DEPARTURE:  ".$row['fat1']." <br>ADULTFARE:".$row['aef1']."<br>CHILDFARE:" .$row['aecf1'];

?>

<input type="radio" name="fradio1" value="<?php echo $flightselect[$k];?>" required><?php echo $flight[$k];?><br>
<br><br><br>



<?php

  $k=$k+1;
}
 }//end of if




?>


</form>
</h1>
</body>
</html>