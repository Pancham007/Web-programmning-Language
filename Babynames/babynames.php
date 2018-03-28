<?php
$t=$_GET["year"];
$j=$_GET["gender"];
$servername = "localhost";
$dbname = "hw3";
$con = mysqli_connect($servername, "root", "root",$dbname);
if (!$con)
{
		die("Connection failed: " . mysqli_connect_error());
}
if($t=="" && $j=="")
{
	$sql="SELECT * FROM babynames";
}
elseif($t=="" && $j!="")
{
	$sql="SELECT * FROM babynames WHERE gender='".$j."'";
}
elseif($t!="" && $j=="")
{
	$sql="SELECT * FROM babynames WHERE year='".$t."'";
}
elseif($t!="" && $j!="")
{
$sql="SELECT * FROM babynames WHERE  gender='".$j."' AND year='".$t."'";
}
$result = mysqli_query($con,$sql);
echo "<h3>THE SEARCH RESULT IS</h3>";
echo "<table border='3'>
<tr>
<th>NAME</th>
<th>YEAR</th>
<th>Ranking</th>
<th>GENDER</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['year'] . "</td>";
  echo "<td>" . $row['ranking'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
?>