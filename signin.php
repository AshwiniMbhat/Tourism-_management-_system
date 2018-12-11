<html>
<head>
<title></title>
<link <link rel="stylesheet" type="text/css" href="signin.css" />
</head>
<body>
<head>

<div class="head">
<h3>USER SIGNIN</h3>
</div>

<div>
<ul>
<li><a href="mainpage.php">BACK>></a></li>
</ul>
</div>

<form action="signcon.php" method="post">

<div class="input-group"><br><br>
<label>username:</label><br>
<input type="text" name="uname" >
</div><br>


<div class="input-group"><br>
<label>user_id:</label><br>
<input type="password" name="u_id" required pattern="([a-z]{4,12})" x-moz-error message="type required pattern" >
</div>




<div class="input-group">
<INPUT type="submit" value="LOGIN" />
</div><br>
<div class="input-group">
<label>not a memeber?</label>
<a href="tourist.php">CREATE AN ACCOUNT</a>
</div>
</form>
</body>
</html>