<?php

include "connect.php";

if (isset($_POST['search_button'])) {
	$name=$_POST['search_name'];

	if (empty($name)) {
		$searh_err="Please enter name";

	}
	else{
		$sql="select * from details where name='$name'";
		$data=mysqli_query($con,$sql);
		echo $data['name'] . $data['number'];

	}
}

?>