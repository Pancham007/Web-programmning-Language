<?php
session_start(); 
if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$username=$_POST["username"];
		$pswd=$_POST["password"];
		if(empty($username) || empty($pswd) )
			header("location: login.html");
	else{
	$servername = "localhost";
	$database = "pw5";
	$conn = mysqli_connect($servername, "root", "root",$database);
	if (!$conn)	{
		die("Connection failed: " . mysqli_connect_error());
	}
	$query = "SELECT * FROM user where username='" . $username . "'";
	$result=mysqli_query($conn, $query);
	$row=mysqli_fetch_array($result);
	echo $row['password'] .  $pswd;
	if($row['password']!= $pswd)
	{
		header("location: login.html");
		exit();
	}
		$_SESSION['username']=$_POST["username"];
		$_SESSION['fullname']=$row["fullname"];
		$_SESSION['avatar']=$row["avatar"];
		header("location: welcome.php");
	}
	}

?>

