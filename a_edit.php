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
$result=mysqli_query($link,"select * from agent");
?>

<?php
if(isset($_POST["delete"])){
print"<center>";
echo"<h3>"."Delete This Record"."<h/3>";
$res=mysqli_query($link,"select * from agent where a_id='$_POST[id]'");
$data=mysqli_fetch_object($res);
print "<form method='POST'>";

print"<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>";

print "<tr bgcolor='#CCCCCC'>
<th>S/No.</th>
<th>Reg No</th>
<th>Name</th>
<th>Activity</th>
<th>Phisical Address</th>
<th>Phone/Fax</th>
<th>Email</th>
<th>Website</th>
<th>Region</th>
</tr>";

print"<tr bgcolor=white>
<td><input type=\"hidden\" name=\"id\" value=\"$data->a_id\"></td>
<td><input type=\"text\" name=\"Reg\" value=\"$data->name\"></td>
<td><input type=\"text\" name=\"Name\" value=\"$data->age\"></td>
<td><input type=\"text\" name=\"Activity\" value=\"$data->sex\"></td>
<td><input type=\"text\" name=\"Address\" value=\"$data->email\"></td>
<td><input type=\"text\" name=\"Phone\" value=\"$data->ph_no\"></td>
<td><input type=\"text\" name=\"Email\" value=\"$data->login_id\"></td>
<td><input type=\"text\" name=\"Website\" value=\"$data->address\"></td>
<td><input type=\"text\" name=\"Region\" value=\"$data->place_name\"></td>
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
<th>Reg No</th>
<th>Name</th>
<th>Activity</td>
<th>Phisical Address</th>
<td>Phone/Fax</th>
<th>Email</th>
<th>Website</th>
<th>Region</th>
<th>delete</th>
</tr>";
$i=1;
while($row=mysqli_fetch_array($result)){
print "<form method=POST>";
print"<tr bgcolor='white'>

<td>$i<input type=\"hidden\" name=\"id\" value=\"$row[a_id]\"></td>
<td>$row[name]</td>
<td>$row[age]</td>
<td>$row[sex]</td>
<td>$row[email]</td>
<td>$row[ph_no]</td>
<td>$row[login_id]</td>
<td>$row[address]</td>
<td>$row[place_name]</td>
<td align='center'><input type=submit name=delete value=delete></td>
</tr>";
print "</form>";
$i++;
}

if(isset($_POST['ap'])){
$id=$_POST['a_id'];
$Name=$_POST['name'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$email=$_POST['email'];
$Ph_no=$_POST['Ph_no'];
$login_id=$_POST['login_id'];
$address=$_POST['address'];
$place_name=$_POST['place_name'];


$result=mysqli_query($link,"delete  from agent 
where a_id='$_POST[id]' limit 1");
if($result){
print "<script language=\"javascript\">alert(\"successifully updated...\");location.href=\"t_edit.php\";</script>";
//header("location:dataviewerEDITDELETEWORKING.php");
}
else{
print "<script language=\"javascript\">alert(\"fail to update...\");location.href=\"edit.php\";</script>";
//header("location:dataviewereditdeleteworkingnoconfirmation.php");
}
}

print"</table>";

?>  

<br />

			</td>
          </tr>
          <tr>
			<td colspan="3" align="center"><a href="menu.php" target="_parent">Back/menu <b>|</b></a>
			<a href="view.php" target="_parent">View details <b>|</b></a>
			<a href="index.php" target="_parent">Log out</a></td>
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

