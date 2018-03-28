<?php
session_start(); 
if( isset($_SESSION['username']) || isset($_SESSION['name']))
	echo("Welcome " .$_SESSION['name'] ." your username is " .$_SESSION['username']);
else
	header("location: login.html");
?>