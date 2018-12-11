
<?php
ob_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"project");
$result=mysqli_query($link,"select * from booking");
?>

<?php
if(isset($_POST["delete"])){
print"<center>";
echo"<h3>"."Delete This Record"."<h/3>";
$res=mysqli_query($link,"select * from booking where b_id='$_POST[id]'");
$data=mysqli_fetch_object($res);
print "<form method='POST'>";

print"<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>";

print "<tr bgcolor='#CCCCCC'>
<th>u_id</th>
<th>place_name</th>
<th>uname</th>
<th>payment_type</th>
<th>bank</th>
<th>from_date</th>
<th>seat_no</th>
</tr>";

print"<tr bgcolor=white>
<td><input type=\"text\" name=\"id\" value=\"$data->u_id\"></td>
<td><input type=\"text\" name=\"Reg\" value=\"$data->place_name\"></td>
<td><input type=\"text\" name=\"Name\" value=\"$data->uname\"></td>
<td><input type=\"text\" name=\"Activity\" value=\"$data->payment_type\"></td>
<td><input type=\"text\" name=\"Address\" value=\"$data->bank\"></td>
<td><input type=\"text\" name=\"Phone\" value=\"$data->from_date\"></td>
<td><input type=\"text\" name=\"Email\" value=\"$data->seatno\"></td>
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
<th>u_id</th>
<th>place_name</td>
<th>uname</th>
<td>payment_type</th>
<th>bank</th>
<th>from_date</th>
<th>seatno</th>
<th>delete</th>
</tr>";
$i=1;
while($row=mysqli_fetch_array($result)){
print "<form method=POST>";
print"<tr bgcolor='white'>


<td>$i<input type=hidden name=\"id\" value=\"$row[b_id]\"></td>

<td>$row[u_id]</td>
<td>$row[place_name]</td>
<td>$row[uname]</td>
<td>$row[payment_type]</td>
<td>$row[bank]</td>
<td>$row[from_date]</td>
<td>$row[seatno]</td>
<td align='center'><input type=submit name=delete value=delete></td>
</tr>";
print "</form>";
$i++;
}

if(isset($_POST['ap'])){
$id=$_POST['b_id'];
$Name=$_POST['u_id'];
$age=$_POST['place_name'];
$sex=$_POST['uname'];
$email=$_POST['payment_type'];
$Ph_no=$_POST['bank'];
$login_id=$_POST['from_date'];
$address=$_POST['seatno'];


$result=mysqli_query($link,"delete  from booking 
where b_id='$_POST[id]' limit 1");
if($result){
print "<script language=\"javascript\">alert(\"successifully updated...\");location.href=\"cancellation.php\";</script>";
//header("location:dataviewerEDITDELETEWORKING.php");
}
else{
print "<script language=\"javascript\">alert(\"fail to update...\");location.href=\"cancellation.php\";</script>";
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

