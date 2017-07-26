<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sign In</title>
</head>
<body>

<?php include("header.php");?>

<center><p style="font-size:3.5em;"><b>Sign In</b></p></center>
<hr>
<br>
<center>
<form action="check_login.php" method="post">
    <p><input type="text" name="id" placeholder="User ID"></p>
    <br>
	<p><input type="password" name="pw" placeholder="Password"></p>
	<br>
    <input type="submit" value="Sign In">
    <br>
    <br>
</form>
<p>Don't have an account?<a href="./create_account.php"> Sign Up!</a>
</center>

<?php include("footer.php");?>

</body>
</html>
