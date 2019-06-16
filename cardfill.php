<html>
<body bgcolor="coral">
<?PHP include 'variables.php';
include 'phpfunction.php';?>
<h3>CREDIT CARD:</h3>
<img src="" align="right" height=170 width=550>
<form align="left" name="ccard"  method="post" action="transaction.php">
<input type="radio" name="ctype" value="master"> MASTER<p>
<input type="radio" name="ctype" value="visa"> VISA<p>
<input type="text" name="cno"> CARD NUMBER<p>
<input type="text" name="ch"> CARD HOLDER NAME<p>
<input type="password" name="cp"> CARD PASSWORD<p>  
<input type="date"  name="edate">EXPIRY DATE <p>
AMOUNT FILLED:--><?php echo $_SESSION['total']+$_SESSION['total1']; ?>

<p>

<input type="submit" value="PAY"  onclick="" > 
</form>





<h3>DEBIT CARD:</h3>
<img src="" align="right" height=170 width=550>
<form align="left" name="dcard"  method="post" action="transaction.php">
<input type="text" name="cno"> CARD NUMBER<p>
<input type="text" name="ch"> CARD HOLDER NAME<p>
<input type="password" name="cp"> CARD PASSWORD<p>  
<input type="date"  name="edate">EXPIRY DATE <p>
AMOUNT FILLED:--><?php echo $_SESSION['total']+$_SESSION['total1']; ?>


<p>

<input type="submit" value="PAY" onclick="" > 
</form>

</BODY>
</HTML>