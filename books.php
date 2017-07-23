<html lang="en">
<head>
<meta charset="UTF-8">
<title>Books</title>
</head>
<body>

<?php
	include("header.php");
	$link = mysqli_connect("localhost", "root", "", "geek_text");
	$sql = "SELECT * FROM books";
	$result=mysqli_query($link, $sql);
	echo'<div style="display:flex; flex-wrap: wrap;">';
	while( $row=mysqli_fetch_array($result) ) {
		include("display_book_helper.php");	
	}
	echo"</div>";
	mysqli_close($link);
	
	include("footer.php");
?>

<style>
	<?php include("style.css"); ?>
</style>

</body>
</html>
