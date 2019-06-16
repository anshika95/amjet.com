<html>
<head>
<title> update1</title>


	</head>
	
	
	<body bgcolor="scarlet">
	<?php
	echo "<h1>WELCOME TO YOUR PROFILE PAGE<br>"."<br><br></h1>";
	//$sql="select firstname,lastname from user_login where username='$_SESSION["username"]';";
	//$result=mysql_query($sql);
	//while($row=mysql_fetch_array($result)){
	//echo $row['firstname']." "." ".$row['lastname']."<br><br>";}
	echo "TAKE YOUR TIME AND EXPLORE THE SITE<BR>TRAVEL YOUR PLAN ACCORDINGLY:<br>MANAGE YOUR BOOKING HERE:<br><br>"
	?>
	
	<form action="contactform.php" method="post">
	<input type="submit" name="click">
	</form>
	<?php echo "click on the button to book the recent selected flight";
	?>
	
	
	</body>
	</html>

