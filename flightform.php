<html>
<head>
<title> flight form</title>
<style type="text/css">
    ul{
        padding: 0;
        list-style: none;
        background: #f2f2f2;
    }
    ul li{
        display: inline-block;
        position: relative;
        line-height: 20px;
        text-align: left;
    }
    ul li a{
        display: block;
        padding: 4px 10px;
        color: #333;
        text-decoration: none;
    }
    ul li a:hover{
        color: #fff;
        background: #939393;
    }
    ul li ul.dropdown{
        min-width: 50px; /* Set width of the dropdown */
        background: #f2f2f2;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
    }
    ul li:hover ul.dropdown{
        display: block; /* Display the dropdown */
    }
    ul li ul.dropdown li{
        display: block;
    }
</style>
<script type="text/javascript">
function validateForm1(form) {
	
	
	//validation of radio button trip
    var x = form.trip[0].checked;
	var y=form.trip[1].checked
    if (x==false && y==false) {
        alert("select type of trip");
        return false;
    }

	
	//validaion of from drop doem list
	var z = document.getElementById("from");
	var strUser1 = z.options[z.selectedIndex].value;
    if(strUser1==0 ||strUser1=="" ||strUser1==null) //for text use if(strUser1=="Select")
    {
		alert("Please ENTER Source");
		return false;
	}

	//validation of to drop down list
	
	var p = document.getElementById("to");
	var strUser2 = p.options[p.selectedIndex].value;
		if(strUser2==0 ||strUser2=="" ||strUser2==null) //for text use if(strUser1=="Select")
    {
		alert("Please ENTER Destination");
		return false;
	}
	

   //validation of on date
	var b = document.forms["flight"]["on"].value;
    if (b == null || b == "") {
        alert("departure date must be filled");
        return false;
    }

	//validation of return date

 	var c = document.forms["flight"]["return"].value;
    if (c == null || c == "") {
        alert("return date must be filled");
        return false;
    }
	
	//validation of adlut count
	var d = document.getElementById("adult");
	var strUser = d.options[d.selectedIndex].value;
	if(strUser==0 ||strUser=="" ||strUser==null) //for text use if(strUser1=="Select")
    {
		alert("Please select count of adult");
		return false;
	}

	//validation of class drop dowm list
	var e = document.getElementById("class");
	var strUser = e.options[e.selectedIndex].value;
	if(strUser==0 ||strUser=="" ||strUser==null) //for text use if(strUser1=="Select")
    {
		alert("Please select Class");
		return false;
	}

	
	
}//if ends here


</script>

</head>
<body  background="AA1.jpg">

<br>
<font size=5>
 <ul>
        <li><a href="aboutus.php" target="_blank">About Us</a></li>
        <li>
		<a href="travel.php" target="_blank">Travel Info &#9662;</a>
	
		<ul class="dropdown">
                
                <li><a href="service.php" target="_blank">Service Info</a></li>
                <li><a href="offers.php" target="_blank">Concessions and Offers Info</a></li>
				<li><a href="travel.php" target="_blank">Travelling Info</a></li>
            </ul>
			</li>
        <li>
            <a href="#">Travel plan&#9662;</a>
            <ul class="dropdown">
                <li><a href="flightform.php" target="_blank">Book</a></li>
                <li><a href="login.php" target="_blank">cancellation</a></li>
				<li><a href="login.php" target="_blank">enquiry</a></li>
				
            </ul>
        </li>
        <li><a href="cust_care.php" target="_blank">Customer Care</a></li>
    </ul>
	
</font>







<h3>FIND FLIGHTS:</h3>
<form align="left" name="flight"  method="post" action="flightsearch.php">
<input type="radio" name="trip" value="rtrip"> Round Trip<p>
<input type="radio" name="trip" value="oway"> One Way<p>

FROM:
<select name="from" id="from" >
<option> </option>
<option> DELHI(DEL)</option>
<option> KOLKATA(KOL)</option>
</select>

TO:
<select name="to" id="to" >
<option> </option>
<option> DELHI(DEL)</option>
<option> KOLKATA(KOL)</option>
</select>
<p>
 
ON:  
<input type="date"  name="on">
RETURN: 
<input type="date"  name="return"> <p>

ADULT:
<select name="adult" id="adult" >
<option></option>
<option> 1</option>
<option> 2</option>
<option> 3</option>
<option> 4</option>
<option> 5</option>
</select>

CHILD:
<select name="child">
<option></option>
<option> 1</option>
<option> 2</option>
<option> 3</option>
<option> 4</option>
<option> 5</option>
</select>

INFANT:
<select>
<option></option>
<option> 1</option>
<option> 2</option>
<option> 3</option>
<option> 4</option>
<option> 5</option>
</select>
<p>

CLASS:
<select name="class" id="class">
<option></option>
<option> economy</option>
<option> business</option>
<option> vip</option>
</select>
<p>

<input type="submit" value="Find Flight" name="find_flight" onclick=" return validateForm1(this.form)" > 
</form>
</body>
</html>

