<?php
session_start();
$con = mysqli_connect('localhost:3308', 'root', '12345','questionator');

// get the post records
if(isset($_POST['userid']))
{
	$userid = $_POST['userid'];
	echo $userid;
}
if(isset($_POST['password']))
{
	$password = $_POST['password'];
	echo $password;
}

// database select SQL code
$sql = "SELECT  subcode FROM user WHERE uid='$userid' and password='$password'";

// select database 
$rs = mysqli_query($con, $sql);
$_SESSION['uid'] = $userid;
$_SESSION['pwd'] = $password;
if($rs)
{
	$result=mysqli_fetch_row($rs);
	$_SESSION['subcode'] = $result[0];
	if($userid==1)
	{
		include 'adminlogin.html';
	}

	else
	{
		include 'edulogin.html';
	}
}
//not working
else
{
    echo '<script type="text/javascript">';
	echo ' alert("Invalid Login Details")';  //not showing an alert box.
	echo '</script>';
	include 'home.html';
}
?>