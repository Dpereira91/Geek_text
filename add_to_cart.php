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
$id = $_SESSION['username'];
$bookIDNum = mysqli_real_escape_string($link, $_REQUEST['addtocart_btn']);
$quantity = 1;
$quantiti = $quantity + 1;

$sql = "SELECT * FROM cart WHERE user_id='$id' and bookid = '$bookIDNum'";
$result = mysqli_query($link, $sql);

$count = mysqli_num_rows($result);

if($count == 0)
{
	$sql = "INSERT INTO cart user_id, bookid, quantity) 
			VALUES ('$id', '$bookid', '$quantity'";
}
else{
	$sql = "INSERT INTO cart (quantity) VALUES '$quantiti'";
}

mysqli_close($link);

?>

</body>
</html>