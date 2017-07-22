<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home Page</title>
</head>
<body>

<?php include("header.php");?>

<p><img src="images/banner.png" style="margin-top:-30px; max-width:100%;"></p>

<p style="text-align: center;"><b>Geek Text</b></p>
<br>

<p style="text-align:center; font-family:courier-new; font-size:4em;">TECH VALLEY TIMES BEST SELLERS</p>
<p style="text-align: center;"><b>By Tech Valley Times</b><br>JULY 26, 2017</p>
<p style="text-align: center; padding-left:20%; padding-right:15%; font-size:1.2em;">
	It's that time of year again: the weather is getting chillier, the days are getting 
	shorter, and there's nothing better than snuggling up and getting a good read. Even 
	if you haven't picked up a book since The Fourth of July, fear not; we've gone 
	through all the best titles and come up with a few best sellers	that will keep you 
	entertained. Happy reading!
</p>

<?php
	$link = mysqli_connect("localhost", "root", "", "geek_text");
	$sql = "SELECT * FROM books ORDER BY rating DESC LIMIT 10";
	$result=mysqli_query($link, $sql);
	while( $row=mysqli_fetch_array($result) ) {
		echo'<a class="ai" href=""><figure><img class="imgi" src="images/'. $row["id"] . '.png" alt=""><figcaption>' . $row["title"] . '</figcaption>
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
		echo'</figcaption></figure></a>';
	}
	echo"</div>";
	mysqli_close($link);
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

<?php include("footer.php");?>

</body>
</html>