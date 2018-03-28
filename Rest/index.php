<?php
    $conn = mysqli_connect("localhost","root","root","pw7") or die("Error " . mysqli_error($connection));

    $sql = "select * from book";
    $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($connection));
	$emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
	$hey=json_encode($emparray,JSON_PRETTY_PRINT);
	printf("<pre>%s</pre>", $hey);
    mysqli_close($connection);
?>