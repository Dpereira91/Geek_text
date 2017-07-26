
<?php
echo'<a class="ai" style="text-decoration:none;">
<input type="hidden" value="' . htmlspecialchars( $row['published_year']) . '" name="pubDate">
<figure>
	<form action="book_details.php" method="get">
	<button class="imgi" type="submit" value=' .$row["id"]. ' style="background: url(images/'. $row["id"] . '.png); background-size: 100% 100%; height:300px; width:200px;" name="bookid"></button>
	</form>
	<figcaption>' . $row["title"] . '</figcaption>
	<figcaption>$' . $row["price"] . '</figcaption>
	<figcaption>';
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
?>