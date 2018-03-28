<?php
session_start(); 
if( isset($_SESSION['username']) )
{
	echo("Welcome user " .$_SESSION['fullname']);
	echo("<br>");
	echo("<img src='img/" . $_SESSION['avatar'] . "' />");
	echo("<br>");
	$username=$_SESSION['username'];
	$servername = "localhost";
	$database=pw5;
	$conn = mysqli_connect($servername, "root", "root",$database);
	
	if (!$conn)	{
		die("Connection failed: " . mysqli_connect_error());
	}
	$query = "SELECT * FROM favoritebooks where username='" . $username . "'";
	$result=mysqli_query($conn, $query);
	echo("The favorite books of " .$_SESSION['username']. " are ");
	echo "<ul>";
	while($row=mysqli_fetch_array($result))	{
		echo("<li>" .$row['booktitle'] . "</li>");	
	}
	echo "</ul>";
	
}
else
	header("location: login.html");
?>