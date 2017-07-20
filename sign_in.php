<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sign In</title>
</head>
<body>

<?php include("header.php");?>

<h3 style="margin-left: 20;">Sign in</h3>

<form action="check_login.php" method="post">
    <p style="margin-left: 20;"><input type="text" name="id" placeholder="User ID"></p>
	<p style="margin-left: 20;"><input type="password" name="pw" placeholder="Password"></p>
    <input  style="margin-left: 20;" type="submit" value="Sign in">
</form>

<br>

<p style="margin-left:20;">Don't have an account?<a style="margin-left: 20;" href="./create_account.php">Sign Up</a>

<?php include("footer.php");?>

</body>
</html>