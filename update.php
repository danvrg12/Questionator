<?php
session_start();
$id=$_GET['id'];
$table=$_GET['table'];
$question=$_GET['question'];
$_SESSION['uqid'] = $id;
$_SESSION['utb'] = $table;
echo "<fieldset> <legend>Update Question</legend> <form name='updatequestion' method='post' action='updateqp.php'> <table cellpadding='5' cellspacing='5'>";
echo "<tr><td>Selected Question</td> <td><textarea id='mytextarea' name='question'>"; echo $question; echo"</textarea></td>";
echo "<td>Marks</td><td><select name='mark'><option>1</option><option>2</option><option>3</option><option>5</option></td>";
echo " <td><input type='submit' name='Submit' id='Submit' value='Update'></td> <td><input type='reset' name='Reset' id='Reset' value='Reset'></td> <td><a href='edulogin.html' class='nav-item nav-link active'>Home</a></td>";
echo "</tr> </form> </fieldset>";
?>