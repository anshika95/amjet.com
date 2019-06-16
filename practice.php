
<html>
<head>
<script LANGUAGE="JavaScript">
function ValidateForm(form){
if ( ( form.trip[0].checked == false ) && ( form.trip[1].checked == false ) ) 
{
alert ( "Please choose your Gender: Male or Female" ); 
return false;
}
}
</script>
</head>
<body>
<form name="flight" action="#" method="post">
round trip <input type="radio" name="trip" value="round"> one way
<input type="radio" name="trip" value="one"> 
<input type="button" name="SubmitButton" value="Submit" onClick="ValidateForm(this.form)">
</form> 
</body>
</html>