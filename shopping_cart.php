<html lang="en">
<head>
<meta charset="UTF-8">
<title>Shopping Cart</title>
</head>
<body>

<?php include("header.php");?>

<h2 style="margin-left: 20;">Shopping Cart</h2>

<table style= "margin-left:20; background-color:whitesmoke;"  width="480 px">
	<tr>
		<th>Name</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Total</th>
	</tr>
</table>

<h3 style="margin-left: 20;">Saved For Later</h3>

<table style= "margin-left:20; background-color:whitesmoke;"  width="480 px">
	<tr>
		<th>Name</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Total</th>
	</tr>
</table>

<br><br>
<form action="guest_checkout_form.php" method="post">
<p><input style="margin-left: 20;" type="submit" class="btn btn-success" value="Checkout"></p>
</form>
</body>
</html>