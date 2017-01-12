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
$username = $_POST['username'];
$password = $_POST['password'];
$q ="INSERT INTO users VALUES('','$username','$password')";
$r = mysqli_query($conn,"$q");
if($r)
{
header("location: home.php");
}
else
{
echo mysqli_error();
}
