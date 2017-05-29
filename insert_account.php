<html>
<body>

<?php include("header.php"); ?>

<br></br>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "geek_text");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$pass = mysqli_real_escape_string($link, $_REQUEST['pw']);

$sql = "SELECT * FROM users WHERE id='$id'";
$result=mysqli_query($link, $sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($count==0)
{
	// attempt insert query execution
	$sql = "INSERT INTO user(id, password) VALUES ('$id', '$pass')";
	if(mysqli_query($link, $sql)){
		echo "Records added successfully.";
	}
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
}
else{
	echo "ERROR: user id already in use";
}
 
// close connection
mysqli_close($link);
?>

</body>
</html>