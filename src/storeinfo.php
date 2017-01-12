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
$aname = $_POST['aname'];
$aprice = $_POST['aprice'];
$adetails = $_POST['adetails'];
$adetails1 = $_POST['adetails1'];
$acat = $_POST['acat'];
$asubcat = $_POST['asubcat'];
$aphoto = addslashes (file_get_contents($_FILES['aphoto']['tmp_name']));
$azoompic = addslashes (file_get_contents($_FILES['azoompic']['tmp_name']));
$image = getimagesize($_FILES['aphoto']['tmp_name']);//to know about image type etc

$imgtype = $image['mime'];

$q ="INSERT INTO animaldata VALUES('','$aname','$aprice','$adetails','$adetails1','$acat','$asubcat','$aphoto','$azoompic','$imgtype')";

$r = mysqli_query($conn,"$q");
if($r)
{
echo "Information stored successfully";
}
else
{
echo mysqli_error();
}


?>