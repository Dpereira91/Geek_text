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
		include("display_book_helper.php");
	}
	echo"</div>";
	mysqli_close($link);
	
	include("footer.php");
?>

<style>
	<?php include("style.css"); ?>
</style>

</body>
</html>