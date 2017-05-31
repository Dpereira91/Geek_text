<html lang="en">
<head>
<meta charset="UTF-8">
<title>Account</title>
</head>
<body>

<?php
	include("header.php");
	$link = mysqli_connect("localhost", "root", "", "geek_text");
	$id = $_SESSION['username'];
	
	$sql = "SELECT * FROM user WHERE id='$id'";
	$result=mysqli_query($link, $sql);
		
	$row = mysqli_fetch_array( $result );
?>

<h2 style="margin-left: 20;">Account Information</h2>

<form action="update_profile.php" method="post">
	<img src="default_avatar.jpg" border="1px" style="width:150px;height:150px; margin-left: 20;">

	<p style="margin-left: 20;"><input name="nickname" type="text" value="<?php echo( htmlspecialchars( $row['nickname'] ) ); ?>" placeholder="Nickname"/></p>
	<p style="margin-left: 20;"><input name="email" type="text" value="<?php echo( htmlspecialchars( $row['email'] ) ); ?>" placeholder="email"/></p>
	
	<h3 style="margin-left: 20;">Credit Card Information</h3>
	
	<p style="margin-left: 20;"><input type="text" name="card_num" placeholder="Credit Card Number"></p>
	<p style="margin-left: 20;"><input type="text" name="cvv_num" placeholder="CVV Number"></p>
	<p style="margin-left: 20;"><label>Expiration:</label>
		<select>
			<option value="month"> </option>
			<option value="month">1</option>
			<option value="month">2</option>
			<option value="month">3</option>
			<option value="month">4</option>
			<option value="month">5</option>
			<option value="month">6</option>
			<option value="month">7</option>
			<option value="month">8</option>
			<option value="month">9</option>
			<option value="month">10</option>
			<option value="month">11</option>
			<option value="month">12</option>
		</select>
		<select>
			<option value="year"> </option>
			<option value="year">18</option>
			<option value="year">19</option>
			<option value="year">20</option>
			<option value="year">21</option>
			<option value="year">22</option>
			<option value="year">23</option>
			<option value="year">24</option>
			<option value="year">25</option>
			<option value="year">26</option>
		</select>
	</p>
	
	<h3 style="margin-left: 20;">Shipping / Billing Address</h3>
	
	<?php
		$sql = "SELECT * FROM shipping WHERE id='$id'";
		$result1 = mysqli_query($link, $sql);
		$row1 = mysqli_fetch_array( $result1 );
	?>
	
	<p style="margin-left: 20;">
		<input type="text" value="<?php echo( htmlspecialchars( $row1['street1'] ) ); ?>" name="street" placeholder="Street Address">
		<input type="text" value="<?php echo( htmlspecialchars( $row1['city'] ) ); ?>" name="city" placeholder="City">
		<input type="text" value="<?php echo( htmlspecialchars( $row1['state'] ) ); ?>" name="state" placeholder="State Abbreviation">
		<input type="text" value="<?php echo( htmlspecialchars( $row1['zip_code'] ) ); ?>" name="zip" placeholder="Zip Code">
		<input type="radio" name="preferred"><br>
	</p>
	
	<?php while( $row = mysqli_fetch_array( $result ) ){ ?>
    <p style="margin-left: 20;">
		<input type="text" value="<?php echo( htmlspecialchars( $row1['street1'] ) ); ?>" name="street" placeholder="Street Address">
		<input type="text" value="<?php echo( htmlspecialchars( $row1['city'] ) ); ?>" name="city" placeholder="City">
		<input type="text" value="<?php echo( htmlspecialchars( $row1['state'] ) ); ?>" name="state" placeholder="State Abbreviation">
		<input type="text" value="<?php echo( htmlspecialchars( $row1['zip_code'] ) ); ?>" name="zip" placeholder="Zip Code">
		<!-- <input type="radio" name="preferred"><br> -->
	</p>
	<?php } ?>
	
	<input style="margin-left: 20;" type="submit" value="Save Changes">
</form>

</body>
</html>