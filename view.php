<?php
$servername="localhost";
$username="root";
$password="";
$dbname="contact_details";

//create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con){
	die("connection failed: " . mysql_connect_error());
}

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