<?php
session_start();
if(!isset($_SESSION["manager"]))
{
	header("location:admin_login.php");
	exit();
}
$usr = $_SESSION['manager'];
$pss = $_SESSION['password'];
$manager = preg_replace('#[^A-za-z0-9]#i', "", $usr);
	$password = preg_replace('#[^A-za-z0-9]#i', "", $pss);
	ini_set('display_errors',1);
error_reporting(E_ALL);
$conn = mysqli_connect("localhost","root","");
if(!$conn)
{
echo mysqli_error();
}
$db = mysqli_select_db($conn,"imagestore");
if(!$db)
{
echo mysqli_error();
}
	$sql = mysqli_query($conn,"SELECT id FROM admin WHERE username='$manager' AND password='$password' LIMIT 1");
	$exitCount = mysqli_num_rows($sql);
	if($exitCount == 0)
	{
		
		header("location:prd.html");
	}
?>


<html>
<title>Animal Information </title>
<body>
<form enctype="multipart/form-data" action="storeinfo.php" method="POST">

<table border=0 align=center bgcolor=black width=100%>
<tr><td colspan=2><h3 style="color:red"><a href="logout.php" style="color:red">Log out</a></h3></td></tr>
</table>


<table border=0 align=center bgcolor=grey>
<tr><td colspan=2><h2>New Product</h2></td></tr>
<tr>
<td>Product Name</td><td><input type=text name="aname" size="40"></td>
</tr>
<tr>
<td>Price</td>
<td><input type="text" name="aprice" size="40"></td>
</tr>
<tr>
<td>seclect catogory</td><td><input type="text" name="acat" size="40"></td>
</tr>
<tr>
<td>Select subcatogory</td>
<td><input type="text" name="asubcat" size="40"></td>
</tr>
<tr>
<td>Product Description</td><td><textarea cols="30" rows="5" name="adetails"> </textarea></td>
</tr>
<tr>
<td>Product Description 2</td>
<td><textarea cols="30" rows="5" name="adetails1"> </textarea></td>
</tr>
<tr>
<td>Photo</td><td><input type=file name="aphoto"></td>
</tr>
<tr>
<td>Zoompic</td>
<td><input type=file name="azoompic"></td>
</tr>
<tr>
<td></td><td><input type=submit name="submit" value="Store Information"></td>
</tr>
</table>
</form>
</body>
</html>