<html>
<head>
<title> main task bar </title>
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
</head>
<body  background="castle.jpg">




<br>
<font size=5>
 <ul>
        <li><a href="aboutus.php" target="_blank">About Us</a></li>
        <li>
		<a href="travel.php" target="_blank">Travel Info &#9662;</a>
	
		<ul class="dropdown">
                
                <li><a href="service.php" target="_blank">Services</a></li>
                <li><a href="offers.php" target="_blank">Offers </a></li>
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
</body>
</html>