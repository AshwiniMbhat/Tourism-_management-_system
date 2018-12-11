

<?php
SESSION_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"project");
$result=mysqli_query($link,"select * from booking");
?>
<?php
if(isset($_POST["cancel booking"])){
print"<center>";
echo"<h3>"."Delete This Record"."<h/3>";
$res=mysqli_query($link,"select * from booking where u_id='$_POST[u_id]'");
$data=mysqli_fetch_object($res);

print"<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>";

print "<tr bgcolor='#CCCCCC'>
<th>u_id</th>
<th>pid</th>
<th>place_name</th>
<th>uname</th>
<th>payment_type</th>
<th>bank</th>
<th>from_date</th>
</tr>";

print"<tr bgcolor=white>
<td><input type=\"text\" name=\"id\" value=\"$data->u_id\"></td>
<td><input type=\"text\" name=\"id\" value=\"$data->pid\"></td>
<td><input type=\"text\" name=\"Reg\" value=\"$data->place_name\"></td>
<td><input type=\"text\" name=\"Name\" value=\"$data->uname\"></td>
<td><input type=\"text\" name=\"Activity\" value=\"$data->payment_type\"></td>
<td><input type=\"text\" name=\"Address\" value=\"$data->bank\"></td>
<td><input type=\"text\" name=\"Phone\" value=\"$data->from_date\"></td>
</tr>";
//form for edit button:
print"<tr bgcolor=white align=center><td colspan=9><input type=\"submit\" name=\"ap\" value=\"cancel booking\"></td></tr>";
print "</form>";
print"</table>";
print"</center>";
}



$result=mysqli_query($link,"delete  from booking 
where u_id='$_POST[u_id]' and uname='$_POST[uname]' ");

if($result){
print "<script language=\"javascript\">alert(\"successfully cancelled...\");location.href=\"canbook.html\";</script>";
//header("location:dataviewerEDITDELETEWORKING.php");
}
else{
print "<script language=\"javascript\">alert(\"failed to cancel...\");location.href=\"canbook.html\";</script>";
//header("location:dataviewereditdeleteworkingnoconfirmation.php");
}


print"</table>";

?>  

