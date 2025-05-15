<?php
session_start();
$table=$_GET['table'];
$con = mysqli_connect('localhost:3308', 'root', '12345','questionator');
// get the post records
$id=$_GET['id'];
$sql = "DELETE FROM $table WHERE qid='$id'"; 
$rp = mysqli_query($con, $sql);
echo '<script type="text/javascript">';
if($rp)
	echo ' alert("Question Deleted Successfully")';  //not showing an alert box.
echo '</script>';
include 'viewquestion.html';	
?>