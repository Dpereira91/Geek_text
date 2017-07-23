<html>
<body>

<?php include("header.php"); ?>
<?php include("insert_account_helper.php"); ?>

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
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$nickname = mysqli_real_escape_string($link, $_REQUEST['nickname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$street1 = mysqli_real_escape_string($link, $_REQUEST['street1']);
$street2 = mysqli_real_escape_string($link, $_REQUEST['street2']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
$zip = mysqli_real_escape_string($link, $_REQUEST['zip']);


$invalidInput = false;

//input validation

foreach ($_REQUEST as $key => $value) {
	if ($key == "street2" || $key == "confirm-pw"){
		;
	} else if (strlen($value) == 0){
		echo "$key is empty<br>";
		$invalidInput = true;
	} elseif (!validateInput($key, $value)){
		echo "$key has invalid value $value<br>";
		$invalidInput = true;
	}
}

$pass = crypt($pass, 'geek');

if ($invalidInput){
	echo "Invalid input. Cannot insert values in database <br>";
}
else{
	$sql = "SELECT * FROM user WHERE id='$id'";
	$result=mysqli_query($link, $sql);

	// Mysql_num_row is counting table row
	$count=mysqli_num_rows($result);

	// If result matched $username and $password, table row must be 1 row
	if($count == 0)
	{
		// attempt insert query execution
		$sql = "INSERT INTO user(id, password, name, nickname, email, street1, street2, city, state, zip_code, 
			short_zip_code) VALUES ('$id', '$pass', '$name', '$nickname', '$email', '$street1', '$street2', '$city',
			'$state', '$zip', 'null')";
		if(mysqli_query($link, $sql)){
			$_SESSION['username'] = $id;
 			$_SESSION['password'] = $pass;
			header("location:index.php");
			//echo "Records added successfully.";
		}
		else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
		
		$sql = "INSERT INTO shipping VALUES ('$id', NULL, '1', '$street1', '$street2', '$city', '$state', '$zip', 'NULL')";
		if(mysqli_query($link, $sql)){
			//echo "Records added successfully.";
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
	}

?>

</body>
</html>