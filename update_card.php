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


echo "<div class='container'><br><br><br><br><br>" ;
foreach ($_REQUEST as $key => $value) {
		echo "$key value $value<br>";
}
echo "</div>";
 
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
$preferred= mysqli_real_escape_string($link, $_REQUEST['preferred']);


if ($preferred != "Y" && $preferred != "N"){
	$preferred = "N";
}


if ($_POST['action']=='remove'){
	$sql = "DELETE FROM credit_card WHERE id='$id' and number = '$cardNumber'";

		if(mysqli_query($link, $sql)){
			header("location:account.php");
		}
		else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
	}


if ($_POST['action']=='save'){

	echo "$preferred";
$sql = "UPDATE credit_card SET preferred = '$preferred', type = '$cardType', 
	csv_code = '$cardCvv', exp_month = '$cardExpMonth', exp_year = '$cardExpYear', billing_street1 = '$cardStreet',
	billing_city = '$cardCity', billing_state = '$cardState' , billing_zip_code = '$cardZip'
	  WHERE id='$id' and number = '$cardNumber'";


if($preferred == "Y"){
	$sql1 = "UPDATE credit_card SET preferred='N' WHERE (id='$id' and number <> '$cardNumber')";
	if(mysqli_query($link, $sql1)){
		header("location:account.php");
	}
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}


}	  
// if preffered is set in the payload
// go to the db and set any other card thats not this one for this user as not preffered

	if(mysqli_query($link, $sql)){
		header("location:account.php");
	}
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
}

 
	// close connection
	mysqli_close($link);
?>

</body>
</html>