<html>
<head>

  <title>Process the HTML form data with the POST method</title>
</head>
<body>
	<table align='center' border='0' bgcolor='grey' width='640' cellpadding='10' cellspacing='0' height='725'>
          <tr>
            <td colspan='3' height='2' align="center" bgcolor='silver'><img src='thT2SEQEI7.jpg'height="250px" width="730px"></td>
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
$result=mysqli_query($link,"select * from tourist");
?>

<?php
if(isset($_POST["delete"])){
print"<center>";
echo"<h3>"."Delete This Record"."<h/3>";
$res=mysqli_query($link,"select * from tourist where u_id='$_POST[id]'");
$data=mysqli_fetch_object($res);
print "<form method='POST'>";

print"<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>";

print "<tr bgcolor='#CCCCCC'>
<th>S/No.</th>
<th>uname</th>
<th>age</th>
<th>ph_no</th>
<th>email</th>
<th>address</th>
<th>sex</th>
</tr>";

print"<tr bgcolor=white>
<td><input type=\"hidden\" name=\"id\" value=\"$data->u_id\"></td>
<td><input type=\"text\" name=\"Reg\" value=\"$data->uname\"></td>
<td><input type=\"text\" name=\"Name\" value=\"$data->age\"></td>
<td><input type=\"text\" name=\"Activity\" value=\"$data->ph_no\"></td>
<td><input type=\"text\" name=\"Address\" value=\"$data->email\"></td>
<td><input type=\"text\" name=\"Phone\" value=\"$data->address\"></td>
<td><input type=\"text\" name=\"Email\" value=\"$data->sex\"></td>
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
<th>uname</th>
<th>age</td>
<th>ph_no</th>
<td>email</th>
<th>address</th>
<th>sex</th>
<th>delete</th>
</tr>";
$i=1;
while($row=mysqli_fetch_array($result)){
print "<form method=POST>";
print"<tr bgcolor='white'>

<td>$i<input type=hidden name=\"id\" value=\"$row[u_id]\"></td>

<td>$row[uname]</td>
<td>$row[age]</td>
<td>$row[ph_no]</td>
<td>$row[email]</td>
<td>$row[address]</td>
<td>$row[sex]</td>
<td align='center'><input type=submit name=delete value=delete></td>
</tr>";
print "</form>";
$i++;
}

if(isset($_POST['ap'])){
$id=$_POST['u_id'];
$Name=$_POST['uname'];
$age=$_POST['age'];
$sex=$_POST['ph_no'];
$email=$_POST['email'];
$Ph_no=$_POST['address'];
$login_id=$_POST['sex'];


$result=mysqli_query($link,"delete  from tourist 
where u_id='$_POST[id]' limit 1");
if($result){
print "<script language=\"javascript\">alert(\"successifully updated...\");location.href=\"t_delete.php\";</script>";
//header("location:dataviewerEDITDELETEWORKING.php");
}
else{
print "<script language=\"javascript\">alert(\"fail to update...\");location.href=\"t_delete.php\";</script>";
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
					
            </td>
          </tr>
	</table>
</body>
</head>
</html>

