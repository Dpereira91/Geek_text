<html lang="en">
<head>
<meta charset="UTF-8">
<title>Shopping Cart</title>
</head>
<body>

<?php include("header.php");
	
$link = mysqli_connect("localhost", "root", "", "geek_text");
if ( isset($_SESSION['username'] ) ) {
	$id = $_SESSION['username'];
	$sql = "SELECT title, price, bookid, quantity FROM books INNER JOIN cart WHERE cart.user_id ='$id' AND books.id = cart.bookid";
	$result1 = mysqli_query($link, $sql);
	$count1=mysqli_num_rows($result1);
	$totalcart = 0;

	$sql2 = "SELECT title, price, bookid, quantity FROM books INNER JOIN savedcart WHERE savedcart.user_id='$id' AND books.id = savedcart.bookid";
	$result2 = mysqli_query($link, $sql2);
	$count2=mysqli_num_rows($result2);
?>

	<h2 style="margin-left: 20;">Shopping Cart</h2>

	<?php if ($count1 == 0) {
		echo("<br /><p style='margin-left: 20;'> There are no items in your cart. <a href='./books.php'> Start shopping now!</a></p><br />");
	}
		else { ?>

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
		<?php while( $row = mysqli_fetch_array( $result1 ) ) {
	
		$totalcart = $totalcart + (htmlspecialchars( $row['price'] ) * htmlspecialchars( $row['quantity'] ) ); ?>
	
		<form action="update_cart.php" method="post">
		<tr> 
			  <td class="fit"><?php echo( htmlspecialchars( $row['title'] ) ); ?></td>
			  <td class="fit"><?php echo( htmlspecialchars( $row['price'] ) ); ?></td>
			  <input type="hidden" name="cart_bookid" value="<?php echo( htmlspecialchars( $row['bookid'] ) ); ?>">
			  <td class="fit"><input type="number" name="cart_quantity" value="<?php echo( htmlspecialchars( $row['quantity'] ) ); ?>" placeholder="Quantity"></td>
			  <td class="fit"><?php echo( "$". number_format(htmlspecialchars( $row['price'] ) * htmlspecialchars( $row['quantity'] ), 2) ); ?></td>
		  
			  <td class="fit"><input type="submit" name="action" value="Update" class="btn btn-success" style="margin: 2px;"></td>
			  <td class="fit"><input type="submit" name="action" value="Remove" class="btn btn-danger"></td>
			  <td class="fit"><input type="submit" name="action" value="Save For Later" class="btn btn-success"></td>
			  <br />
		</tr>
	
		</form> 
		<?php } ?>
		</tbody>
	
	</table>

	<br />
	<h5 style="margin-left: 760px;">Your cart total: <?php echo("<strong>$". number_format( $totalcart, 2 )."</strong>"); ?></h5>

	<?php } ?>

	<h3 style="margin-left: 20;">Saved For Later</h3>

	<?php if ($count2 == 0) {
		echo("<br /><p style='margin-left: 20;'> There are no items in your saved list. Add items from your cart now!</p><br />");
			}
		else { ?>

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
		<?php while( $row_saved = mysqli_fetch_array( $result2 ) ) { ?>
		<form action="update_savedlist.php" method="post">
		<tr> 
			  <td class="fit"><?php echo( htmlspecialchars( $row_saved['title'] ) ); ?></td>
			  <td class="fit"><?php echo( htmlspecialchars( $row_saved['price'] ) ); ?></td>
			  <input type="hidden" name="savedcart_bookid" value="<?php echo( htmlspecialchars( $row_saved['bookid'] ) ); ?>">
			  <input type="hidden" name="savedcart_quantity" value="<?php echo( htmlspecialchars( $row_saved['quantity'] ) ); ?>">
			  <td class="fit"><?php echo( htmlspecialchars( $row_saved['quantity'] ) ); ?></td>
			  <td class="fit"><?php echo( "$". htmlspecialchars( $row_saved['price'] ) * htmlspecialchars( $row_saved['quantity'] ) ); ?></td>
		  
			  <td class="fit"><input type="submit" name="action" value="Move to Cart"   class="btn btn-success" style="margin: 2px;"></td>
			  <td class="fit"><input type="submit" name="action" value="Remove From List" class="btn btn-danger"></td>
			  <br />
		</tr>
	
		</form> 
		<?php } ?>
		</tbody>
	</table>

	<?php } ?>

	<br /><br />
	<?php if ($count1 != 0) { ?>
	<form action="guest_checkout_form.php" method="post">
	<p><input style="margin-left: 20;" type="submit" class="btn btn-success" value="Checkout"></p>
	</form>
	<?php } ?>

<?php }

else { ?>
	<h2 style="margin-left: 20;">Shopping Cart</h2>
	
<?php 
	echo("<br /><p style='margin-left: 20;'> You are not logged in. <br /><a href='./create_account.php'>Sign up</a> or <a href='./sign_in.php'>sign in</a> to your account and start shopping now!</p><br />");
}
?>





</body>
</html>