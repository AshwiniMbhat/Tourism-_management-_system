<html>
<head>

  <title>Process the HTML form data with the POST method</title>
</head>
<body>
	<table align='center' border='0' bgcolor='grey' width='640' cellpadding='10' cellspacing='0' height='725'>
          <tr>
            <td colspan='3' height='2' align="center" bgcolor='silver'><img src='tourism.jpg' height="200px" width="730px"></td>
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
$result=mysqli_query($link,"select * from place_info");
?>

<?php
if(isset($_POST["delete"])){
print"<center>";
echo"<h3>"."Delete This Record"."<h/3>";
$res=mysqli_query($link,"select * from place_info where pid='$_POST[id]'");
$data=mysqli_fetch_object($res);
print "<form method='POST'>";

print"<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>";

print "<tr bgcolor='#CCCCCC'>
<th>pid</th>
<th>image</th>
<th>malls</th>
<th>place_name</th>
<th>parks</th>
<th>meuseums</th>
<th>whether</th>
<th>speciel</th>
<th>restaurants</th>
<th>details</th>
</tr>";

print"<tr bgcolor=white>
<td><input type=\"hidden\" name=\"id\" value=\"$data->pid\"></td>
<td><input type=\"text\" name=\"image\" value=\"$data->image\"></td>
<td><input type=\"text\" name=\"Reg\" value=\"$data->malls\"></td>
<td><input type=\"text\" name=\"Name\" value=\"$data->place_name\"></td>
<td><input type=\"text\" name=\"Activity\" value=\"$data->parks\"></td>
<td><input type=\"text\" name=\"Address\" value=\"$data->meuseums\"></td>
<td><input type=\"text\" name=\"Phone\" value=\"$data->whether\"></td>
<td><input type=\"text\" name=\"Email\" value=\"$data->speciel\"></td>
<td><input type=\"text\" name=\"Website\" value=\"$data->restaurants\"></td>
<td><input type=\"text\" name=\"Website\" value=\"$data->details\"></td>
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
<th>malls</td>
<th>place_name</th>
<td>parks</th>
<th>meuseums</th>
<th>whether</th>
<th>speciel</th>
<th>restaurants</th>
<th>details</th>
<th>delete</th>
</tr>";
$i=1;
while($row=mysqli_fetch_array($result)){
print "<form method=POST>";
print"<tr bgcolor='white'>

<td>$i<input type=hidden name=\"id\" value=\"$row[pid]\"></td>

<td>$row[image]</td>
<td>$row[malls]</td>
<td>$row[place_name]</td>
<td>$row[parks]</td>
<td>$row[meuseums]</td>
<td>$row[whether]</td>
<td>$row[speciel]</td>
<td>$row[restaurants]</td>
<td>$row[details]</td>
<td align='center'><input type=submit name=delete value=delete></td>
</tr>";
print "</form>";
$i++;
}

if(isset($_POST['ap'])){
$id=$_POST['pid'];
$image=$_POST['image'];
$malls=$_POST['malls'];
$place_name=$_POST['place_name'];
$parks=$_POST['parks'];
$meuseums=$_POST['meuseums'];
$whether=$_POST['whether'];
$speciel=$_POST['speciel'];
$restaurants=$_POST['restaurants'];
$details=$_POST['details'];

$result=mysqli_query($link,"delete  from place_info 
where pid='$_POST[id]'");
if($result){
print "<script language=\"javascript\">alert(\"successifully updated...\");location.href=\"delplaceinfo.php\";</script>";
//header("location:dataviewerEDITDELETEWORKING.php");
}
else{
print "<script language=\"javascript\">alert(\"fail to update...\");location.href=\"delplaceinfo.php\";</script>";
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

