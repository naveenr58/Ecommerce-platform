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
	require_once("scripts/Connect_mysql.php");
	$sql = mysql_query("SELECT id FROM admin WHERE username='$manager' AND password='$password' LIMIT 1");
	$exitCount = mysql_num_rows($sql);
	if($exitCount == 0)
	{
		
		header("location:prd.html");
	}
?>
<?php
$product_list="";
$sql = mysql_query("SELECT * FROM products");
$productCount = mysql_num_rows($sql);
if($productCount > 0)
{
	while($row = mysql_fetch_array($sql))
	{
		$id = $row["id"];
		echo "$id <br>";
		$product_name = $row["product_name"];
		echo $product_name;
		$detail = $row["details"];
		echo $detail;
		$cat = $row["category"];
		echo $cat;
		$subcat = $row["subcategory"];
		echo $subcat;
		$time = $row["date_added"];
		echo $time;
		echo "<img src=image.php?id=".$row['id']." width=300 height=100/>";
		
	}
}
else{
	echo "you have no products in your data base";
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AddnewItem</title>
</head>

<body>

<h2>product list</h2>
<?php
echo "<img src=image.php?id=".$row['id']." width=300 height=100/>";
?>
</body>
</html>