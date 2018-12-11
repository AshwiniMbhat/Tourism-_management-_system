<html>
<head>
<title>REGESTER</title>
<link rel="stylesheet" type="text/css" href="t1.css">
</head>
<body>
<header>
<div class="head">
<h3>TOURIST REGESTRATION</h3>
</div>

<form action="touristcon.php"  method="post">
<div class="input-group">
<label>password:</label>
<input type="password" name="u_id" required pattern="([a-z]{4,12})" x-moz-error message="type required pattern">
</div>

<div class="input-group">
<label>NAME:</label>
<input type="text" name="uname">
</div>

<div class="input-group">
<label>AGE:</label>
<input type="text" name="age" required pattern="([0-9]{1,3})"  x-moz-error message="type required pattern">
</div>

<div class="input-group">
<label>PH_NO:</label>
<input type="text" name="ph_no" required pattern="([0-9]{10})" x-moz-error message="type required pattern">
</div>

<div class="input-group">
<label>EMAIL:</label>
<input type="text" name="email" required pattern="([(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15})" x-moz-error message="type required pattern" >
</div>

<div class="input-group">
<label>ADDRESS:</label>
<input type="text" name="address" required pattern="([A-Za-z0-9]+)"  x-moz-error message="type required pattern" >
</div>

<div class="input-group">
<label>SEX:</label>
<input type="text" name="sex">
</div>

<div class="input-group"><br>
<INPUT type="submit" value="Add" />
</div>
<div class="input-group"><br>
<label>already a member?</label>
<a href="signin.php">signin</a>
</div>
</form>

</header>
</body>
</html>