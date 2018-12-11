<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
	die('could not connect:'.mysqli_error());
}
mysqli_select_db($con,"project") or die("connection failed to select database");
$fnum=$_POST["seatno"];
$id=$_COOKIE["b_id"];
echo"seatno for:->$_POST[username] is cancelled by $id";
echo"</br>";
echo "cancellation details:";
$result=mysqli_query("select * from booking where seatno='$fnum'");
echo "<table border='1'>
<tr>
<th>b_id</th>
<th>u_id</th>
<th>place_name</th>
<th>uname</th>
<th>payment_type</th>
<th>bank</th>
<th>from_date</th>
<th>seatno</th>
</tr>";
while($row= mysqli_fetch_array($result))
{
	echo "<tr";
	echo "<td>".$row['b_id']."</td";
	echo "<td>".$row['u_id']."</td";
	echo "<td>".$row['place_name']."</td";
	echo "<td>".$row['uname']."</td";
	echo "<td>".$row['payment_type']."</td";
	echo "<td>".$row['bank']."</td";
	echo "<td>".$row['from_date']."</td";
	echo "<td>".$row['seatno']."</td";
	echo "</tr>";
}
echo "</table>";
$id=$_COOKIE["id"];
$x=$_POST["seatno"];
$sql="delete from booking where cus_name='$id'and fli_num='$x'";
if(!mysqli_query($sql,$con))
{
	die('error:'.mysqli_error());
	
}
echo"ticket cancelled";
?>