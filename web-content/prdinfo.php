<?php
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
<script type="text/javascript" src="easyzoom.min.js"></script>
<script type="text/javascript" src="googleapi.js"></script>
<script type="text/javascript" src="easyzoom.js"></script>
<script type="text/javascript">
	
jQuery(function($){
	
	$('a.zoom').easyZoom();

});

</script>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<style>



#easy_zoom{
	width:600px;
	height:500px;	
	border:5px solid #eee;
	background:#fff;
	color:#333;
	position:absolute;
	top:100px;
	left:600px;
	overflow:hidden;
	-moz-box-shadow:0 0 10px #777;
	-webkit-box-shadow:0 0 10px #777;
	box-shadow:0 0 10px #777;
	line-height:400px;
	text-align:center;
	}

</style>

</head>
<body>
<div id="top"><a href="cart.php?$_SESSION['cart']">View Cart</a></div>
<div id="wrapper">
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
<div id="container5">
<div id="mid2" >
<div id="menu1">
<a href="home.php"><img src="homebtn.png"  height="50px"/></a>
<a href="product.php"><img src="prodbtn.png" height="50px" /></a>
<a href="about.php"><img src="aboutbtn.png" height="50px"/></a>
<a href="contus.php"><img src="contusbtn.png" height="50px" /></a>
</div>
<div id="prdinfo">

<div id="prdinfo_img">
<?php
if(isset($_GET['ano']))
{
	$id = preg_replace('#[^A-za-z0-9]#i',"",$_GET['ano']);
	$sql = mysqli_query($conn,"SELECT * FROM animaldata WHERE ano = '$id' LIMIT 1");
	$prdcnt = mysqli_num_rows($sql);
	if($prdcnt > 0)
	{
		while($row = mysqli_fetch_array($sql))
		{
			echo "<div id='prdinfo'>";
            echo "<div id='prdinfo_img'>";
			echo "<p><a href='Zoomimg.php?ano=".$row['ano']." ' class='zoom'><img src='image.php?ano=".$row['ano']."' height='400px' width='350px'/>                   </a></p></div>";
			echo "<div id='prdinfo_det'>
             <h1 style='color:red'>".$row['aname']."</h1>
               <h3>Rs".$row['aprice']."</h3>
                <br /><br>
             <form id='form1' name='form1' method='post' action='cart.php?ano=".$row['ano']."'>
			 <input type='radio' id='radio1' name='radios' value='all' checked>
               <label for='radio1'>S</label>
                 <input type='radio' id='radio2' name='radios'value='false'>
             <label for='radio2'>M</label>
                <input type='radio' id='radio3' name='radios' value='true'>
                         <label for='radio3'>L</label>
						 <input type='radio' id='radio4' name='radios'value='false'>
                         <label for='radio2'>XL</label>
						 <input type='radio' id='radio5' name='radios'value='false'>
                           <label for='radio2'>XXL</label><br><br><br>
			 <input type='hidden' name='ano' id='ano' value=".$row['ano'].">
			 <h1><input type='submit' name='button' id='button' value='ADD TO CART'></h1>
			 </form>
			  </a>
               <br />
              <div id='det'><h3>Details</h3>".$row['adetails']."</div>
			  <div id='det1'><h3>More</h3>".$row['adetails1']."</div>
               </div> 
              </div>";
			
		}
}
}
?>

</div></div>
<div id="footer">ALL Rights Received From TRENDS
<h2 id="ftcrt">Created By:<br />
    Yalavarthy sowjanya<br />
    Laxmi Deepa
    </h2>
    </div>
</body></html>


