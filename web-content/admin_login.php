<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
if(isset($_SESSION["manager"]))
{
	header("location: main.php");
	exit();
	
}
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
?>
<?php

if(isset($_POST['username']) && isset($_POST['password']))
{
	$manager = preg_replace('#[^A-za-z0-9]#i', "", $_POST['username'] );
	$password = preg_replace('#[^A-za-z0-9]#i', "", $_POST['password'] );


	$sql = mysqli_query($conn,"SELECT id FROM admin WHERE username='$manager' AND password='$password' LIMIT 1");
	$exitCount = mysqli_num_rows($sql);
	if($exitCount == 1)
	{
		while($row == mysqli_fetch_array($sql))
		{
			$id = $row["id"];
		}
		$_SESSION["id"] = $id;
		$_SESSION["manager"] = $manager;
		$_SESSION["password"] = $password;
		header("location:main.php");
		exit();
	}
	else
	{
		echo "error page";
		exit();
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin login page</title>
<link href="main.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div style="background-color: #99F">
<div id="frm">
<form action="admin_login.php" id="form1" name="form1" method="post">
Username:<br />
<input type="text" name="username" value="" id="username" size="40" /><br />
Password:<br />
<input type="text" name="password" value="" id="password" size="40" /><br />
<br /><br />
<input type="submit" name="button" id="button" value="login" />
</form>
</div>
<div id="frm2">
<form action="signup.php" id="form1" name="form1" method="post">
Username:<br />
<input type="text" name="username" value="" id="username" size="40" /><br />
Password:<br />
<input type="text" name="password" value="" id="password" size="40" /><br />
<br /><br />
<input type="submit" name="button" id="button1" value="Sign UP" />
</form>
</div>
</div>


</body>
</html>