<?php
session_start(); 
if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$_SESSION['username']=$_POST["username"];
		$pswd=$_POST["password"];
		$_SESSION['name']=$_POST["name"];
		if(empty($_POST["username"]) || empty($pswd) || empty($_POST["name"]))
			header("location: login.html");
		else
			header("location: welcome.php");
	}
?>