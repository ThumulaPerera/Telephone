<?php
$name = $tp = "";
$nameErr = $tpErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["name"])){
            $nameErr = "* Name is required";
        }else{
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z. ]*$/",$name)){
                $nameErr = "* Invalid character/s in name";
                $name = "";
            }
        }
        
        if (empty($_POST["tp"])){
            $tpErr = "* Contact number is required";
        }else{
            $tp = test_input($_POST["tp"]);
            if (!preg_match("/^[0-9+ ]*$/",$tp)){
                $tpErr = "* Invalid contact number";
                $tp = "";
            }
            
        }
    
    
    if (!empty($name) and !empty($tp)){
        
        require "connect.php";

        if (!$con){
            die("connection failed: " . mysql_connect_error());
        }

        $sql = "INSERT INTO details(name,number) VALUES('$name', '$tp')";

        if (mysqli_query($con, $sql)) {
            $_SESSION["ins_name"] = $name;
            $_SESSION["ins_number"] = $tp;
            header('Location: inserted.html');
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }

        mysqli_close($con);
    }
    
            
}

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
?> 