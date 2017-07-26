<html>
<body>

<?php
include("header.php"); 
$link = mysqli_connect("localhost", "root", "", "geek_text");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$id = $_SESSION['username'];
$bookid = mysqli_real_escape_string($link, $_REQUEST['bookid']);
$quantity = 1;

$sql = "SELECT * FROM cart WHERE user_id='$id' AND bookid='$bookid'";
$result = mysqli_query($link, $sql);
$count=mysqli_num_rows($result);
mysqli_close($link);

$link = mysqli_connect("localhost", "root", "", "geek_text");

if($count > 0)
{
	$sql = "UPDATE cart SET quantity = quantity + 1 WHERE user_id='$id' AND bookid='$bookid'";
	if(mysqli_query($link, $sql)){
		header("location:shopping_cart.php");
	}
	else
	{
		echo "ERROR: Could not execute $sql. " . mysqli_error($link);
	}
}
else
{
	$sql = "INSERT INTO cart VALUES('$id', '$bookid', '$quantity')";
	if(mysqli_query($link, $sql)){
		header("location:shopping_cart.php");
	}
	else
	{
		echo "ERROR: Could not execute $sql. " . mysqli_error($link);
	}
	
	echo'added into table '. $id .' '. $bookid .' '. $quantity .'';
}

mysqli_close($link);

?>

</body>
</html>