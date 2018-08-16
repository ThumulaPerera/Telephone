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
?>