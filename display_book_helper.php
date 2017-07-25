
<?php
echo'<a class="ai" href=""><input type="hidden" value="' . htmlspecialchars( $row['published_year']) . '" name="pubDate">
<figure>
	<img class="imgi" src="images/'. $row["id"] . '.png" alt="">
	<figcaption>' . $row["title"] . '</figcaption>
	<figcaption>$' . $row["price"] . '</figcaption>
    <button value=' .$row["id"]. ' class="btn btn-success" name="addtocart_btn" >Add to Cart</button>
	<form name="new_cart_item" action="add_to_cart.php" method="post" style="display:none;"></form>
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