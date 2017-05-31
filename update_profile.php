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
$id = $_SESSION['username'];
$street = mysqli_real_escape_string($link, $_REQUEST['street']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
$zip = mysqli_real_escape_string($link, $_REQUEST['zip']);

 
// attempt insert query execution
$sql = "UPDATE shipping SET street1='$street', city='$city', state='$state', zip_code='$zip' WHERE id='$id'";

if(mysqli_query($link, $sql)){
    echo "Records updated successfully.";
	header("location:account.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

</body>
</html>