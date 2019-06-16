<?php
include 'db.php';


function insertpassenger($name,$age,$gender,$ptype,$cid,$seatnumber,$fid11)//function to insert passenger details in table;
{
	echo sizeof($name);
$i=0;
for($i=0;$i<sizeof($name);$i++)
{
	$pid=getlastpassengerid()+1;
$sql="insert into passenger_details (passenger_id,name,age,gender,passenger_type,contact_id,seat_number,flight_id)
 values ('$pid','$name[$i]','$age[$i]','$gender[$i]','$ptype[$i]','$cid',$seatnumber+$i,'$fid11')";
$result=mysql_query($sql);
if(!$result)return false;


}
}
//end of function




function getseatnumber($class,$fid)//last seat number alloted
{
$sql="select f.eco_seatcount as esc,f.business_seatcount as bsc,f.vip_seatcount as vsc,p.eco_seatcapacity as es,p.business_seatcapacity as bs,p.vip_seatcapacity as vs
from flight_details as f,aeroplane as p
where f.flight_id='$fid' and p.plane_number=f.plane_number";


while($row=mysql_fetch_array(mysql_query($sql)))
{ if ($class="economy") return ($row['es']-$row['esc']+1);
elseif ($class="business") return ($row['bs']-$row['bsc']+1);
elseif ($class="vip") return ($row['vs']-$row['vsc']+1);
}
}//end of function










function insertcontact($number,$country,$email,$address,$username)//contact details of passenger inserted
{
	$cid=getlastcontactid()+1;
$sql="INSERT INTO contact_details (contact_id,phone_number,country,email,address,username) values ('$cid','$number','$country','$email','$address','$username')";
$result=mysql_query($sql);
if(!$result)return false;


}//end of function

function getcontact_id($username)//for online checkin 
{
$sql="select contact_id from contact_details where username=$username";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){return $row.['contact_id'];}

}//end of function

function getlastcontactid()
{
	$sql="select max(contact_id) as cid from contact_details";
while($row=mysql_fetch_array(mysql_query($sql))){return $row['cid'];}
}

function getlastpassengerid()
{
	$sql="select max(passenger_id) as pid from passenger_details";
while($row=mysql_fetch_array(mysql_query($sql))){return $row['pid'];}
}

function getlasttransactionid()
{
	$sql="select max(transaction_id) as tid from transaction";
while($row=mysql_fetch_array(mysql_query($sql))){return $row['tid'];}
}


	
	
	
	
	
function updateseatcount($class,$count,$fid11)//after every booking updates the seatcount of the flight
	{
		if($class=="economy")
		{$sql="update flight_details 
		set eco_seatcount=eco_seatcount-'$count'
		where flight_id='$fid11'";
		$result=mysql_query($sql);
		}
		elseif($class=="business")
		{$sql="update flight_details 
		set business_seatcount=business_seatcount-'$count'
		where flight_id='$fid11'";
		$result=mysql_query($sql);
		}
		elseif($class=="vip"){
			$sql="update flight_details 
		set vip_seatcount=vip_seatcount-'$count'
		where flight_id='$fid11'";
		$result=mysql_query($sql);
		}
        if(!$result)return false;

		
	}//end of function
	
	
	
	function display($stype)
	{
		if($stype=="discount"){
			echo "DISCOUNTS:<BR><BR><BR>";
			$sql="select * from discount";
			$result=mysql_query($sql);
			
			while($row=mysql_fetch_array($result))
			{
				echo "CODE:-->".$row['discount_id']."<br>NAME-->".$row['name']."<br>DESCRIPTION:-->".$row['description'];
				echo "<br><BR>";
				
				
			}
		}
		
		
		if($stype=="meal"){
			echo "MEAL:<BR><BR><BR>";
			$sql="select * from meal";
			$result=mysql_query($sql);
			
			while($row=mysql_fetch_array($result))
			{
				echo "CODE:--> ".$row['meal_id']."<br>NAME:-->".$row['name']."<br>DESCRIPTION:-->".$row['description'];
				echo "<br><BR>";
				
				
			}
		}
		
		
		if($stype=="service"){
			echo "SERVICE:<BR><BR>
			<BR>";
			$sql="select * from special_service";
			$result=mysql_query($sql);
			
			while($row=mysql_fetch_array($result))
			{
				echo "CODE:--> ".$row['service_id']."<br>NAME:-->".$row['name']."<br>DESCRIPTION:-->".$row['description'];
				echo "<br><BR>";
				
				
			}
		}
		
		
	}//END OF FUNCTION
	
	
	
	
	
	function calculatefare($stype,$id)
	{
		if($stype=="discount"){
			
			$sql="select amount from discount where discount_id='$id'";
			$result=mysql_query($sql);
			
			while($row=mysql_fetch_array($result))
			{
				return $row['amount'];
				
				
			}
		}
		
		
		if($stype=="meal"){
			
			$sql="select amount from meal where meal_id='$id'";
			$result=mysql_query($sql);
			
			while($row=mysql_fetch_array($result))
			{
				return $row['amount'];
				
				
			}
		}if($stype=="service"){
			
			$sql="select amount from special_service  where service_id='$id'";
			$result=mysql_query($sql);
			
			while($row=mysql_fetch_array($result))
			{
				return $row['amount'];
				
				
			}
		}
	}
	
	
	
	
	
	
	
	
?>
