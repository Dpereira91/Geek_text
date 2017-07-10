<html lang="en">
<head>
<meta charset="UTF-8">
<title>Shopping Cart</title>
</head>
<body>

<?php include("header.php");
	
$link = mysqli_connect("localhost", "root", "", "geek_text");
$id = $_SESSION['username'];
	
$sql = "SELECT * FROM cart WHERE id='$id'";
$result1 = mysqli_query($link, $sql);
$count1=mysqli_num_rows($result1);

// Get title for books in cart from books table
if ( $count1 != 0) {
	
}

$sql = "SELECT * FROM savedcart WHERE id='$id'";
$result2 = mysqli_query($link, $sql);
$count2=mysqli_num_rows($result2);

// Get title for books in saved cart from books table
if ( $count2 != 0) {

}

?>

<h2 style="margin-left: 20;">Shopping Cart</h2>

<table style= "margin-left:20; background-color:whitesmoke;"  width="480 px">
	<thead>
	<tr>
		<th>Name</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Total</th>
	</tr>
	</thead>
	<tbody>
	<?php while( $row = mysqli_fetch_array( $result1 ) ) { ?>
	
	<tr> 
          <td class="fit"><?php echo( htmlspecialchars( $row['bookid'] ) ); ?></td>
          <td class="fit"><?php echo( htmlspecialchars( $row['bookid'] ) ); ?></td>
          <td class="fit"><input type="text" value="<?php echo( htmlspecialchars( $row['quantity'] ) ); ?>" name="quantity" placeholder="Quantity"></td>
	</tr>
	
	<?php } ?> 
	</tbody>
	
</table>

<h3 style="margin-left: 20;">Saved For Later</h3>

<table style= "margin-left:20; background-color:whitesmoke;"  width="480 px">
	<thead>
	<tr>
		<th>Name</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Total</th>
	</tr>
	</thead>
	<tbody>
	<?php while( $row = mysqli_fetch_array( $result2 ) ) { ?>
	
	<tr> 
          <td class="fit"><?php echo( htmlspecialchars( $row['bookid'] ) ); ?></td>
          <td class="fit"><?php echo( htmlspecialchars( $row['bookid'] ) ); ?></td>
          <td class="fit"><input type="text" value="<?php echo( htmlspecialchars( $row['quantity'] ) ); ?>" name="quantity" placeholder="Quantity"></td>
	</tr>
	
	<?php } ?> 
	</tbody>
</table>

<br><br>
<form action="guest_checkout_form.php" method="post">
<p><input style="margin-left: 20;" type="submit" class="btn btn-success" value="Checkout"></p>
</form>
</body>
</html>