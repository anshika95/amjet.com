<html>
<head></head>
<title> view fare1</title>
<body  background="balls.jpg">
<?php include 'variables.php';?>

<h1>CLASS:<?php echo $class;?></h1>
<br>
<br>

<?php 
if(isset($_POST['fradio'])){
	$fid=$_SESSION['fid']=$_POST['fradio'];
}
else $fid=null;
//-------------------------------------------query for fare details if one way:-------------------------------------------
?>
<h3>SOURCE:<?php echo $from;?><br>
DESTINATION:<?php echo $to;?><br>
DATE:<?php echo $on;?><br>
FLIGHT-ID:<?php echo $fid;?><br></h3>
<?php

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


echo "<br>FARE:".$row['ecf']."<br>CHILD FARE:".$row['ef']."<br>TOTAL ADULT FARE:".$adultfare."<br>TOTAL CHILD FARE".
	$childfare."<br>TAX:10% of total<br>TOTAL FARE:".$total;

}//END OF WHILE
}//if of ecomomy closed


if ($class=="business")
{ 
while($row=mysql_fetch_array($result)){
	$adultfare=$adult*$row['bcf'];
	$childfare=$child*$row['bf'];
	$fare=$adultfare+$childfare;
	$total=$fare+($fare*$tax);	


echo "<br>FARE:".$row['bcf']."<br>CHILD FARE:".$row['bf']."<br>TOTAL ADULT FARE:".$adultfare."<br>TOTAL CHILD FARE".
	$childfare."<br>TAX:10% of total<br>TOTAL FARE:".$total;

}//END OF WHILE
}//if of business closed


if ($class=="vip")
{ 
while($row=mysql_fetch_array($result)){
	$adultfare=$adult*$row['ecf'];
	$total=$adultfare+($adultfare*$tax);	

echo "CHILD FARE SAME AS ADULT FARE <BR>";
echo "<br>FARE:".$row['vf']."<br>TOTAL ADULT FARE:".$adultfare."<br>TAX:10% of total<br>TOTAL FARE:".$total;

}//END OF WHILE
}//if of VIP closed



ECHO "<br><br>----------------------------------------------------------------------------------------------------------";
//---------------------------------------query for round trip fare details----------------------------------------
if(isset($_POST['fradio1'])){
	$fid1=$_SESSION['fid1']=$_POST['fradio1'];


?>
<h3><font color="blue">SOURCE:</font><?php echo $to;?><br>
DESTINATION:<?php echo $from;?><br>
DATE:<?php echo $return;?><br>
FLIGHT-ID:<?php echo $fid1;?><br></h3>


<?PHP

$sql="select a.eco_fare as ef,a.eco_childfare as ecf,a.business_fare as bf,a.business_childfare as bcf,a.vip_fare as vf
           from airfare as a 
           innerjoin flight_details as f
           on f.fare_id=a.fare_id
           where f.flight_id='$fid1';";
$result=mysql_query($sql);
$tax=0.1;
if ($class=="economy")
{ 
while($row=mysql_fetch_array($result)){
	$adultfare=$adult*$row['ecf'];
	$childfare=$child*$row['ef'];
	$fare=$adultfare+$childfare;
	$total=$fare+($fare*$tax);	


echo "<br>FARE:".$row['ecf']."<br>CHILD FARE:".$row['ef']."<br>TOTAL ADULT FARE:".$adultfare."<br>TOTAL CHILD FARE".
	$childfare."<br>TAX:10% of total<br>TOTAL FARE:".$total;

}//END OF WHILE
}//if of ecomomy closed


if ($class=="business")
{ 
while($row=mysql_fetch_array($result)){
	$adultfare=$adult*$row['bcf'];
	$childfare=$child*$row['bf'];
	$fare=$adultfare+$childfare;
	$total=$fare+($fare*$tax);	


echo "<br>FARE:".$row['bcf']."<br>CHILD FARE:".$row['bf']."<br>TOTAL ADULT FARE:".$adultfare."<br>TOTAL CHILD FARE".
	$childfare."<br>TAX:10% of total<br>TOTAL FARE:".$total;

}//END OF WHILE
}//if of business closed


if ($class=="vip")
{ 
while($row=mysql_fetch_array($result)){
	$adultfare=$adult*$row['ecf'];
	$total=$adultfare+($adultfare*$tax);	

echo "CHILD FARE SAME AS ADULT FARE <BR>";
echo "<br>FARE:".$row['vf']."<br>TOTAL ADULT FARE:".$adultfare."<br>TAX:10% of total<br>TOTAL FARE:".$total;

}//END OF WHILE
}//if of VIP closed



}//end of round trip if
else $fid1=null;


?>


<br>
<br>
<br>

<?php//-----------------------------------------------BACK--------------------------------------------?>
<form method="post" action="flightsearch1.php">
<input type="submit" value="BACK">
</form>

<?php //--------------------------------------------------PROCEED----------------------------------------?>
<form  align="center" <?php if($_SESSION['username']==""){?>action="login.php"<?php } else {?>action="contactform.php"<?php}?> method="post" target="nav">
<input type="submit" name="proceed" value="PROCEED">
</form>
</body>
</html>
