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
$ano = $_GET['ano'];
$q = "SELECT aphoto,aphototype FROM animaldata where ano='$ano'";
$r = mysqli_query($conn,"$q");
if($r)
{

$row = mysqli_fetch_array($r);
$type = "Content-type: ".$row['aphototype'];
header($type);
echo $row['aphoto'];
}
else
{
echo mysqli_error();
}

?>