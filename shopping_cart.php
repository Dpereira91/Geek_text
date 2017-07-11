<html lang="en">
<head>
<meta charset="UTF-8">
<title>Shopping Cart</title>
</head>
<body>

<?php include("header.php");
	
$link = mysqli_connect("localhost", "root", "", "geek_text");
$id = $_SESSION['username'];
	
$sql = "SELECT title, price, quantity FROM books INNER JOIN cart WHERE cart.id='$id' AND books.id = cart.bookid";
$result1 = mysqli_query($link, $sql);
$count1=mysqli_num_rows($result1);

$sql2 = "SELECT title, price, quantity FROM books INNER JOIN savedcart WHERE savedcart.id='$id' AND books.id = savedcart.bookid";
$result2 = mysqli_query($link, $sql2);
$count2=mysqli_num_rows($result2);

?>

<h2 style="margin-left: 20;">Shopping Cart</h2>

<table style= "margin-left:20; background-color:whitesmoke;"  width="880 px">
	<thead>
	<tr>
		<th>Name</th>
		<th>Unit Price</th>
		<th>Quantity</th>
		<th>Total</th>
	</tr>
	</thead>
	<tbody>
	<?php while( $row = mysqli_fetch_array( $result1 ) ) { ?>
	<form action="update_cart.php" method="post">
	<tr> 
          <td class="fit"><?php echo( htmlspecialchars( $row['title'] ) ); ?></td>
          <td class="fit"><?php echo( htmlspecialchars( $row['price'] ) ); ?></td>
          <td class="fit"><input type="text" value="<?php echo( htmlspecialchars( $row['quantity'] ) ); ?>" name="quantity" placeholder="Quantity"></td>
          <td class="fit"><?php echo( "$". htmlspecialchars( $row['price'] ) * htmlspecialchars( $row['quantity'] ) ) ?></td>
          
          <td class="fit"><input type="submit" name="action" value="Update"   class="btn btn-success"></td>
	      <td class="fit"><input type="submit" name="action" value="Remove" class="btn btn-danger"></td>
	      <td class="fit"><input type="submit" name="action" value="Save For Later"   class="btn btn-success"></td>
	      <br />
	</tr>
	
	<?php } ?>
	</form> 
	</tbody>
	
</table>

<h3 style="margin-left: 20;">Saved For Later</h3>

<table style= "margin-left:20; background-color:whitesmoke;"  width="880 px">
	<thead>
	<tr>
		<th>Name</th>
		<th>Unit Price</th>
		<th>Quantity</th>
		<th>Total</th>
	</tr>
	</thead>
	<tbody>
	<?php while( $row = mysqli_fetch_array( $result2 ) ) { ?>
	<form action="update_cart.php" method="post">
	<tr> 
          <td class="fit"><?php echo( htmlspecialchars( $row['title'] ) ); ?></td>
          <td class="fit"><?php echo( htmlspecialchars( $row['price'] ) ); ?></td>
          <td class="fit"><?php echo( htmlspecialchars( $row['quantity'] ) ); ?></td>
          <td class="fit"><?php echo( "$". htmlspecialchars( $row['price'] ) * htmlspecialchars( $row['quantity'] ) ) ?></td>
          
	      <td class="fit"><input type="submit" name="action" value="Move to Cart"   class="btn btn-success"></td>
	      <td class="fit"><input type="submit" name="action" value="Remove From List" class="btn btn-danger"></td>
	      <br />
	</tr>
	
	<?php } ?>
	</form> 
	</tbody>
</table>

<br><br>
<form action="guest_checkout_form.php" method="post">
<p><input style="margin-left: 20;" type="submit" class="btn btn-success" value="Checkout"></p>
</form>
</body>
</html>