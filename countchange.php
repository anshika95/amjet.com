<HTML>
<body bgcolor="crimson">
<script type="text/javascript">
function validateForm1() {

	var x = document.forms["passenger_form"]["n1"].value;
    if (x == null || x == "") {
        alert(" Name must be filled out");
        return false;
    }
	
	var y = document.forms["passenger_form"]["a1"].value;
    if (y == null || y == "") {
        alert("Age must be filled out");
        return false;
    }
	
	/*var x = document.forms["passenger_form"]["n2"].value;
    if (x == null || x == "") {
        alert(" Name must be filled out");
        return false;
    }
	
	var y = document.forms["passenger_form"]["a2"].value;
    if (y == null || y == "") {
        alert("Age must be filled out");
        return false;
    }
	
	var x = document.forms["passenger_form"]["n3"].value;
    if (x == null || x == "") {
        alert(" Name must be filled out");
        return false;
    }
	
	var y = document.forms["passenger_form"]["a3"].value;
    if (y == null || y == "") {
        alert("Age must be filled out");
        return false;
    }
	
	var x = document.forms["passenger_form"]["n4"].value;
    if (x == null || x == "") {
        alert(" Name must be filled out");
        return false;
    }
	
	var y = document.forms["passenger_form"]["a4"].value;
    if (y == null || y == "") {
        alert("Age must be filled out");
        return false;
    }
	
*/	
	
	//validaion of from drop doem list
	var z = document.getElementById("g1");
	var strUser1 = z.options[z.selectedIndex].value;
    if(strUser1==0 ||strUser1=="" ||strUser1==null) //for text use if(strUser1=="Select")
    {
	alert("Please select gender");
		return false;
	}

/*	//validaion of from drop doem list
	var z = document.getElementById("g2");
	var strUser2 = z.options[z.selectedIndex].value;
    if(strUser2==0 ||strUser2=="" ||strUser2==null) //for text use if(strUser2=="Select")
    {
	alert("Please select gender");
		return false;
	}
	
		//validaion of from drop doem list
	var z = document.getElementById("g3");
	var strUser3 = z.options[z.selectedIndex].value;
    if(strUser3==0 ||strUser3=="" ||strUser3==null) //for text use if(strUser3=="Select")
    {
	alert("Please select gender");
		return false;
	}
	
		//validaion of from drop doem list
	var z = document.getElementById("g4");
	var strUser4 = z.options[z.selectedIndex].value;
    if(strUser4==0 ||strUser4=="" ||strUser4==null) //for text use if(strUser4=="Select")
    {
	alert("Please select gender");
		return false;
	
	}	
  */ 
	//validation of class drop dowm list
	var e = document.getElementById("p1");
	var strUser = e.options[e.selectedIndex].value;
	if(strUser==0 ||strUser=="" ||strUser==null) //for text use if(strUser1=="Select")
    {
		alert("Please select PassengerType.");
		return false;
	}

	
/*	//validation of class drop dowm list
	var e = document.getElementById("p2");
	var strUser2 = e.options[e.selectedIndex].value;
	if(strUser2==0 ||strUser2=="" ||strUser2==null) //for text use if(strUser1=="Select")
    {
		alert("Please select PassengerType.");
		return false;
	}
	
	//validation of class drop dowm list
	var e = document.getElementById("p3");
	var strUser3 = e.options[e.selectedIndex].value;
	if(strUser3==0 ||strUser3=="" ||strUser3==null) //for text use if(strUser1=="Select")
    {
		alert("Please select PassengerType.");
		return false;
	}
	
	//validation of class drop dowm list
	var e = document.getElementById("p4");
	var strUser4 = e.options[e.selectedIndex].value;
	if(strUser4==0 ||strUser4=="" ||strUser4==null) //for text use if(strUser1=="Select")
    {
		alert("Please select PassengerType.");
		return false;
	}
	
	
	
	
*/	
	
	
}//if ends here


</script>


<?php

include 'variables.php';
include 'phpfunction.php';
$_SESSION['count1']=$_POST['count']+$_SESSION['count1'];

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

<?php for($j=0;$j<($_SESSION['count1']);$j++){?>



<input type="text" size=30 name="n1[]" >
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
<input type="submit" value="Proceed" name="proceed"  > 
</form>

</body>
</html>



</BODY>
</HTML>