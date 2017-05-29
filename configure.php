<html lang="en">
<head>
<meta charset="UTF-8">
<title>Configure Database</title>
</head>
<body>

<?php include("header.php");?>

<h3 style="margin-left: 20;">Create Database</h3>

<form action="create_database.php" method="post">
	<input style="margin-left: 20;" type="text" name="database" placeholder="Database Name">
    <input style="margin-left: 20;" type="submit" value="Create">
</form>

<h3 style="margin-left: 20;">Create a Table</h3>

<form action="create_table.php" method="post">
	<input style="margin-left: 20;" type="text" name="db_name" placeholder="Database">
    <input type="text" name="table" placeholder="Table Name">
	<input type="text" name="values" placeholder="Attributes">
    <input type="submit" value="Create">
</form>

</body>
</html>