<?php
$msg="";
if(isset($_POST['upload'])){
	$target="images/".basename($_FILES['image']['name']);
	$db=mysqli_connect("localhost","root","","project");
	$image=$_FILES['image']['name'];
	$a_id=$_POST['a_id'];
	$place_name=$_POST['place_name'];
	$num_of_days=$_POST['num_of_days'];
	$total_cost=$_POST['total_cost'];
	$validity=$_POST['validity'];
	$trans_type=$_POST['trans_type'];
	$start_from=$_POST['start_from'];
$sql="insert into packages (image,a_id,place_name,num_of_days,total_cost,validity,trans_type,start_from)
 values ('$image','$a_id','$place_name','$num_of_days','$total_cost','$validity','$trans_type','$start_from')";
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
<h1>ADD PACKAGES</h1>

<div id="content">

<?php
$db=mysqli_connect("localhost","root","","project");
$sql="select * from packages";
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result)) {
	
	echo "<div  id='img_div'>";
	echo "<img src='images/".$row['image']."'>";
	echo "<p>"."agent_id: ".$row['a_id']."</p>";
	echO "<p>"."place_name: ".$row['place_name']."</p>";
	echo "<p>"."num_of_days: ".$row['num_of_days']."</p>";
	echo "<p>"."total_cost: ".$row['total_cost']."</p>";
	echo "<p>"."validity: ".$row['validity']."</p>";
	echo "<p>"."trans_type: ".$row['trans_type']."</p>";
	echo "<p>"."start_from: ".$row['start_from']."</p>";
	echo "</div>";
	
}
?>
<form method="post" action="addpack.php"  enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" name="image">
</div>
<div>
<label>agent_id</label><br>
<input type="text" name="a_id"><br>
</div>

<div>
<label>place_name</label><br>
<input type="text" name="place_name"><br>
</div>

<div>
<label>num_of_days</label><br>
<input type="text" name="num_of_days"><br>
</div>
<div>
<label>total_cost</label><br>
<input type="text" name="total_cost"><br>
</div>
<div>
<label>validity</label><br>
<input type="text" name="validity"><br>
</div>
<div>
<label>trans_type</label><br>
<input type="text" name="trans_type"><br>
</div>
<div>
<label>start_from</label><br>
<input type="text" name="start_from"><br>
</div>

<div>
<input type="submit" name="upload" value="upload_image">
</div>
</form>
</div>
<div class="main">
<ul>
<li>  <a href="admin_menu.php">BACK</a></li>
  <li>  <a href="mainpage.php">LOGOUT</a></li>
  </ul>
</div>
</body>
</html>