<html>
<body>

<?php include("header.php"); ?>

<br></br>

<?php

include("header.php");

// Attempt MySQL server connection
$link = mysqli_connect("localhost", "root", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$db = mysqli_real_escape_string($link, $_REQUEST['database']);

// Attempt create database query execution
$sql = "CREATE DATABASE $db";
if(mysqli_query($link, $sql)){
    echo "Database created successfully";
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

</body>
</html>