<html>
<body>
<?PHP
include 'variables.php';
include 'phpfunction.php';

$tid=getlasttransactionid();
$tid=$tid+1;
/*echo "your ticket information:<br>transaction id::::"
ECHO $tid."<br>class::::";
echo $class."<br>username:::::";
echo $_SESSION['username']."<br>flightid::::";
echo $_SESSION['fid']."<br>flightid(return)::::";
echo $_SESSION['fid1']."<br>";
echo $_SESSION['cid']."<br>";
echo$_SESSION['discount']."<br>";
echo $_SESSION['meal']."<br>";
echo$_SESSION['service']."<br>";
echo $_SESSION['total']."<br>";
echo $_SESSION['total1']."<br>";*/


$user= $_SESSION['username'];
$fid= $_SESSION['fid'];
$fid1=$_SESSION['fid1'];
$cid=$_SESSION['cid'];
$d=$_SESSION['discount'];
$m= $_SESSION['meal'];
$s=$_SESSION['service'];
$netfare=$_SESSION['total']+$_SESSION['total1'];



$sql=" insert into transaction(transaction_id,classtype,username,flight_id,flight_id1,contact_id,netfare,discount_id,service_id,meal_id) values($tid,'$class','$user','$fid','$fid1','$cid',$netfare,'$d','$s','$m')";
$result=mysql_query($sql);

if(updateseatcount($class,$count,$_SESSION['fid'])) echo "ERROR!TRY AGAIN";
if(updateseatcount($class,$count,$_SESSION['fid1'])) echo "ERROR!TRY AGAIN";




ECHO "<br><br>YOUR TRANSACTION ID IS:".$tid;


// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 



?>

<h1> TRANSACTION SUCCESSFULL</H1>
FOR ENQURY CLICK MANAGE BUTTON ON LEFT SIDE OF THE PAGE
</body>
</html>
