<html>
<head>

  <title>Process the HTML form data with the POST method</title>
</head>
<body>
	<table align='center' border='0' bgcolor='grey' width='640' cellpadding='10' cellspacing='0' height='725'>
          <tr>
            <td colspan='3' height='2' align="center" bgcolor='silver'><img src='Travel-the-world.jpg'height="200px" width="550px"></td>
          </tr>
          <tr>
            <td colspan='3' height='1' align='right'><a href='admin2.php'>log out </a></td>
            
          </tr>
          <tr>
            <td colspan="3" bgcolor='#999999' valign='center'>


<?php
ob_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"project");
$result=mysqli_query($link,"select * from packages");
?>

<?php
if(isset($_POST["delete"])){
print"<center>";
echo"<h3>"."Delete This Record"."<h/3>";
$res=mysqli_query($link,"select * from packages where pid='$_POST[id]'");
$data=mysqli_fetch_object($res);
print "<form method='POST'>";

print"<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>";

print "<tr bgcolor='#CCCCCC'>
<th>pid</th>
<th>image</th>
<th>a_id</th>
<th>place_name</th>
<th>num_of_days</th>
<th>total_cost</th>
<th>validity</th>
<th>trans_type</th>
<th>start_from</th>
</tr>";

print"<tr bgcolor=white>
<td><input type=\"hidden\" name=\"id\" value=\"$data->pid\"></td>
<td><input type=\"text\" name=\"image\" value=\"$data->image\"></td>
<td><input type=\"text\" name=\"Reg\" value=\"$data->a_id\"></td>
<td><input type=\"text\" name=\"Name\" value=\"$data->place_name\"></td>
<td><input type=\"text\" name=\"Activity\" value=\"$data->num_of_days\"></td>
<td><input type=\"text\" name=\"Address\" value=\"$data->total_cost\"></td>
<td><input type=\"text\" name=\"Phone\" value=\"$data->validity\"></td>
<td><input type=\"text\" name=\"Email\" value=\"$data->trans_type\"></td>
<td><input type=\"text\" name=\"Website\" value=\"$data->start_from\"></td>
</tr>";

//form for edit button:
print"<tr bgcolor=white align=center><td colspan=9><input type=\"submit\" name=\"ap\" value=\"delete\"></td></tr>";
print "</form>";
print"</table>";
print"</center>";
}
?>


<?php
print"
<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><b>DELETE REGISTERED DETAILS</b></caption>
<tr bgcolor='#CCCCCC'>
<th>S/No.</th>
<th>image</th>
<th>a_id</td>
<th>place_name</th>
<td>num_of_days</th>
<th>total_cost</th>
<th>validity</th>
<th>trans_type</th>
<th>start_from</th>
<th>delete</th>
</tr>";
$i=1;
while($row=mysqli_fetch_array($result)){
print "<form method=POST>";
print"<tr bgcolor='white'>

<td>$i<input type=hidden name=\"id\" value=\"$row[pid]\"></td>

<td>$row[image]</td>
<td>$row[a_id]</td>
<td>$row[place_name]</td>
<td>$row[num_of_days]</td>
<td>$row[total_cost]</td>
<td>$row[validity]</td>
<td>$row[trans_type]</td>
<td>$row[start_from]</td>
<td align='center'><input type=submit name=delete value=delete></td>
</tr>";
print "</form>";
$i++;
}

if(isset($_POST['ap'])){
$id=$_POST['pid'];
$image=$_POST['image'];
$a_id=$_POST['a_id'];
$place_name=$_POST['place_name'];
$num_of_days=$_POST['num_of_days'];
$total_cost=$_POST['total_cost'];
$validity=$_POST['validity'];
$trans_type=$_POST['trans_type'];
$start_from=$_POST['start_from'];


$result=mysqli_query($link,"delete  from packages 
where pid='$_POST[id]'");
if($result){
print "<script language=\"javascript\">alert(\"successifully updated...\");location.href=\"delpack.php\";</script>";
//header("location:dataviewerEDITDELETEWORKING.php");
}
else{
print "<script language=\"javascript\">alert(\"fail to update...\");location.href=\"delpack.php\";</script>";
//header("location:dataviewereditdeleteworkingnoconfirmation.php");
}
}

print"</table>";

?>  

<br />

			</td>
          </tr>
          <tr>
			<td colspan="3" align="center"><a href="admin_menu.php" target="_parent">Back/menu <b>|</b></a>
			
			<a href="mainpage.php" target="_parent">Log out</a></td>
          </tr>
          <tr>
            <td colspan='3' align='center' bgcolor='silver' height='1'>
					&copy; 2014 all rights received
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					jkuat unit registration (jurs)
            </td>
          </tr>
	</table>
</body>
</head>
</html>

