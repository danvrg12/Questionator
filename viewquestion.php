<?php
session_start();
$scode = $_SESSION['subcode'];

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost:3308', 'root', '12345','questionator');
// get the post records
$year = $_POST['year'];
$chapter = $_POST['chapter'];
$sql="";
$table="";
// database insert SQL code
if($scode==41 and $year=="I PU")
{
	if($chapter==1)
	{
		$sql = "SELECT qid,question,mark FROM 41_ipu_c1";
		$table="41_ipu_c1";
	}	 
	else if($chapter==2)
	{
		$sql = "SELECT `qid`,`question`,`mark` FROM `41_ipu_c2`";
		$table="41_ipu_c2";
	}
	else if($chapter==3)
	{
		$sql = "SELECT `qid`,`question`,`mark` FROM `41_ipu_c3`";
		$table="41_ipu_c3";
	}
	else if($chapter==4)
	{
		$sql = "SELECT `qid`,`question`,`mark` FROM `41_ipu_c4`";
		$table="41_ipu_c4";
	}
	else if($chapter==5)
	{
		$sql = "SELECT `qid`,`question`,`mark` FROM `41_ipu_c5`";
		$table="41_ipu_c5";
	}
}
else if($scode==41 and $year=="II PU")
{
	if($chapter==1)
	{
		$sql = "SELECT qid, question, mark FROM `41_iipu_c1`";
		$table="41_iipu_c1";
	}	 
	else if($chapter==2)
	{
		$sql = "SELECT `qid`,`question`,`mark` FROM `41_iipu_c2`";
		$table="41_iipu_c2";
	}
	else if($chapter==3)
	{
		$sql = "SELECT `qid`,`question`,`mark` FROM `41_iipu_c3`";
		$table="41_iipu_c3";
	}
	else if($chapter==4)
	{
		$sql = "SELECT `qid`,`question`,`mark` FROM `41_iipu_c4`";
		$table="41_iipu_c4";
	}
	else if($chapter==5)
	{
		$sql = "SELECT `qid`,`question`,`mark` FROM `41_iipu_c5`";
		$table="41_iipu_c5";
	}
}
else
{
    echo '<script type="text/javascript">';
	echo ' alert("Select correct year and chapter")';  //not showing an alert box.
	echo '</script>';
	include 'edulogin.html';
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Questionator</title>
</head>

<body>
<fieldset>
<legend>View Questions</legend>
<?php
$rs = mysqli_query($con, $sql);
$i=1;
if($rs)
{
	echo"<a href='viewquestion.html' class='nav-item nav-link active'>View Question</a>";
	echo "<p align=center size=10><b> YEAR: $year  &nbsp &nbsp &nbsp &nbsp CHAPTER: $chapter </b></p>";
	echo "<table border='1' align=center>"; 
	echo "<tr><th>QNO</th> <th>QUESTION</th> <th>MARKS</th> <th>UPDATE</th> <th>DELETE</th> </tr>";
	while($row = mysqli_fetch_array($rs,MYSQLI_NUM))
	{
		echo "<tr><td align='center'>$i</td><td>$row[1]</td><td align='center'>$row[2]</td><td align='center'><a href='update.php?id=$row[0] &table=$table &question=$row[1]'>update</a></td><td align='center'><a href='delete.php?id=$row[0] &table=$table'>delete</a></td></tr>";
		$i=$i+1;
	}
	echo"</table>";
}





else
{
    echo '<script type="text/javascript">';
	echo ' alert("Not Sucessfull")';  //not showing an alert box.
	echo '</script>';
	include 'edulogin.html';
}
?>
</fieldset>
</body>
</html>
