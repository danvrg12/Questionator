<?php
session_start();
$scode = $_SESSION['subcode'];



$con = mysqli_connect('localhost:3308', 'root', '12345','questionator');
// get the post records
$year = $_POST['year'];
$chapter = $_POST['chapter'];
$mark = $_POST['mark'];
$question = $_POST['question'];
$flag=0;
// database insert SQL code
if($scode==41 and $year=="I PU")
{
	if($chapter==1)
	{
		$sql = "INSERT INTO `41_ipu_c1` (`qid`,`question`,`mark`, `flag`) VALUES ('', '$question', '$mark', '$flag')";
	}
	else if($chapter==2)
	{
		$sql = "INSERT INTO `41_ipu_c2` (`qid`,`question`,`mark`, `flag`) VALUES ('', '$question', '$mark', '$flag')";
	}
	else if($chapter==3)
	{
		$sql = "INSERT INTO `41_ipu_c3` (`qid`,`question`,`mark`, `flag`) VALUES ('', '$question', '$mark', '$flag')";
	}
	else if($chapter==4)
	{
		$sql = "INSERT INTO `41_ipu_c4` (`qid`,`question`,`mark`, `flag`) VALUES ('', '$question', '$mark', '$flag')";
	}
	else if($chapter==5)
	{
		$sql = "INSERT INTO `41_ipu_c5` (`qid`,`question`,`mark`, `flag`) VALUES ('', '$question', '$mark', '$flag')";
	}
	
}
else if($scode==41 and $year=="II PU")
{

	if($chapter==1)
	{
		$sql = "INSERT INTO `41_iipu_c1` (`qid`,`question`,`mark`, `flag`) VALUES ('', '$question', '$mark', '$flag')";
	}
	else if($chapter==2)
	{
		$sql = "INSERT INTO `41_iipu_c2` (`qid`,`question`,`mark`, `flag`) VALUES ('', '$question', '$mark', '$flag')";
	}
	else if($chapter==3)
	{
		$sql = "INSERT INTO `41_iipu_c3` (`qid`,`question`,`mark`, `flag`) VALUES ('', '$question', '$mark', '$flag')";
	}
	else if($chapter==4)
	{
		$sql = "INSERT INTO `41_iipu_c4` (`qid`,`question`,`mark`, `flag`) VALUES ('', '$question', '$mark', '$flag')";
	}
	else if($chapter==5)
	{
		$sql = "INSERT INTO `41_iipu_c5` (`qid`,`question`,`mark`, `flag`) VALUES ('', '$question', '$mark', '$flag')";
	}
	
}
else
{
    echo '<script type="text/javascript">';
	echo ' alert("Select correct year and chapter")';  //not showing an alert box.
	echo '</script>';
	include 'edulogin.html';
}


// select database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo '<script type="text/javascript">';
	echo ' alert("Question Saved Successfully")';  //not showing an alert box.
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