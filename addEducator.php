<?php
session_start();
$scode = $_SESSION['subcode'];



$con = mysqli_connect('localhost:3308', 'root', '12345','questionator');
// get the post records
$userid = $_POST['userid'];
$password = $_POST['password'];
$subjectcode = $_POST['subjectcode'];

// database insert SQL code

$sql = "INSERT INTO `users` (`uid`,`password`,`subcode`) VALUES ('$userid', '$password', '$subjectcode')";
	
// select database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo '<script type="text/javascript">';
	echo ' alert("Educator Added Sucessfully")';  //not showing an alert box.
	echo '</script>';
	include 'edulogin.html';
}
else
{
    echo '<script type="text/javascript">';
	echo ' alert("Not Sucessfull")';  //not showing an alert box.
	echo '</script>';
	include 'edulogin.html';
}


?>