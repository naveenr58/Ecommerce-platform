<?php
session_start();

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
if(isset($_GET['ano']))
{
	$ano = intval($_GET['ano']);
	if(isset($_SESSION['cart'] [$ano]))
	{
		$_SESSION['cart'][$ano]['quantity']++;
	}
	else
	{
		$sql_s = "SELECT * FROM animaldata WHERE ano = ($ano)";
		$query_s = mysqli_query($conn,"$sql_s");
		if(mysqli_num_rows($query_s) != 0)
		{
			$row_s = mysqli_fetch_array($query_s);
			$_SESSION['cart'][$row_s['ano']] = array(
			"quantity" => 1,
			"price" => $row_s['aprice']
		);
		}
		else{
			$message = "This Product id is not valid";
		}
	}
}
?>
<?php

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="main.css" rel="stylesheet" type="text/css" />
<title>Dresses|Products|Trendz</title>
<script src="modanizer.js"></script>
</head>
<body>
<div id="top"></div>
<div id="header">
<table>
<tr>
<td id="logo"><img src="lgo.png" /></td>
<td ><marquee><img src="pics/1.jpg" height="150px" width="200px"  /><img src="pics/3 (2).jpg" height="150px" width="200px"  />
<img src="pics/3.jpg" height="150px" width="200px"  /><img src="pics/61PvFR-DciL._SL1200_.jpg" height="150px" width="200px"  />
<img src="pics/earrings.jpg" height="150px" width="200px"  />
<img src="pics/1401050-red_4.jpg" height="150px" width="200px"  />
<img src="pics/112-2013-17-2.jpg" height="150px" width="200px"  />
<img src="pics/4.jpg" height="150px" width="200px"  /><img src="pics/big1.278757.4_1.jpg" height="150px" width="200px"  />
<img src="pics/cherrytin0927.jpg" height="150px" width="200px"  /><img src="pics/neonsaree.jpg" height="150px" width="200px"  />
<img src="pics/large_A3AHIBFSAR566ML1FS-1031-1031-2.jpg" height="150px" width="200px"  />
<img src="pics/original1.320581.3.jpg" height="150px" width="200px"  />
<img src="pics/original1.264342.3.jpg" height="150px" width="200px"  />
<img src="pics/WO_14JAN06MARI20939-06MARI20939B7-06MARI20939P7-12NA060114JWL-5246np.jpg" height="150px" width="200px"  />
<img src="pics/in1348mtoshtgrn-239-front.jpg" height="150px" width="200px"  />
<img src="pics/pri-1386590085_2.jpg" height="150px" width="200px"  />
<img src="pics/original1.407686.2.jpg" height="150px" width="200px"  />
<img src="pics/original1.383515.2.jpg" height="150px" width="200px"  />
<img src="pics/original1.316283.3.jpg" height="150px" width="200px"  />
<img src="pics/Product635246308927792003.jpg" height="150px" width="200px"  />
<img src="pics/zbn1-530x800.jpg" height="150px" width="200px"  /></marquee></td></tr></table>
</div>
<div id="container1">
<div id="mid" >
<div id="menu1">
<a href="index.html"><img src="homebtn.png"  height="50px"/></a>
<a href="product.html"><img src="prodbtn.png" height="50px" /></a>
<a href="about.html"><img src="aboutbtn.png" height="50px"/></a>
<a href="contus.html"><img src="contusbtn.png" height="50px" /></a>
</div>
<h1 id="pro">My Cart</h1>
<form action="ceck.php" method="post">
<table width="500px">
<th>Product Image</th>
<th>Product Name</th>
<th>Quantity</th>
<th>Price</th>
<th>Item price</th>
<?php
$sql= "SELECT * FROM animaldata WHERE ano IN(";
foreach($_SESSION['cart'] as $ano => $value)
{
	$sql.=$ano.",";
}
$sql = substr($sql,0,-1).")";
$query = mysqli_query($conn,$sql);
$totalprice= 0;
while($row = mysqli_fetch_array($query))
{
	$subtotal = $_SESSION['cart'][$row['ano']]['quantity']*$row['aprice'];
	$totalprice+=$subtotal;
	echo "<tr>
	<td><img src='image.php?ano=".$row['ano']."' height='100px' width='80px'/> 
	<td>".$row['aname']."</td>
	<td><input type ='text' name= 'quantity ".$row['ano']."' value=".$_SESSION['cart'][$row['ano']]['quantity']." size=5/></td>
	<td>".$row['aprice']."</td>
	<td>".$_SESSION['cart'][$row['ano']]['quantity']*$row['aprice']."</td>
	</tr>
	<tr>
	<td> Total Amount = ".$totalprice."</td>
	</tr>
	<tr>
	<td><input type='submit' name='submit' value='Go To Check out'>
	";
}

?>
</table>
</form>
<a href='#'>To removie Item put Zero in the quantity section </a>
</div></div>
</body>
</html>