<html>
<head>
<title> update</title>

<script type="text/javascript">

function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
	}
	
	var y = document.forms["myForm"]["email"].value;
    if (x == null || x == "") {
        alert("E-mail must be filled out");
        return false;
    }
}

	</script>
	</head>
	
	
	<body bgcolor="scarlet">
	
	<h3><a href="home1.php" target="nav">HOME </a></h3><p>
	<form align="left" name="myForm" action="updateprofile.php" onsubmit="return validateForm()" method="post">
	<img src="" align="right" height=200 width=180>
	 
	<input type="text" name="fname"> <br><br><p>

	EMAIL:
	<input type="text" size=30 name="email"><br><br><p>

	<input type="submit" value="Update">

	</form>
	</html>

