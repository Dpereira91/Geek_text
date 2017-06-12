<!-- This form is used to add a new credir card for the customer. It's used from account.php file -->



<form id="enterNewCard" action="add_card.php" method="post" style="display:none;">
	<h5 style="margin-left: 20;"> New Card Details</h5>
	<p style="margin-left: 20;"><input type="text" name="card_num" placeholder="Credit Card Number"></p>
	<p style="margin-left: 20;"><input type="text" name="cvv_num" placeholder="CVV Number"></p>
	<p style="margin-left: 20;">
	<p style="margin-left: 20;"><input type="text" name="card_street" placeholder="Street Address"></p>
	<p style="margin-left: 20;"><input type="text" name="card_city" placeholder="City"></p>
	<p style="margin-left: 20;"><input type="text" name="card_state" placeholder="State Abbreviation"></p>
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

		<p><input style="margin-left: 20;" type="submit" class="btn btn-success" value="Add"></p>
	</p>
</form>