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
	
	<input style="margin-left: 20;" type="submit" value="Create Account">
</form>

</body>
</html>