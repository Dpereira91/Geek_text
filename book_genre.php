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

    	echo '<li><a data-toggle="tab" href="#menu' .str_replace(' ', '', $genresRow['genre']). '">' . $genresRow['genre']. '</a></li>';
    }?>
  </ul>

  <div class="tab-content">
  	<!-- Display of All Books Tab -->
  	<br>



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
		echo '<div id="menu'. str_replace(' ', '', $genresRow['genre']) . '"' . 'class="tab-pane fade">';

		$buttonID = "buttonAZ";

		echo '<div class="btn-group" role="group" aria-label="...">
	  	<button type="button" class="btn btn-default ascAZ" aria-label="Left Align">
	  		<span class="glyphicon glyphicon-sort-by-alphabet" aria-hidden="true"></span>
		</button>
		<button type="button" class="btn btn-default descZA" aria-label="Left Align">
	  		<span class="glyphicon glyphicon-sort-by-alphabet-alt" aria-hidden="true"></span>
		</button>
		<button type="button" class="btn btn-default asc-newest" aria-label="Left Align">
	  		<span class="glyphicon glyphicon-sort-by-attributes" aria-hidden="true"></span>
		</button>
		<button type="button" class="btn btn-default desc-oldest" aria-label="Left Align">
	  		<span class="glyphicon glyphicon-sort-by-attributes-alt" aria-hidden="true"></span>
		</button>
	</div>';

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

<script>

//sorting
var getParentId = function(){
  var tabId = "#" + $(this).parent().parent().prop("id");
	console.log(tabId);
  
  var parentContainer = $(tabId);	
  var bookArray = $(tabId).find('.ai');  
  
  bookArray.sort( function (a, b){
    var an = a.getElementsByTagName("figcaption")[0].textContent;
    console.log(an);
    var bn = b.getElementsByTagName("figcaption")[0].textContent;
    //var bn = b.find("figcaption").text(); 
    
    if (an > bn){
     return 1;
    }
     
    if (an < bn){
     return -1;
    }
    
    return 0;   
    console.log(an);
    
  });
  
  bookArray.detach().appendTo(parentContainer);
  
  //console.log(bookArray.eq(0).find("figcaption").text());
  
}

$(".ascAZ").click(getParentId);
</script>

</body>
</html>