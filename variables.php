<?php session_start();?><html>
<head></head>
<title> vARIABLES</title>
<body>
<?php 
//declaring variables
include 'db.php';
$from=$_SESSION["from"]; 
$to=$_SESSION["to"];
$on=$_SESSION["on"];
$return=$_SESSION["return"];
$adult=$_SESSION["adult"]; 
$child=$_SESSION["child"]; 
$class=$_SESSION["class"];
$trip=$_SESSION["trip"];

$count=$_SESSION['adult']+$_SESSION['child'];





?>

</body>
</html>