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
$street = mysqli_real_escape_string($link, $_REQUEST['street']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
$zip = mysqli_real_escape_string($link, $_REQUEST['zip']);
$addressId = mysqli_real_escape_string($link, $_REQUEST['addressId']);
$preferred = mysqli_real_escape_string($link, $_REQUEST['preferred']);


if ($preferred != "1" && $preferred != "0"){
	$preferred = "0";
}


if ($_POST['action']=='remove'){
	$sql = "DELETE FROM shipping WHERE id='$id' and address_id = '$addressId'";

		if(mysqli_query($link, $sql)){
			header("location:account.php");
		}
		else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
	}


if ($_POST['action']=='save'){

$sql = "UPDATE shipping SET street1='$street', city='$city', state='$state', zip_code='$zip', preferred = '$preferred' WHERE id='$id' AND address_id='$addressId'";

if($preferred == "1"){
	$sql1 = "UPDATE shipping SET preferred='0' WHERE (id='$id' and address_id <> '$addressID')";
	if(mysqli_query($link, $sql1)){
		header("location:account.php");
	}
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

}	  
// if preferred is set in the payload
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

