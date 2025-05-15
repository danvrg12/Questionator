<?php
session_start();
$scode = $_SESSION['subcode'];
$con = mysqli_connect('localhost:3308', 'root', '12345','questionator');
// get the post records
$userid = $_POST['userid'];

// database insert SQL code

$sql = "DELETE FROM user WHERE `uid`=$userid";
	
// select database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo '<script type="text/javascript">';
	echo ' alert("Educator Removed Sucessfully")';  //not showing an alert box.
	echo '</script>';
	include 'adminlogin.html';
}
else
{
    echo '<script type="text/javascript">';
	echo ' alert("Not Sucessfull")';  //not showing an alert box.
	echo '</script>';
	include 'adminlogin.html';
}


?>