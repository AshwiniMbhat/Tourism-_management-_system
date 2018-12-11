<html>
<head>
<title>REGESTER</title>
<link rel="stylesheet" type="text/css" href="booking.css">
</head>
<body>
<header>
<div class="head">
<h3>BOOKING</h3>
</div>
<form action="bconnection.php"  method="post">
<div class="input-group">
<label>USER_ID:</label>
<input type="text" name="u_id" placeholder="enter user_id">
</div>
<div class="input-group">
<label>PACKAGE_ID:</label>
<input type="text" name="pid" placeholder="enter package_id">
</div>


<div class="input-group">
<label>NAME:</label>
<input type="text" name="uname" placeholder="enter your name">
</div>


<div class="input-group">
<label>PAYMENT_TYPE:</label>
<input type="text" name="payment_type" placeholder="enter type of payment">
</div>

<div class="input-group">
<label>BANK_NAME:</label>
<input type="text" name="bank" placeholder="enter bank_name">
</div>

<div class="input-group">
<label>FROM_DATE:</label>
<input type="date" name="from_date" placeholder="enter start date">
</div>

<div class="input-group"><br>
<INPUT type="submit" value="Add" />

</div>


</form>
<div class="header"><br>
<a href="tmenu.php"><INPUT type="submit" value="back/menu" /></a>

</div>
</header>
</body>
</html>