<?php

function returntotalfare($flight_id,$class,$adult,$child){
	
	
	
$sql="select a.eco_fare as ef,a.eco_childfare as ecf,a.business_fare as bf,a.business_childfare as bcf,a.vip_fare as vf 
      from airfare as a, flight_details as f 
	  WHERE f.fare_id=a.fare_id and f.flight_id='$fid'";
$result=mysql_query($sql);
$tax=0.1;
if ($class=="economy")
{ 
while($row=mysql_fetch_array($result)){
	$adultfare=$adult*$row['ecf'];
	$childfare=$child*$row['ef'];
	$fare=$adultfare+$childfare;
	$total=$fare+($fare*$tax);	
}//END OF WHILE
}//if of ecomomy closed


if ($class=="business")
{ 
while($row=mysql_fetch_array($result)){
	$adultfare=$adult*$row['bcf'];
	$childfare=$child*$row['bf'];
	$fare=$adultfare+$childfare;
	$total=$fare+($fare*$tax);	
}//END OF WHILE
}//if of business closed


if ($class=="vip")
{ 
while($row=mysql_fetch_array($result)){
	$adultfare=$adult*$row['ecf'];
	$total=$adultfare+($adultfare*$tax);	
}//END OF WHILE
}//if of VIP closed



return $total;
}//end of function
?>
	
	
