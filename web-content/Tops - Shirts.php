<?php
//show information
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
<a href="home.php"><img src="homebtn.png"  height="50px"/></a>
<a href="product.php"><img src="prodbtn.png" height="50px" /></a>
<a href="about.php"><img src="aboutbtn.png" height="50px"/></a>
<a href="contus.php"><img src="contusbtn.png" height="50px" /></a>
</div>
<h1 id="pro">Dresses</h1>
<div id="items">
<?php 
$q = "SELECT * FROM animaldata WHERE asubcat = 'tops'";
$r = mysqli_query($conn,"$q");
if($r)
{
while($row=mysqli_fetch_array($r))
{
//header("Content-type: text/html");
echo "<div class='flip3D'>";
echo "<div class='back'><a href='prdinfo.php?ano=".$row['ano']."'><p id='prc'>".$row['aprice']."</p>";
echo "<p id='buy'>Buy</p>";
echo "<h2 id='mtr'>".$row['aname']."</h2>";
echo "<p>".$row['adetails']."</p><p id='tx'>".$row['adetails1']."</p></a></div>";
echo  "<div class='front'><img src=image.php?ano=".$row['ano']." alt='gldimg' height='320px' width='250px' /></div></div>";


}
}
else
{
echo mysqli_error();
}
?>
</div>
</div>
</div>
</div>
<div id="footer">ALL Rights Received From TRENDS
<h2 id="ftcrt">Created By:<br />
    Yalavarthy sowjanya<br />
    Laxmi Deepa
    </h2>
    </div>
</body>
