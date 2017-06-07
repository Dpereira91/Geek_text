<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add a Credit Card</title>
</head>
<body>

<?php include("header.php");?>

<h2 style="margin-left: 20;">Card Information</h2>

<form action="add_card.php" method="post">
	<p style="margin-left: 20;"><input type="text" name="name" placeholder="Name"></p>
	<p style="margin-left: 20;"><input type="text" name="number" placeholder="Card Number"></p>
	<p style="margin-left: 20;"><input type="text" name="exp" placeholder="Expiration Date"></p>
	<p style="margin-left: 20;"><input type="text" name="street1" placeholder="Street Address"></p>
	<p style="margin-left: 20;"><input type="text" name="street2" placeholder="Address 2"></p>
	<p style="margin-left: 20;"><input type="text" name="code" placeholder="Security Code"></p>
	<p style="margin-left: 20;"><input type="text" name="city" placeholder="City"></p>
	<p style="margin-left: 20;"><input type="text" name="state" placeholder="State"></p>
	<p style="margin-left: 20;"><input type="text" name="zip" placeholder="Zip Code"></p>	


	
	<input style="margin-left: 20;" type="submit" value="Save">
</form>


By signing in or creating an account you are agreeing to our 
<a href="./terms.php">Terms of Use</a> and 
our <a href="./privacy.php">Privacy Policy</a>.


</body>
</html>