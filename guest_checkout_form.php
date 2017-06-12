<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Guest Checkout</title>
<head>
<body>

<?php include("header.php");?>

<br><br>
<h2 style="margin-left: 20;">Guest Checkout</h2>

<br>
<form action="" method="post">
<h4 style="margin-left: 20;">Personal Information</h4>
<p style="margin-left: 20;"><input type="text" name="name" placeholder="Name"></p>
<p style="margin-left: 20;"><input type="text" name="email" placeholder="Email"></p>
<p style="margin-left: 20;"><input type="text" name="street1" placeholder="Street 1"></p>
<p style="margin-left: 20;"><input type="text" name="street2" placeholder="Street 2"></p>
<p style="margin-left: 20;"><input type="text" name="city" placeholder="City"></p>
<p style="margin-left: 20;"><input type="text" name="state" placeholder="State"></p>
<p style="margin-left: 20;"><input type="text" name="zip" placeholder="Zip Code"></p>	

<br><br>
<h4 style="margin-left: 20;">Credit Card</h3>
<?php include("credit_card_form.php"); ?>
<p><input style="margin-left: 20;" type="submit" class="btn btn-success" value="Checkout"></p>
</form>

</body>	
</html>