<?php
$username=$_POST['user'];
$password=$_POST['password'];
$mysql=mysqli_connect('localhost','root','');
if(!$mysql)
{
echo 'Can not Connect';
exit;
}
$select=mysqli_select_db($mysql,'project');
if(!$select)
{
die('Cannot Connect:'.mysqli_error($select));
exit;
}
$query="select * from admin where user='$username' and password='$password'";
$result=mysqli_query($mysql,$query);
if(!$result)
{
echo 'Wrong Username or Password <br/>';
echo 'Please Enter Correct Username and Password';
exit;
}
$row=mysqli_fetch_row($result);
$count=$row[0];
if($count>0)
{
header("location:admin_menu.php");

}
else
{
	echo'<body bgcolor="silver">';
	echo'<center>';
echo'<h2>login unsuccessful</h2>';
echo'<h3>You are not logged in</h3>';
echo'Only Authorised user can log in.<br/>';
echo'<a href="admin2.php">Back to Login page</a>';
	echo'</center>';
	echo'</body>';
}
?>