<?php

require "connect.php";

$get_data = "SELECT * FROM details";
$data = mysqli_query($con, $get_data);

while($row= mysqli_fetch_array($data)){
	echo "<tr><td>";
	echo $row['name'];
	echo "</td><td>";
	echo $row['number'];
	echo "</td></tr>";
}
?>