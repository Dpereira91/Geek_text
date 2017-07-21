<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Book Search</title>
</head>
<body>

<?php
	include("header.php");
	$link = mysqli_connect("localhost", "root", "", "geek_text");
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	$title = mysqli_real_escape_string($link, $_REQUEST['title']);

	$sql = "SELECT * FROM books WHERE title LIKE '%$title%'";
	$result=mysqli_query($link, $sql);
	$count=mysqli_num_rows($result);
	
	if($count == 0)
	{
		echo '<p style="margin-left:2em; font-size:3em;">No results found for this search. Try again!</p>';
	}
	else
	{
		while ($row=mysqli_fetch_array($result)) {
		echo'<figure><img class="imgi" src="default_book.png" alt=""><figcaption>' . $row["title"] . '</figcaption>
		<figcaption>$' . $row["price"] . '</figcaption><figcaption>';
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
		echo'</figcaption></figure>';
		}
	}
	mysqli_close($link);

	include("footer.php");
?>

<style>
	.ai {
		display: inline-block;
		margin-bottom: 8px;
		width: calc(25% - 4px);
		margin-left: 16px;
		text-decoration: none;
		color: black;
	}
	.ai:nth-of-type(2n) {
		margin-right: 0;
	}
	@media screen and (min-width: 50em) {
		.ai {
			width: calc(18% - 8px);
		}
		.ai:nth-of-type(2n) {
			margin-right: 16px;
		}
		.ai:nth-of-type(4n) {
			margin-right: 0;
		}
	}
	.ai:hover .imgi {
		transform: scale(1.10);
	}
	figure {
		margin-left: 32px;
		margin-top: 16px;
		overflow: hidden;
	}
	figcaption {
		margin-top: 8px;
	}
	.imgi {
		border: none;
		max-width: 100%;
		height: auto;
		display: block;
		background: #ccc;
		transition: transform .2s ease-in-out;
	}
	.p .ai {
		display: inline;
		font-size: 14px;
		margin: 0;
		text-decoration: underline;
		color: blue;
	}
	.p {
		text-align: center;
		font-size: 14px;
		padding-top: 100px;
	}
</style>

</body>
</html>