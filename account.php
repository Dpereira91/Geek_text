<html lang="en">
<head>
<meta charset="UTF-8">
<title>Account</title>
</head>
<body>

<?php include("header.php");?>

<h2 style="margin-left: 20;">Account Information</h2>

<form action="update_profile.php" method="post">
	<img src="default_avatar.jpg" border="1px" style="width:150px;height:150px; margin-left: 20;">
	<p style="margin-left: 20;"><input type="text" name="id" placeholder="Nickname"></p>
	
	<h3 style="margin-left: 20;">Shipping / Billing Address</h3>
	
    <p style="margin-left: 20;"><input type="text" name="street" placeholder="Street Address"></p>
    <p style="margin-left: 20;"><input type="text" name="city" placeholder="City"></p>
    <p style="margin-left: 20;"><input type="text" name="state" placeholder="State Abbreviation"></p>
	<p style="margin-left: 20;"><input type="text" name="zip" placeholder="Zip Code"></p>
	
	<h3 style="margin-left: 20;">Credit Card Inofrmation</h3>
	
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
	<input style="margin-left: 20;" type="submit" value="Save Changes">
</form>

</body>
</html>