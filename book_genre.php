<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Books</title>
</head>
<body>


<?php
	// DB connection?
	include("header.php");
	$link = mysqli_connect("localhost", "root", "", "geek_text");

	// Get the list of all genres in DB
	$genres = "SELECT distinct genre FROM books";
	$genresList = mysqli_query($link, $genres);
?>


<!-- div for the genres navigation bar? -->

<!--  ********** Heading section*********** -->
<div class="container">
  <h2>Books by Genre</h2>
  <p>Select tab to display genre</p>
  <ul class="nav nav-tabs">
  	<!-- Create main tab heading for all books in all genres -->
    <li class="active"><a data-toggle="tab" href="#home">All Genres</a></li>
    <!-- Create dynamic tabs heading using all available genres from db --> 
    <?php while( $genresRow=mysqli_fetch_array($genresList)){
    	echo '<li><a data-toggle="tab" href="#menu' .str_replace(' ', '', $genresRow['genre']). '">' . $genresRow['genre']. '</a></li>';
    }?>
  </ul>


  <!--  ********** Data section*********** -->
 <div class="tab-content">
  	<!-- Display of All Books Tab -->
  	<br>
    <div id="home" class="tab-pane fade in active">

	    <!-- buttons used for sorting	 -->
	    <?php include("book_sorting_buttons.php"); ?>

        <h3>All Genres</h3>
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

	<!-- Display of books Specific by genre -->
    <?php
    $genres = "SELECT distinct genre FROM books";
	$genresList = mysqli_query($link, $genres);
	// Echo Genre selected
	while( $genresRow=mysqli_fetch_array($genresList)) {
		$current = $genresRow['genre'];
		echo '<div id="menu'. str_replace(' ', '', $genresRow['genre']) . '"' . 'class="tab-pane fade">';


	    // buttons used for sorting
		include("book_sorting_buttons.php");

	 	echo '<h3>' . $genresRow['genre']. '</h3>';

		// Echo all books for the specified genre
	    $sql = "SELECT * FROM books WHERE genre = '$current'";
	    $bookList = mysqli_query($link, $sql);
		echo'<div style="display:flex; flex-wrap: wrap;">';
		while ($row=mysqli_fetch_array($bookList)) {
			include("display_book_helper.php");	
		}
		echo '</div>';
	  	echo '</div>';
    }
	
	include("footer.php");
    ?>
</div>


<style>
	<?php include("style.css"); ?>
</style>

<!-- scripts used by the sorting buttons -->
 <?php include"book_sorting_scripts.php" ?>

</body>
</html>