<html lang="en">
<head>
<meta charset="UTF-8">
<title>Book Author</title>
</head>
<body>

<?php 
	include("header.php");
	$link = mysqli_connect("localhost", "root", "", "geek_text");
	echo'<div style="display:flex; flex-wrap: wrap;">';
?>

<!-- Heading -->
<h2 style="margin-left: 20;">Book Author</h2>

<!-- Book Author Details -->
<div>
<?php
		$sql = "SELECT id, name, bio, photo, books FROM authors WHERE id = 1";
		$result = mysqli_query($link, $sql);

		echo'<div style="display:flex; flex-wrap: wrap;">';
		while ($row=mysqli_fetch_array($result)) {
		?>

		<p style="float: left;"><img src="<?php echo $row['photo']?>" height="300px" width="200px" border="1px" hspace="20"></a></p>
		<h3><?php echo $row['name']?></h3>
		<hr>
		<p style="margin-left: 240px"><b>Biography:</b> <?php echo $row['bio']?></p>
		<p style="margin-left: 240px"><b>Books by Author:</b> <?php echo $row['books']?> </p>

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