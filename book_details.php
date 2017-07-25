<html lang="en">
<head>
<meta charset="UTF-8">
<title>Book Details</title>
</head>
<body>

<?php 
	include("header.php");
	
	$link = mysqli_connect("localhost", "root", "", "geek_text");
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	$id = mysqli_real_escape_string($link, $_REQUEST['bookid']);
	$sql = "SELECT * FROM books WHERE id = $id";
	$result = mysqli_query($link, $sql);
	$row=mysqli_fetch_array($result);
	
	echo'<h2 style="margin-left: 20;">Book Details</h2>';
	echo'<p style="float: left;"><img src="images/'. $row["id"] .'.png" height="300px" width="200px" border="1px" hspace="20"></a></p>
		<h3>'. $row["title"] .'</h3>
		<hr>
		
		<p>
			<b>Author: </b>
			<form action="book_authors.php" method="get">
			<button style="background:none; border:none; padding:0; margin-left:10px;" type="submit" value="'. $row["author"] .'" name="author" >'. $row["author"] .'</button>
			</form>
		</p>
		<p style="margin-left: 240px"><b>Genre: </b>'. $row["genre"] .'</p>
		<p style="margin-left: 240px; margin-right:20px;"><b>Description: </b>'. $row["description"] .'</p>
		<p style="margin-left: 240px"><b>Published: </b>'. $row["published_year"] .'</p>
		<p style="margin-left: 240px"><b>Rating: </b>'. $row["rating"] .'</p>
		<p style="margin-left: 240px"><b>Price: </b>'. $row["price"] .'</p>
		<p style="float:right; margin-right:20px;"><button style="background-color:limegreen; color:white;"><strong>Add to Cart</strong></button></p>';
	mysqli_close($link);
	include("footer.php");
?>

</body>
</html>