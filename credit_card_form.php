<!-- This form is used to add a new credir card for the customer. It's used from account.php file -->

	<p style="margin-left: 20;"><input type="text" name="card_num" placeholder="Credit Card Number"></p>
	<p style="margin-left: 20;"><input type="text" name="cvv_num" placeholder="CVV Number"></p>
	<p style="margin-left: 20;">
	<p style="margin-left: 20;"><input type="text" name="card_street" placeholder="Street Address"></p>
	<p style="margin-left: 20;"><input type="text" name="card_city" placeholder="City"></p>
	<!-- <p style="margin-left: 20;"><input type="text" name="card_state" placeholder="State Abbreviation"></p> -->


	<p style="margin-left: 20;"><label>State</label>
	<select name="card_state">
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


	<p style="margin-left: 20;"><input type="text" name="card_zip" placeholder="Zip Code"></p>
	</p>
		<p style="margin-left: 20;"><label>Credit Card Type:</label>
		<select name="card_type">
			<option value="Visa">Visa</option>
			<option value="MasterCard">MasterCard</option>
			<option value="AmericanExpress">American Express</option>
		</select>


	<p style="margin-left: 20;"><label>Expiration:</label>
		<select name="exp_month">
			<option value="1">01</option>
			<option value="2">02</option>
			<option value="3">03</option>
			<option value="4">04</option>
			<option value="5">05</option>
			<option value="6">06</option>
			<option value="7">07</option>
			<option value="8">08</option>
			<option value="9">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select>


		<!-- Expiration year set to 10 years from current calendar year -->
		<select name="exp_year">
			<?php $year = date("Y"); ?> 
			<option value=<?php echo $year    ; ?>><?php echo $year    ;?></option>
			<option value=<?php echo $year + 1; ?>><?php echo $year + 1;?></option>
			<option value=<?php echo $year + 2; ?>><?php echo $year + 2;?></option>
			<option value=<?php echo $year + 3; ?>><?php echo $year + 3;?></option>
			<option value=<?php echo $year + 4; ?>><?php echo $year + 4;?></option>
			<option value=<?php echo $year + 5; ?>><?php echo $year + 5;?></option>
			<option value=<?php echo $year + 6; ?>><?php echo $year + 6;?></option>
			<option value=<?php echo $year + 7; ?>><?php echo $year + 7;?></option>
			<option value=<?php echo $year + 8; ?>><?php echo $year + 8;?></option>
			<option value=<?php echo $year + 9; ?>><?php echo $year + 9;?></option>
			<option value=<?php echo $year + 10; ?>><?php echo $year + 10;?></option> 
		</select>
	<p><input style="margin-left: 20;  display:none;" id="addNewCreditCard" type="submit" class="btn btn-success" value="Add"></p>
	</p>
</form>