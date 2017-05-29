<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Account</title>
</head>
<body>

<?php include("header.php");?>

<h2 style="margin-left: 20;">Account Information</h2>

<form action="insert_account.php" method="post">
	<p style="margin-left: 20;"><input type="text" name="id" placeholder="User ID"></p>
	<p style="margin-left: 20;"><input type="text" name="pw" placeholder="Enter Password"></p>
	<p style="margin-left: 20;"><input type="text" name="name" placeholder="Name"></p>
	<p style="margin-left: 20;"><input type="text" name="nickname" placeholder="Nickname"></p>
	<p style="margin-left: 20;"><input type="text" name="email" placeholder="Email"></p>
	<p style="margin-left: 20;"><input type="text" name="street1" placeholder="Street 1"></p>
	<p style="margin-left: 20;"><input type="text" name="street2" placeholder="Street 2"></p>
	<p style="margin-left: 20;"><input type="text" name="city" placeholder="City"></p>
	<p style="margin-left: 20;"><input type="text" name="state" placeholder="State"></p>
	<p style="margin-left: 20;"><input type="text" name="zip" placeholder="Zip Code"></p>	


	
	<input style="margin-left: 20;" type="submit" value="Create Account">
</form>


By signing in or creating an account you are agreeing to our 
<a href="./terms.php">Terms of Use</a> and 
our <a href="./privacy.php">Privacy Policy</a>.


</body>
</html>