<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Account</title>

</head>
<body>

<?php include("header.php");?>

<h2 style="margin-left: 20;">Account Information</h2>

<form name="myForm" action="insert_account.php" method="post">
	<p style="margin-left: 20;"><input type="text" name="id" id="id" placeholder="User ID" required></p>
	<p style="margin-left: 20;"><input type="password" name="pw" id="pw" placeholder="Enter Password" required></p>
	<p style="margin-left: 20;"><input type="text" name="name" id="name" placeholder="Name" required></p>
	<p style="margin-left: 20;"><input type="text" name="nickname" id="nickname" placeholder="Nickname" required></p>
	<p style="margin-left: 20;"><input type="text" name="email" id="email"placeholder="Email" required></p>
	<p style="margin-left: 20;"><input type="text" name="street1" id="street1" placeholder="Street 1" required></p>
	<p style="margin-left: 20;"><input type="text" name="street2" id="street2" placeholder="Street 2" required></p>
	<p style="margin-left: 20;"><input type="text" name="city" id="city" placeholder="City" required></p>
	<!-- <p style="margin-left: 20;"><input type="text" name="state" placeholder="State"></p> -->
	<p style="margin-left: 20;"><label>State</label>
	<select name="state" id="state">
		<option value="AL">AL</option>
		<option value="AK">AK</option>
		<option value="AZ">AZ</option>
		<option value="AR">AR</option>
		<option value="CA">CA</option>
		<option value="CO">CO</option>
		<option value="CT">CT</option>
		<option value="AL">AL</option>
		<option value="DE">DE</option>
		<option value="FL">FL</option>
		<option value="GA">GA</option>
		<option value="HI">HI</option>
		<option value="ID">ID</option>
		<option value="IL">IL</option>
		<option value="IN">IN</option>
		<option value="IA">IA</option>
		<option value="KS">KS</option>
		<option value="KY">KY</option>
		<option value="LA">LA</option>
		<option value="ME">ME</option>
		<option value="MD">MD</option>
		<option value="MA">MA</option>
		<option value="MI">MI</option>
		<option value="MN">MN</option>
		<option value="MS">MS</option>
		<option value="MO">MO</option>
		<option value="MT">MT</option>
		<option value="NE">NE</option>
		<option value="NV">NV</option>
		<option value="NH">NH</option>
		<option value="NJ">NJ</option>
		<option value="NM">NM</option>
		<option value="NY">NY</option>
		<option value="NC">NC</option>
		<option value="ND">ND</option>
		<option value="OH">OH</option>
		<option value="OK">OK</option>
		<option value="OR">OR</option>
		<option value="PA">PA</option>
		<option value="RI">RI</option>
		<option value="SC">SC</option>
		<option value="SD">SD</option>
		<option value="TN">TN</option>
		<option value="TX">TX</option>
		<option value="UT">UT</option>
		<option value="VT">VT</option>
		<option value="VA">VA</option>
		<option value="WA">WA</option>
		<option value="WV">WV</option>
		<option value="WI">WI</option>
		<option value="WY">WY</option>
	</select>

	<p style="margin-left: 20;"><input type="text" name="zip" placeholder="Zip Code" required></p>	
	<p><input style="margin-left: 20;" type="submit" class="btn btn-success" id="create-account" value="Create Account"></p>

</form>


<p style="margin-left:20;">By signing in or creating an account you are agreeing to our 
<a href="./terms.php">Terms of Use</a> and 
our <a href="./privacy.php">Privacy Policy</a>.</p>


</body>
</html>