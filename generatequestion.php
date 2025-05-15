<?php
session_start();
$scode = $_SESSION['subcode'];

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost:3308', 'root', '12345','questionator');

$year = $_POST['year'];
$table="";
// select database 
if(array_key_exists('addA', $_POST)) 
{
	$chapter = $_POST['chapterA'];
	if($year=="I PU")
	{
		if($chapter==1)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c1 WHERE mark=1 and flag=0 limit 1";
			$table="41_ipu_c1";
		}
		else if($chapter==2)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c2 WHERE mark=1 and flag=0 limit 1";
			$table="41_ipu_c2";
		}
		else if($chapter==3)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c3 WHERE mark=1 and flag=0 limit 1";
			$table="41_ipu_c3";
		}
		else if($chapter==4)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c4 WHERE mark=1 and flag=0 limit 1";
			$table="41_ipu_c4";
		}
		else if($chapter==5)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c5 WHERE mark=1 and flag=0 limit 1";
			$table="41_ipu_c5";
		}
	}
	else if($year=="II PU")
	{
		if($chapter==1)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c1 WHERE mark=1 and flag=0 limit 1";
			$table= "41_iipu_c1";
		}
		else if($chapter==2)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c2 WHERE mark=1 and flag=0 limit 1";
			$table="41_iipu_c2";
		}
		else if($chapter==3)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c3 WHERE mark=1 and flag=0 limit 1";
			$table="41_iipu_c3";
		}
		else if($chapter==4)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c4 WHERE mark=1 and flag=0 limit 1";
			$table="41_iipu_c4";
		}
		else if($chapter==5)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c5 WHERE mark=1 and flag=0 limit 1";
			$table="41_iipu_c5";
		}
	}
	
	$rs = mysqli_query($con, $sql);
	if($rs)
	{
		echo '<script type="text/javascript">';
		while($row = mysqli_fetch_row($rs))
		{	
			$sql = "INSERT INTO `generateqp` (`question`) VALUES ('$row[1]')";
			$sql1 = "UPDATE $table SET flag=1 WHERE qid ='$row[0]'";
			$sql2 = "SELECT qid FROM $table WHERE mark=1 and flag=0";
			$rp = mysqli_query($con, $sql);
			$rp1 = mysqli_query($con, $sql1);
			$rp2 = mysqli_query($con, $sql2);
			$count = mysqli_num_rows($rp2);
			if($rp)
				echo ' alert("Question generated Successfully")';  //not showing an alert box.
				echo '</script>';
			if($count==0)
			{
				echo $count;
				echo "inside";
				$sql3 = "UPDATE $table SET flag=0 WHERE mark=1";
				$rp3 = mysqli_query($con, $sql3);
			}
			
				
		}
		include 'generatequestion.html';	
	}
	
	
}
else if(array_key_exists('addB', $_POST)) 
{
	$chapter = $_POST['chapterB'];
	if($year=="I PU")
	{
		if($chapter==1)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c1 WHERE mark=2 and flag=0 limit 1";
			$table="41_ipu_c1";
		}
		else if($chapter==2)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c2 WHERE mark=2 and flag=0 limit 1";
			$table="41_ipu_c2";
		}
		else if($chapter==3)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c3 WHERE mark=2 and flag=0 limit 1";
			$table="41_ipu_c3";
		}
		else if($chapter==4)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c4 WHERE mark=2 and flag=0 limit 1";
			$table="41_ipu_c4";
		}
		else if($chapter==5)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c5 WHERE mark=2 and flag=0 limit 1";
			$table="41_ipu_c5";
		}
	}
	else if($year=="II PU")
	{
		if($chapter==1)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c1 WHERE mark=2 and flag=0 limit 1";
			$table= "41_iipu_c1";
		}
		else if($chapter==2)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c2 WHERE mark=2 and flag=0 limit 1";
			$table="41_iipu_c2";
		}
		else if($chapter==3)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c3 WHERE mark=2 and flag=0 limit 1";
			$table="41_iipu_c3";
		}
		else if($chapter==4)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c4 WHERE mark=2 and flag=0 limit 1";
			$table="41_iipu_c4";
		}
		else if($chapter==5)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c5 WHERE mark=2 and flag=0 limit 1";
			$table="41_iipu_c5";
		}
	}
	
	$rs = mysqli_query($con, $sql);
	if($rs)
	{
		echo '<script type="text/javascript">';
		while($row = mysqli_fetch_row($rs))
		{	
			$sql = "INSERT INTO `generateqp` (`question`) VALUES ('$row[1]')";
			$sql1 = "UPDATE $table SET flag=1 WHERE qid ='$row[0]'";
			$sql2 = "SELECT qid FROM $table WHERE mark=2 and flag=0";
			$rp = mysqli_query($con, $sql);
			$rp1 = mysqli_query($con, $sql1);
			$rp2 = mysqli_query($con, $sql2);
			$count = mysqli_num_rows($rp2);
			if($rp)
				echo ' alert("Question generated Successfully")';  //not showing an alert box.
				echo '</script>';
			if($count==0)
			{
				$sql3 = "UPDATE $table SET flag=0 WHERE mark=2";
				$rp3 = mysqli_query($con, $sql3);
			}
			
				
		}
		include 'generatequestion.html';	
	}
	
}
else if(array_key_exists('addC', $_POST)) 
{
	$chapter = $_POST['chapterC'];
	if($year=="I PU")
	{
		if($chapter==1)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c1 WHERE mark=3 and flag=0 limit 1";
			$table="41_ipu_c1";
		}
		else if($chapter==2)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c2 WHERE mark=3 and flag=0 limit 1";
			$table="41_ipu_c2";
		}
		else if($chapter==3)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c3 WHERE mark=3 and flag=0 limit 1";
			$table="41_ipu_c3";
		}
		else if($chapter==4)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c4 WHERE mark=3 and flag=0 limit 1";
			$table="41_ipu_c4";
		}
		else if($chapter==5)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c5 WHERE mark=3 and flag=0 limit 1";
			$table="41_ipu_c5";
		}
	}
	else if($year=="II PU")
	{
		if($chapter==1)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c1 WHERE mark=3 and flag=0 limit 1";
			$table= "41_iipu_c1";
		}
		else if($chapter==2)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c2 WHERE mark=3 and flag=0 limit 1";
			$table="41_iipu_c2";
		}
		else if($chapter==3)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c3 WHERE mark=3 and flag=0 limit 1";
			$table="41_iipu_c3";
		}
		else if($chapter==4)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c4 WHERE mark=3 and flag=0 limit 1";
			$table="41_iipu_c4";
		}
		else if($chapter==5)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c5 WHERE mark=3 and flag=0 limit 1";
			$table="41_iipu_c5";
		}
	}
	
	$rs = mysqli_query($con, $sql);
	if($rs)
	{
		echo '<script type="text/javascript">';
		while($row = mysqli_fetch_row($rs))
		{	
			$sql = "INSERT INTO `generateqp` (`question`) VALUES ('$row[1]')";
			$sql1 = "UPDATE $table SET flag=1 WHERE qid ='$row[0]'";
			$sql2 = "SELECT qid FROM $table WHERE mark=3 and flag=0";
			$rp = mysqli_query($con, $sql);
			$rp1 = mysqli_query($con, $sql1);
			$rp2 = mysqli_query($con, $sql2);
			$count = mysqli_num_rows($rp2);
			if($rp)
				echo ' alert("Question generated Successfully")';  //not showing an alert box.
				echo '</script>';
			if($count==0)
			{
				$sql3 = "UPDATE $table SET flag=0 WHERE mark=3";
				$rp3 = mysqli_query($con, $sql3);
			}
			
				
		}
		include 'generatequestion.html';	
	}
}
else if(array_key_exists('addD', $_POST)) 
{
	$chapter = $_POST['chapterD'];
	if($year=="I PU")
	{
		if($chapter==1)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c1 WHERE mark=5 and flag=0 limit 1";
			$table="41_ipu_c1";
		}
		else if($chapter==2)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c2 WHERE mark=5 and flag=0 limit 1";
			$table="41_ipu_c2";
		}
		else if($chapter==3)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c3 WHERE mark=5 and flag=0 limit 1";
			$table="41_ipu_c3";
		}
		else if($chapter==4)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c4 WHERE mark=5 and flag=0 limit 1";
			$table="41_ipu_c4";
		}
		else if($chapter==5)
		{
			$sql = "SELECT  qid, question FROM 41_ipu_c5 WHERE mark=5 and flag=0 limit 1";
			$table="41_ipu_c5";
		}
	}
	else if($year=="II PU")
	{
		if($chapter==1)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c1 WHERE mark=5 and flag=0 limit 1";
			$table= "41_iipu_c1";
		}
		else if($chapter==2)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c2 WHERE mark=5 and flag=0 limit 1";
			$table="41_iipu_c2";
		}
		else if($chapter==3)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c3 WHERE mark=5 and flag=0 limit 1";
			$table="41_iipu_c3";
		}
		else if($chapter==4)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c4 WHERE mark=5 and flag=0 limit 1";
			$table="41_iipu_c4";
		}
		else if($chapter==5)
		{
			$sql = "SELECT  qid, question FROM 41_iipu_c5 WHERE mark=5 and flag=0 limit 1";
			$table="41_iipu_c5";
		}
	}
	
	$rs = mysqli_query($con, $sql);
	if($rs)
	{
		echo '<script type="text/javascript">';
		while($row = mysqli_fetch_row($rs))
		{	
			$sql = "INSERT INTO `generateqp` (`question`) VALUES ('$row[1]')";
			$sql1 = "UPDATE $table SET flag=1 WHERE qid ='$row[0]'";
			$sql2 = "SELECT qid FROM $table WHERE mark=5 and flag=0";
			$rp = mysqli_query($con, $sql);
			$rp1 = mysqli_query($con, $sql1);
			$rp2 = mysqli_query($con, $sql2);
			$count = mysqli_num_rows($rp2);
			if($rp)
				echo ' alert("Question generated Successfully")';  //not showing an alert box.
				echo '</script>';
			if($count==0)
			{
				$sql3 = "UPDATE $table SET flag=0 WHERE mark=5";
				$rp3 = mysqli_query($con, $sql3);
			}
			
				
		}
		include 'generatequestion.html';	
	}
}

?>