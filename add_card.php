<html>
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
$id = $_SESSION['username'];
$cardNumber = mysqli_real_escape_string($link, $_REQUEST['card_num']);
$cardCvv = mysqli_real_escape_string($link, $_REQUEST['cvv_num']);
$cardStreet = mysqli_real_escape_string($link, $_REQUEST['card_street']);
$cardCity = mysqli_real_escape_string($link, $_REQUEST['card_city']);
$cardState = mysqli_real_escape_string($link, $_REQUEST['card_state']);
$cardZip= mysqli_real_escape_string($link, $_REQUEST['card_zip']);
$cardType= mysqli_real_escape_string($link, $_REQUEST['card_type']);
$cardExpMonth= mysqli_real_escape_string($link, $_REQUEST['exp_month']);
$cardExpYear= mysqli_real_escape_string($link, $_REQUEST['exp_year']);


$invalidInput = false;
//input validation
// foreach ($_REQUEST as $key => $value) {
// 	if (strlen($value) == 0){
// 		echo "$key is empty<br>";
// 		$invalidInput = true;
// 	} elseif (!validateInput($key, $value)){
// 		echo "$key has invalid value $value<br>";
// 		$invalidInput = true;
// 	}
// }


if ($invalidInput){
	echo "Invalid input. Cannot insert values in database <br>";
}
else{
	$sql = "SELECT * FROM credit_card WHERE id='$id' and number = '$cardNumber'";
	$result=mysqli_query($link, $sql);
	// Mysql_num_row is counting table row
	$count=mysqli_num_rows($result);
	// If result matched $username and $password, table row must be 1 row
	if($count == 0)
	{
		// attempt insert query execution
		$sql = "INSERT INTO credit_card(id, number, preferred, type, csv_code, exp_month, exp_year, billing_street1, billing_street2, 
			billing_city, billing_state, billing_zip_code, billing_short_zip_code) VALUES ('$id', '$cardNumber', 'N',
			 '$cardType', '$cardCvv', '$cardExpMonth', '$cardExpYear' ,'$cardStreet', 'null', '$cardCity', '$cardState',
			'$cardZip', 'null')";
		if(mysqli_query($link, $sql)){
			//echo "Records added successfully.";
			header("location:account.php");
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