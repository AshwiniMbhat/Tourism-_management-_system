<html>
<head>
<title></title>
 <link rel="stylesheet" type="text/css" href="admin_style.css" />
</head>
<body>
<head>

<div class="head">
<h3>ADMIN LOGIN</h3>
</div>

<div>
<ul>
<li><a href="mainpage.php">BACK>></a></li>
</ul>
</div>

<form action="process.php" method="post">
<div class="input-group"><br><br>
<label>username:</label><br>
<input type="text" name="user" id="user" />
</div>

<div class="input-group"><br>
<label>password:</label><br>
<input type="password" name="password" id="password" required pattern="([a-z]{4,12}[0-9]{1,3})" x-moz-error message="type required pattern"/>
</div><br><br>

<div class="input-group">
<INPUT type="submit" value="LOGIN" />
</div><br>
</form>
</body>
</html>