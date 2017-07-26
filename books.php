<html lang="en">
<head>
<meta charset="UTF-8">
<title>Books</title>
</head>
<body>

<?php
	include("header.php");
	$link = mysqli_connect("localhost", "root", "", "geek_text");
	echo'<div style="display:flex; flex-wrap: wrap;">';
?>


<!--  ********** Heading section*********** -->
<div class="container">
  <h2>All Books</h2>
  <ul class="nav nav-tabs">
  	<!-- Create main tab heading for all books in all genres -->
    <!-- <li class="active"><a data-toggle="tab" href="#home"></a></li> -->
  </ul>



 <!--  ********** Data section*********** -->
 <div class="tab-content">
  	<!-- Display of All Books Tab -->
  	<br>
    <div id="home" class="tab-pane fade in active">

	    <!-- buttons used for sorting	 -->
	    <?php include("book_sorting_buttons.php"); ?>

        <?php
		$sql = "SELECT * FROM books";
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
