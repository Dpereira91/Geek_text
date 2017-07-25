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
	echo'<div style="display:flex; flex-wrap: wrap;">';
?>

<!-- Heading -->
<h2 style="margin-left: 20;">Book Details</h2>

<!-- Book Details -->
<div>
<?php
		$id = mysqli_real_escape_string($link, $_REQUEST['bookid']);
		$sql = "SELECT * FROM books WHERE id = $id";
		$result = mysqli_query($link, $sql);

		echo'<div style="display:flex; flex-wrap: wrap;">';
		while ($row=mysqli_fetch_array($result)) {
		?>

		<p style="float: left;"><img src="images/<?php echo $row['id']?>.png" height="300px" width="200px" border="1px" hspace="20"></a></p>
		<h3><?php echo $row['title']?></h3>
		<hr>
		<p><b>Author:</b> <?php echo $row['author']?></p>
		<p style="margin-left: 240px"><b>Genre:</b> <?php echo $row['genre']?></p>
		<p style="margin-left: 240px"><b>Description:</b> <?php echo $row['description']?> </p>
		<p style="margin-left: 240px"><b>Published:</b> <?php echo $row['published_year']?> </p>
		<p style="margin-left: 240px"><b>Rating:</b> <?php echo $row['rating']?></p>
		<p style="margin-left: 240px"><b>Price:</b> <?php echo $row['price']?></p>
		<p style="float:right;"><button style="background-color:limegreen; color:white;"><strong>Add to Cart</strong></button></p>

		<?php
		}
?>

<?php
	mysqli_close($link);
	include("footer.php");
?>

</div>

</body>
</html>