<html>
<body>

<?php include("header.php"); ?>

<br></br>

<?php

//Attempt MySQL server connection
$link = mysqli_connect("localhost", "root", "", "");
if($link === false)
    die("ERROR: Could not connect. " . mysqli_connect_error());

$database = mysqli_real_escape_string($link, $_REQUEST['db_name']);

mysqli_close($link);

$link = mysqli_connect("localhost", "root", "", "$database");
if($link === false)
    die("ERROR: Could not connect. " . mysqli_connect_error());

$table = mysqli_real_escape_string($link, $_REQUEST['table']);
$attr = mysqli_real_escape_string($link, $_REQUEST['values']);

//Attempt create table query execution
$sql = "DROP TABLE IF EXISTS $table;";
if(mysqli_query($link, $sql)){
    echo "Table dropped successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$sql = "CREATE TABLE $table($attr)";
if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
//Close connection
mysqli_close($link);
?>

</body>
</html>