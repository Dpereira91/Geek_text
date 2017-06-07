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
	<?php
		if($row['avatar'] == '0'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/avatar.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '1'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/avatar1.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '2'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/avatar2.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '3'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/avatar3.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '4'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/ow.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '5'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/ow1.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '6'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/ow2.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '7'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/ow3.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '8'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/ow4.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '9'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/ow5.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '10'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/ow6.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '11'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/ow7.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
	?>

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
		<label>Preferred</label>
	</p>
	
	<?php while( $row = mysqli_fetch_array( $result1 ) ){ ?>
    <p style="margin-left: 20;">
		<input type="text" value="<?php echo( htmlspecialchars( $row['street1'] ) ); ?>" placeholder="Street Address">
		<input type="text" value="<?php echo( htmlspecialchars( $row['city'] ) ); ?>" placeholder="City">
		<input type="text" value="<?php echo( htmlspecialchars( $row['state'] ) ); ?>" placeholder="State Abbreviation">
		<input type="text" value="<?php echo( htmlspecialchars( $row['zip_code'] ) ); ?>" placeholder="Zip Code">
	</p>
	<?php } ?>
	
	<input style="margin-left: 20;" type="submit" value="Save Changes">
</form>

<form action="add_address.php" method="post">
	<p style="margin-left: 20;">
		<input type="text" name="street" placeholder="Street Address">
		<input type="text" name="city" placeholder="City">
		<input type="text" name="state" placeholder="State Abbreviation">
		<input type="text" name="zip" placeholder="Zip Code">
		<input style="margin-left: 20;" type="submit" value="Add Address">
	</p>
</form>

</body>
</html>