<html>
<body>

<?php include("header.php"); ?>

<br></br>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "geek_text");
$id = $_SESSION['username'];
$sql = "SELECT * FROM user WHERE id='$id'";
$result=mysqli_query($link, $sql);

$deleteSql = "DELETE FROM user WHERE id='$id'";
$result2=mysqli_query($link, $deleteSql);

if(mysqli_query($link, $deleteSql)){
	echo "Account deleted successfully.";
	session_destroy();
	echo "<script type='text/javascript'>
	alert('Your user account was deleted successfully. Redirecting to home page.'); 
	window.location = './home.php';
	</script>";
}
else{
	echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}




// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// close connection
mysqli_close($link);

?>

</body>
</html>