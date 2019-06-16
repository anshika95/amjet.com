<html>
<head>
<title> manage </title>
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


<body bgcolor="scarlet">

<h3><a href="home.php" target="_blank">HOME </a></h3><p>

<font size=5>
 <ul>
        <li><a href="offers.php" target="_blank">Current Offers</a></li><br><p>
        <li>
		<a href="#">Manage Account &#9662;</a>
	
		<ul class="dropdown">
                
                <li><a href="update.php" target="_blank">Update Info</a></li>
                <li><a href="enquiry.php" target="_blank">Past Booking</a></li>
		
				<li><a href="cancellation.php" target="_blank">Cancellation</a></li>
            </ul>
			</li>
       
	</font>
</body>
</html>
