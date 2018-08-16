<?php

include "connect.php";
$_SESSION["con_name"] = $_SESSION["con_number"] = "";
$searchErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name=$_POST['search_name'];

	if (empty($name)) {
		$searchErr="*Please enter name";
	}

	else{

		$sql="select * from details where name='$name'";

		$data=mysqli_query($con,$sql);
        $row= mysqli_fetch_array($data);
                        
        if(empty($row['number'])){
            $searchErr = "*No contact found";    
        }else{
            $_SESSION["con_name"] = $row['name'];
            $_SESSION["con_number"] = $row['number'];
            header('Location: search_results.html');
        }
            
     }
}
?>