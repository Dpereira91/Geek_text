<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Books</title>
</head>
<body>

<?php
	include("header.php");
	$link = mysqli_connect("localhost", "root", "", "geek_text");


	// Get the list of all genres in DB
	$genres = "SELECT distinct genre FROM books";
	$genresList = mysqli_query($link, $genres);
?>



<div class="container">
  <h2>Books by Genre</h2>
  <p>Select tab to display genre</p>

<!-- Create Dynamic tabs heading using all available genres from db -->
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">All Genres</a></li>
    <?php while( $genresRow=mysqli_fetch_array($genresList)){
    	echo '<li><a data-toggle="tab" href="#menu' .$genresRow['genre']. '">' . $genresRow['genre']. '</a></li>';
    }?>
  </ul>

  <div class="tab-content">
  	<!-- Display of All Books Tab -->
    <div id="home" class="tab-pane fade in active">
      <h3>All Genres</h3>
      <?php
		$sql = "SELECT * FROM books";
		$bookList = mysqli_query($link, $sql);


		echo'<div style="display:flex; flex-wrap: wrap;">';
		while ($row=mysqli_fetch_array($bookList)) {
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
		echo '<div id="menu'. $genresRow['genre'] . '"' . 'class="tab-pane fade">';
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
      ?>
</div>


<style>
	<?php include("style.css"); ?>
</style>

</body>
</html>