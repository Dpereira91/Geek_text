<html>

test
<body>

<?php include("header.php"); ?>

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

 
// attempt insert query execution
$sql = "SELECT * FROM user WHERE id='$id'";
$result=mysqli_query($link, $sql);
$count=mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
$password = $row['password'];

if ($count > 0){
	$verify = password_verify($pass , $password);
	echo ("verify is " . $verify);

	if ($verify){

	   $_SESSION['username'] = $id;
	   $_SESSION['password'] = $pass;
	   header("location:index.php");
	}

	else 
	{
	   header("location:sign_in.php");
	}
} else {
	header("location:sign_in.php");
	//echo ("user does not exist");
}


// close connection
mysqli_close($link);
?>

</body>
</html>