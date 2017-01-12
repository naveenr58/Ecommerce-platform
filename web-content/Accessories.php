<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();

if(isset($_SESSION["manager"]))
{
	$usr = $_SESSION['manager'];
	
	
	
}
else{
	header("location:Accessories1.php");
}
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="main.css" rel="stylesheet" type="text/css" />
<title>Products|Trendz</title>
</head>
<body>
<div id="top"><a href="logout.php">LOG OUT   </a>  <?php echo $usr?></div>
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
<div id="container4">
<div id="bgm"><img src="FreeGreatPicture.com-13945-fashion-illustration-women-wallpapers.jpg" /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br />
<img src="f6e8e42ce38e2901598f59b31ba043eb_large.jpeg" /><br />
</div>
<div id="bgm1"><img src="FreeGreatPicture.com-15053-fashion-illustration-women-wallpapers.jpg" /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<img src="FreeGreatPicture.com-16029-fashion-illustration-women-wallpapers (1).jpg" />
</div>
<div id="mid1" >
<div id="menu1">
<a href="home.php"><img src="homebtn.png"  height="50px"/></a>
<a href="product.php"><img src="prodbtn.png" height="50px" /></a>
<a href="about.php"><img src="aboutbtn.png" height="50px"/></a>
<a href="contus.php"><img src="contusbtn.png" height="50px" /></a>
</div>
<h1 id="pro">Products</h1>
<div id="items">
<div class="flip3D">
<h2>Bags-Wallets</h2>
  <div class="back">
<a href="Bags-Wallets.php"><img src="imgs/46.jpg" height="320px" width="250px" /></a></div>
  <div class="front">
  <a href="Bags-Wallets.php">
  <img src="imgs/46.jpg" height="320px" width="250px" /></a></div>
</div>
<div class="flip3D">
<h2>Watches</h2>
  <div class="back">
 <a href="Watches.php"> <img src="imgs/49.jpg" height="320px" width="250px"  /></a>
</div>
  <div class="front"><a href="Watches.php"><img src="imgs/49.jpg" height="320px" width="250px" /></a></div>
</div>
<div class="flip3D">
<h2>Jewellery</h2>
  <div class="back"><a href="Jewellery.php"><img src="imgs/52.jpg" height="320px" width="250px" /></a></div>
  <div class="front"><a href="Jewellery.php"><img src="imgs/52.jpg" height="320px" width="250px" /></a></div>
</div>
</div><br /><br />
<div id="items">
<br /><br />
<div class="flip3D">
<h2>Sunglasses</h2>
  <div class="back">
<a href="Sunglasses.php"><img src="imgs/55.jpg" height="320px" width="250px" /></a></div>
  <div class="front"><a href="Sunglasses.php"><img src="imgs/55.jpg" height="320px" width="250px" /></a></div>
</div>

<div class="flip3D">
<h2>Hair-Accesories</h2>
  <div class="back">
<a href="Hair-Accesories.php"><img src="imgs/58.JPG" height="320px" width="250px" />
</a></div>
  <div class="front"><a href="Hair-Accesories.php">
  <img src="imgs/58.JPG" height="320px" width="250px" /></a></div>
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
</html>
