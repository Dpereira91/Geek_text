<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Book Author</title>
</head>
<body>

<?php 
	include("header.php");
	$link = mysqli_connect("localhost", "root", "", "geek_text");
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	$name = mysqli_real_escape_string($link, $_REQUEST['author']);
	$sql = "SELECT * FROM authors WHERE name = '$name'";
	$result = mysqli_query($link, $sql);
	$row=mysqli_fetch_array($result);
	
	echo'<p style="float: left;"><img src="images/a'. $row["id"] .'.png" height="240px" width="160px" border="1px" hspace="20"></a></p>
		<h2 style="margin-left: 20;">Book Author</h2>
		<h3>'. $row["name"] .'</h3>
		<hr>
		<p style="margin-left: 240px; margin-right:240px;"><b>Biography:<br></b>'. $row["bio"] .'</p>';
	mysqli_close($link);
	
	$link = mysqli_connect("localhost", "root", "", "geek_text");
	$sql = "SELECT * FROM books WHERE author = '$name'";
	$result = mysqli_query($link, $sql);
	
	
	echo'<br /><br /><br /><br /><p style="margin-left: 240px"><b>Books by Author:</b></p>';
	
	while($row=mysqli_fetch_array($result)){
		include("display_book_helper.php");
	}
	
	mysqli_close($link);
	include("footer.php");
?>



</body>
</html>