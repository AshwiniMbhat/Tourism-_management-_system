<?php
$msg="";
if(isset($_POST['upload'])){
	$target="images/".basename($_FILES['image']['name']);
	$db=mysqli_connect("localhost","root","","project");
	$image=$_FILES['image']['name'];
$text=$_POST['text'];
$sql="insert into images(image,text) values('$image','$text')";
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
<div id="content">

<?php
$db=mysqli_connect("localhost","root","","project");
$sql="select * from images";
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result)){
	echo "<div  id='img_div'>";
	echo "<a href=admin2.php>"."<img src='images/".$row['image']."'>"."</a>";
	echo"<p>".$row['text']."</p>";
	echo "</div>";
}
?>
<form method="post" action="inadex.php"  enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" name="image">
</div>
<div>
<textarea name="text" cols="40" rows="4" placeholder="say something"></textarea>
</div>
<div>
<input type="submit" name="upload" value="upload_image">
</div>
</form>
</div>
</body>
</html>