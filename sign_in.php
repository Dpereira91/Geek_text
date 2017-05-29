<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sign In</title>
</head>
<body>

<?php include("header.php");?>

<h3 style="margin-left: 20;">Sign in or Create an Account</h3>

<form action="check_login.php" method="post">
    <p style="margin-left: 20;"><input type="text" name="id" placeholder="User ID"></p>
	<p style="margin-left: 20;"><input type="text" name="pw" placeholder="Password"></p>
    <input  style="margin-left: 20;" type="submit" value="Sign in">
</form>

<br></br>

<form action="create_account.php" method="post">
    <input  style="margin-left: 20;" type="submit" value="Create Account">
</form>

<br></br>


By signing in or creating an account you are agreeing to our 
<a href="./terms.php">Terms of Use</a> and 
our <a href="./privacy.php">Privacy Policy</a>.

</body>
</html>