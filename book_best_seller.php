<html lang="en">
<head>
<meta charset="UTF-8">
<title>Best Sellers</title>
</head>
<body>

<?php
	include("header.php");
	$link = mysqli_connect("localhost", "root", "", "geek_text");
	echo'<div style="display:flex; flex-wrap: wrap;">';
?>


<!--  ********** Heading section*********** -->
<div class="container">
  <h2>Best Sellers</h2>
  <ul class="nav nav-tabs">
  </ul>



 <!--  ********** Data section*********** -->
 <div class="tab-content">
  	<!-- Display of All Books Tab -->
  	<br>
    <div id="home" class="tab-pane fade in active">

	    <!-- buttons used for sorting	 -->
	    <?php include("book_sorting_buttons.php"); ?>

        <?php
		$sql = "SELECT * FROM books where best_seller = '1' ";
		$bookList = mysqli_query($link, $sql);

		echo'<div style="display:flex; flex-wrap: wrap;">';
		while ($row=mysqli_fetch_array($bookList)) {
			// display books
			include("display_book_helper.php");
		}
		?>
		</div>
		</div>

<?php
	mysqli_close($link);
	include("footer.php");
?>

<style>
	<?php include("style.css"); ?>
</style>

	<!-- scripts used by the sorting buttons -->
 	<?php include"book_sorting_scripts.php" ?>

</body>
</html>
