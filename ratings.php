<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="ratings.css" />
</head>
<body>
<h1>RATINGS FOR OUR SERVICE</h1>
<div>
<ul>
	 <li><a href ="mainpage.php">HOME</a></li>
 <li><a href="#">LOGOUT</a></li>
 </ul>
</div>
<form action="rconnection.php" method="post">

<div class="input-group">
<label>PLACE_NAME:</label>
<input type="text" name="place_name">
</div>


<div class="input-group">
<label>u_id:</label>
<input type="text" name="u_id">
</div>

<div class="input-group">
<label>RATE(out of 5):</label>
<input type="text" name="num_of_stars">
</div>

<div class="input-group">
<label>COMMENTS:</label>
<textarea name="comments" style="font-family:sans-serif;font-size:1.2em;"></textarea>
</div>

<div class="input-group"><br>
<INPUT type="submit" value="Add" />

</div>


</form>


</body>