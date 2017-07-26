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
			<button style="color:#1589c9; background:none; border:none; padding:0; margin-left:10px;" type="submit" value="'. $row["author"] .'" name="author" >'. $row["author"] .'</button>
			</form>
		</p>
		<p style="margin-left: 240px"><b>Genre: </b>'. $row["genre"] .'</p>
		<p style="margin-left: 240px; margin-right:20px;"><b>Description: </b>'. $row["description"] .'</p>
		<p style="margin-left: 240px"><b>Published: </b>'. $row["published_year"] .'</p>
		<p style="margin-left: 240px"><b>Rating: </b>';
		if ( $row['rating'] <= '1' ) {
			echo'<img src="ratings/1.png" style="width:100px; height:20px;">';
		}
		elseif ($row['rating']>'1' && $row['rating']<='1.5') {
			echo'<img src="ratings/1-5.png" style="width:100px; height:20px;">';
		}
		elseif ($row['rating']>'1.5' && $row['rating']<='2') {
			echo'<img src="ratings/2.png" style="width:100px; height:20px;">';
		}
		elseif ($row['rating']>'2' && $row['rating']<='2.5') {
			echo'<img src="ratings/2-5.png" style="width:100px; height:20px;">';
		}
		elseif ($row['rating']>'2.5' && $row['rating']<='3') {
			echo'<img src="ratings/3.png" style="width:100px; height:20px;">';
		}
		elseif ($row['rating']>'3' && $row['rating']<='3.5') {
			echo'<img src="ratings/3-5.png" style="width:100px; height:20px;">';
		}
		elseif ($row['rating']>'3.5' && $row['rating']<='4') {
			echo'<img src="ratings/4.png" style="width:100px; height:20px;">';
		}
		elseif ($row['rating']>'4' && $row['rating']<='4.5') {
			echo'<img src="ratings/4-5.png" style="width:100px; height:20px;">';
		}
		elseif ($row['rating']>'4.5') {
			echo'<img src="ratings/5.png" style="width:100px; height:20px;">';
		}
		echo'</p>
		<p style="margin-left: 240px"><strong>Price: </strong>$'. $row["price"] .'</p>
		<form action="add_to_cart.php" method="get">
		<p style="float:left; margin-right:20px;">
		<input style="width: 40px;" type="number" name="book_quantity" value="1" size="5" maxlength="5" required></p>
		<button type="submit" value="'. $row["id"] .' "class="btn btn-success" name="bookid">Add to Cart</button>
		</p>
		</form>';
	mysqli_close($link);
	include("footer.php");
?>

</body>
</html>