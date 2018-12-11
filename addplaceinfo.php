<?php
$msg="";
if(isset($_POST['upload'])){
	$target="images/".basename($_FILES['image']['name']);
	$db=mysqli_connect("localhost","root","","project");
	$image=$_FILES['image']['name'];
	$pid=$_POST['pid'];
	$malls=$_POST['malls'];
	$place_name=$_POST['place_name'];
	$parks=$_POST['parks'];
	$meuseums=$_POST['meuseums'];
	$whether=$_POST['whether'];
	$speciel=$_POST['speciel'];
	$restaurants=$_POST['restaurants'];
	$details=$_POST['details'];
$sql="insert into place_info (image,pid,malls,place_name,parks,meuseums,whether,speciel,restaurants,details)
 values ('$image','$pid','$malls','$place_name','$parks','$meuseums','$whether','$speciel','$restaurants','$details')";
 if(!$sql)
 {
	 echo "error";
 }
 mysqli_query($db,$sql);
if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
	
	$msg="image uploaded";
}else{
	$msg="there is a problem uploading image";
}


}
?>
<!DOCTYPE html>
<html>
<head>
<title>image upload</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>ADD PLACE INFORMATION</h1>
<div class="main">
<ul>

<li>  <a href="admin_menu.php">BACK</a></li>
  <li>  <a href="mainpage.php">LOGOUT</a></li>
  </ul>
<div id="content">

<?php
$db=mysqli_connect("localhost","root","","project");
$sql="select * from place_info";
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result)) {
	
	echo "<div  id='img_div'>";
	echo "<img src='images/".$row['image']."'>";
	echo "<p>"."package_id: ".$row['pid']."</p>";
	echO "<p>"."malls to be visited: ".$row['malls']."</p>";
	echo "<p>"."place_name: ".$row['place_name']."</p>";
	echo "<p>"."parks to be visited: ".$row['parks']."</p>";
	echo "<p>"."meuseums to be visited: ".$row['meuseums']."</p>";
	echo "<p>"."whether condition: ".$row['whether']."</p>";
	echo "<p>"."speciel event: ".$row['speciel']."</p>";
	echo "<p>"."restaurents: ".$row['restaurants']."</p>";
	echo "<p>"."complete discription of the tour: ".$row['details']."</p>";
	echo "</div>";
	
}
?>
<form method="post" action="addplaceinfo.php"  enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" name="image">
</div>
<div>
<label>package_id</label><br>
<input type="text" name="pid"><br>
</div>

<div>
<label>malls</label><br>
<input type="text" name="malls"><br>
</div>

<div>
<label>place_name</label><br>
<input type="text" name="place_name"><br>
</div>
<div>
<label>parks</label><br>
<input type="text" name="parks"><br>
</div>
<div>
<label>meuseums</label><br>
<input type="text" name="meuseums"><br>
</div>
<div>
<label>whether</label><br>
<input type="text" name="whether"><br>
</div>
<div>
<label>speciel event</label><br>
<input type="text" name="speciel"><br>
</div>
<div>
<label>restaurents</label><br>
<input type="text" name="restaurants"><br>
</div>
<div>
<textarea name="details" cols="40" rows="4" placeholder="say something about the tour"></textarea>
</div>
<div>
<input type="submit" name="upload" value="upload_image">
</div>
</form>
</div>
</body>
</html>