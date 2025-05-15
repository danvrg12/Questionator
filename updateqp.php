<?php
session_start();
$uqid = $_SESSION['uqid'];
$utb = $_SESSION['utb'];
$mark = $_POST['mark'];
$question = $_POST['question'];
$con = mysqli_connect('localhost:3308', 'root', '12345','questionator');
$sql1 = "UPDATE $utb SET question='$question', mark='$mark', flag=0 WHERE qid='$uqid'";
$rp = mysqli_query($con, $sql1);
echo '<script type="text/javascript">';
if($rp)
	echo ' alert("Question Updated Successfully")';
	echo '</script>';
include 'viewquestion.html';	
?>