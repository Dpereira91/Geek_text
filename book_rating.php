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
?>



<div class="container">
  <h2>Books by Rating</h2>
  <p>Select tab to display rating</p>

<!-- Create Dynamic tabs heading using all available genres from db -->
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">All Ratings</a></li>
    <li><a data-toggle="tab" href="#rating5">5.0 - 4.1</a></li>
    <li><a data-toggle="tab" href="#rating4">4.0 - 3.1</a></li>
    <li><a data-toggle="tab" href="#rating3">3.0 - 2.1</a></li>  
    <li><a data-toggle="tab" href="#rating2">2.1 - 1.0</a></li> 
    <li><a data-toggle="tab" href="#rating1">1.0 - 0.0</a></li> 
  </ul>

  <div class="tab-content">
  	<!-- Display of All Books Tab -->
    <div id="home" class="tab-pane fade in active">
    <br>
      <?php include("book_sorting_buttons.php"); ?>
      <h3>All Ratings</h3>
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

	<!-- Display of books Specific by rating range -->
    <?php
    	echo'<br>';
    	for ($i=1; $i <=5 ; $i++) { 
	    	echo '<div id="rating'. $i . '"' . 'class="tab-pane fade">';	
	    	 include("book_sorting_buttons.php");
	    	echo '<h3> Rating ' . $i .'</h3>';


			// Echo all books for the specified rating
		    $sql = "SELECT * FROM books WHERE (rating <= $i AND rating > $i-1)";
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

 <?php include"book_sorting_scripts.php" ?>

</body>
</html>