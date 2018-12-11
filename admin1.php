<html>
<head>
  <title>Process the HTML form data with the POST method</title>
</head>
<body>
	<table align='center' border='0' bgcolor='darkgrey' width='640' cellpadding='10' cellspacing='0' height='725'>
          <tr>
            <td colspan="3" height="2"><img src="images/ttbanner.gif" /></td>
          </tr>
          <tr>
            <td colspan="3" height="2" align="right"><a href="index.php">log out </a></td>
          </tr>
          <tr>
            <td width="25%" bgcolor="#999999" align="center">
            	<font size="6">The Land of Kilimanjaro, Zanzibar and Serengeti</font>
                <br />
            	<img src="images/Animals.gif" height="200" width="200" />
            </td>
            <td width="50%" align="center">
            <h1 valign="top">Register
</h1>
<form action="another.php" method="post">
<table border='0' bgcolor='silver' align='center'>
<font size="20">

<tr>
<td align="right">
Reg No.:</td>
<td>
<input type="text" name="Reg" />
</td>
</tr>

<tr>
<td align="right">
Name:</td>
<td>
<input type="text" name="Name" />
</td>
</tr>

<tr>
<td align="right">
Activity:</td>
<td>
<input type="text" name="Activity" />
</td>
</tr>

<tr>
<td align="right">
Phisical Address:</td>
<td>
<textarea cols="16" rows="2" name="Address"></textarea>
</td>
</tr>

<tr>
<td align="right">
Phone/Fax:</td>
<td>
<input type="text" name="Phone" />
</td>
</tr>

<tr>
<td align="right">
Email:</td>
<td>
<input type="text" name="Email" />
</td>
</tr>

<tr>
<td align="right">
Website:</td>
<td>
<input type="text" name="Website" />
</td>
</tr>

<tr>
<td align="right">
Region:</td>
<td>
<input type="text" name="Region" />
</td>
</tr>

<tr>
<td><INPUT type="submit" value="Add" /></td>
<td><INPUT type="reset" value="Clear" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<INPUT type="reset" value="Cancel" />
</td>
</tr>
 </font>
</table>
</form>
 
            </td>
            <td width="25%" bgcolor="#999999">
            <p><h3>Registering Rules:</h3>
            <ul>
            <li>Totaly Empty fields can not be submitted.</li>
            <li>Registration Number, Name Activity and Region are compulsory.</li>
            <li>Make sure spelling are typed correctly.</li>
            <li>The submitted data are going to be viewed on the website, make sure that the informations are correct.</li>
            <li>Biasnesses are not recommended.</li>
             <li>Consider security measures when filling data.</li>
            </ul>
            </p>
            </td>
          </tr>
          <tr>
            <td colspan="2" height="2" align="left"><a href="menu.php">Go to Menu</a></td>
            <td colspan="1" height="2" align="right"><a href="view.php">View Information</a></td>
          </tr>
          </tr>
          <tr>
            <td colspan="3" align="center" bgcolor="silver" height="1">
					&copy; 2014 all rights received
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					jkuat unit registration system(juros)
            </td>
          </tr>
	</table>
</body>
</head>
</html>