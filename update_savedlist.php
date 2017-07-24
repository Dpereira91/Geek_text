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
$savedbookIDNum = mysqli_real_escape_string($link, $_REQUEST['savedcart_bookid']);
$savedquan = mysqli_real_escape_string($link, $_REQUEST['savedcart_quantity']);


if ($_POST['action']=='Move to Cart'){
	$sql4 = "INSERT INTO cart VALUES('$id', '$savedbookIDNum', '$savedquan')";
	$sql5 = "DELETE FROM savedcart WHERE user_id='$id' and bookid='$savedbookIDNum'";

		if(mysqli_query($link, $sql4) && mysqli_query($link, $sql5)) {
			header("location:shopping_cart.php");
		}
		else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
}

if ($_POST['action']=='Remove From List'){
	$sql6 = "DELETE FROM savedcart WHERE user_id='$id' and bookid='$savedbookIDNum'";

		if(mysqli_query($link, $sql6)){
			header("location:shopping_cart.php");
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

