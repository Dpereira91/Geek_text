<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Book Search</title>
</head>
<body>

<?php
	include("header.php");
	$link = mysqli_connect("localhost", "root", "", "geek_text");
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	$title = mysqli_real_escape_string($link, $_REQUEST['title']);

	$sql = "SELECT * FROM books WHERE title LIKE '%$title%'";
	$result=mysqli_query($link, $sql);
	$count=mysqli_num_rows($result);
	
	if($count == 0)
	{
		echo '<p style="margin-left:2em; font-size:3em;">No results found for this search. Try again!</p>';
	}
	else
	{
		echo '<p style="margin-left:2em; font-size:3em;">Results for title search \''. $title .'\'</p>';
		while ($row=mysqli_fetch_array($result)) {
			include("display_book_helper.php");
		}
	}
	mysqli_close($link);

	include("footer.php");
?>



</body>
</html>