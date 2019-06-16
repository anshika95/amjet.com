<html>
<head> <title> Passenger Details </title>
</head>
<body bgcolor="crimson">

<?php

include 'variables.php';
include 'phpfunction.php';
$_SESSION['count1']=$count;


?>


<h3><a href="home1.php" target="_blank">HOME </a></h3><p>
<img src="" width=450 height=250 align="right">
<font size=5> <strong> <a href=""> Contact Details   </a>  
<a href="" target="_blank">  Transaction  </a> </strong>  </font> <p>


<span style="margin-right: 15em;">NAME </span>
<span style="margin-right: 2em;"> AGE </span>
<span style="margin-right: 1em;"> GENDER </span>
<span style="margin-right: 1em;"> TYPE </span>

<form align="left" name="passenger_form" action="passengersubmit.php"  method="post">

<?php for($i=0;$i<($count);$i++){?>
<input type="text" size=30 name="n1[]"  >
<input type="text" size=10 name="a1[]" >
<select name="g1[]" id="g1" >
<option> </option>
<option> female</option>
<option> male</option>
</select>
<select name="p1[]" id="p1" >
<option> </option>
<option>  adult</option>
<option>  child</option>
<option>  infant</option>
</select>
<p>

<?php }?>
<input type="submit" value="PROCEED" name="proceed"  > 
</form>




DO YOU WANT TO ADD MORE PASSENGERS:<BR>
<form  action="countchange.php"  method="post">
<BR>IF YES THEN enter the count of passengers<BR>
<INPUT TYPE="TEXT" NAME="count"><BR>
<input type="submit" value="CHANGE" name=""  > 
</form>
</body>
</html>


