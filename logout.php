<?php
session_start();
    echo '<script type="text/javascript">';
	echo ' alert("Sucessfully Loged Out")';  //not showing an alert box.
	echo '</script>';
	unset($_SESSION['subcode']);
	unset($_SESSION['uid']);
	unset($_SESSION['pwd']);
	include 'home.html';
?>