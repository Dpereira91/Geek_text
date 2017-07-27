
<div class="container">        
  <table id="card_table" class="table table-striped">
    <thead>
      <tr>
        <th class="fit">Number</th>
        <th class="fit">Type</th>
        <th class="fit">CSV Code</th>
        <th class="fit">Exp Month</th>
        <th class="fit">Exp Year</th>
        <th class="fit">Street</th>
        <th class="fit">City</th>
        <th class="fit">State</th>
        <th class="fit">Zip Code</th>
        <th class="fit">Preferred</th>
      </tr>
    </thead>
    <tbody>
      <!--Use a while loop to make a table row for every DB row-->
      <?php while( $row = mysqli_fetch_array( $result2 ) ){ ?>
       <form action="update_card.php" method="post">
      <tr> 
	        <td class="fit"><input type="number"  name="card_num" size="19" maxlenght="19" value="<?php echo htmlspecialchars($row['number']); ?>" required></td>
	        <td class="fit">
	        <select name="card_type">
				<option value="Visa" <?php if($row['type']=="Visa") { ?> selected <?php } ?>>Visa</option>
				<option value="MasterCard" <?php if($row['type']=="MasterCard") { ?> selected <?php } ?>>MasterCard</option>
				<option value="AmericanExpress" <?php if($row['type']=="AmericanExpress") { ?> selected <?php } ?>>American Express</option>
			</select>
	        </td>
	        <td class="fit"><input type="number"  name="cvv_num" size="4" maxlenght="4"value="<?php echo htmlspecialchars($row['csv_code']); ?>" required></td>
	        <td class="fit">
	        <select name="exp_month">
				<option value="1" <?php if($row['exp_month']=="01") { ?> selected <?php } ?>>01</option>
				<option value="2" <?php if($row['exp_month']=="02") { ?> selected <?php } ?>>02</option>
				<option value="3" <?php if($row['exp_month']=="03") { ?> selected <?php } ?>>03</option>
				<option value="4" <?php if($row['exp_month']=="04") { ?> selected <?php } ?>>04</option>
				<option value="5" <?php if($row['exp_month']=="05") { ?> selected <?php } ?>>05</option>
				<option value="6" <?php if($row['exp_month']=="06") { ?> selected <?php } ?>>06</option>
				<option value="7" <?php if($row['exp_month']=="07") { ?> selected <?php } ?>>07</option>
				<option value="8" <?php if($row['exp_month']=="08") { ?> selected <?php } ?>>08</option>
				<option value="9" <?php if($row['exp_month']=="09") { ?> selected <?php } ?>>09</option>
				<option value="10" <?php if($row['exp_month']=="10") { ?> selected <?php } ?>>10</option>
				<option value="11" <?php if($row['exp_month']=="11") { ?> selected <?php } ?>>11</option>
				<option value="12" <?php if($row['exp_month']=="12") { ?> selected <?php } ?>>12</option>
			</select>
	        </td>

	        <td class="fit"><input type="number"  name="exp_year" size="4" maxlenght="4"value="<?php echo htmlspecialchars($row['exp_year']); ?>" required></td>
	        <td class="fit"><input type="text"  name="card_street" value="<?php echo htmlspecialchars($row['billing_street1']); ?>" required></td>
	        <td class="fit"><input type="text"  name="card_city" value="<?php echo htmlspecialchars($row['billing_city']); ?>" required></td>
	        <td class="fit">
	        <select name="card_state">
				<option value="AL" <?php if($row['billing_state']=="AL") { ?> selected <?php } ?>>AL</option>
				<option value="AK" <?php if($row['billing_state']=="AK") { ?> selected <?php } ?>>AK</option>
				<option value="AZ" <?php if($row['billing_state']=="AZ") { ?> selected <?php } ?>>AZ</option>
				<option value="AR" <?php if($row['billing_state']=="AR") { ?> selected <?php } ?>>AR</option>
				<option value="CA" <?php if($row['billing_state']=="CA") { ?> selected <?php } ?>>CA</option>
				<option value="CO" <?php if($row['billing_state']=="CO") { ?> selected <?php } ?>>CO</option>
				<option value="CT" <?php if($row['billing_state']=="CT") { ?> selected <?php } ?>>CT</option>
				<option value="DC" <?php if($row['billing_state']=="DC") { ?> selected <?php } ?>>DC</option>
				<option value="DE" <?php if($row['billing_state']=="DE") { ?> selected <?php } ?>>DE</option>
				<option value="FL" <?php if($row['billing_state']=="FL") { ?> selected <?php } ?>>FL</option>
				<option value="GA" <?php if($row['billing_state']=="GA") { ?> selected <?php } ?>>GA</option>
				<option value="HI" <?php if($row['billing_state']=="HI") { ?> selected <?php } ?>>HI</option>
				<option value="ID" <?php if($row['billing_state']=="ID") { ?> selected <?php } ?>>ID</option>
				<option value="IL" <?php if($row['billing_state']=="IL") { ?> selected <?php } ?>>IL</option>
				<option value="IN" <?php if($row['billing_state']=="IN") { ?> selected <?php } ?>>IN</option>
				<option value="IA" <?php if($row['billing_state']=="IA") { ?> selected <?php } ?>>IA</option>
				<option value="KS" <?php if($row['billing_state']=="KS") { ?> selected <?php } ?>>KS</option>
				<option value="KY" <?php if($row['billing_state']=="KY") { ?> selected <?php } ?>>KY</option>
				<option value="LA" <?php if($row['billing_state']=="LA") { ?> selected <?php } ?>>LA</option>
				<option value="ME" <?php if($row['billing_state']=="ME") { ?> selected <?php } ?>>ME</option>
				<option value="MD" <?php if($row['billing_state']=="MD") { ?> selected <?php } ?>>MD</option>
				<option value="MA" <?php if($row['billing_state']=="MA") { ?> selected <?php } ?>>MA</option>
				<option value="MI" <?php if($row['billing_state']=="MI") { ?> selected <?php } ?>>MI</option>
				<option value="MN" <?php if($row['billing_state']=="MN") { ?> selected <?php } ?>>MN</option>
				<option value="MS" <?php if($row['billing_state']=="MS") { ?> selected <?php } ?>>MS</option>
				<option value="MO" <?php if($row['billing_state']=="MD") { ?> selected <?php } ?>>MO</option>
				<option value="MT" <?php if($row['billing_state']=="MT") { ?> selected <?php } ?>>MT</option>
				<option value="NE" <?php if($row['billing_state']=="NE") { ?> selected <?php } ?>>NE</option>
				<option value="NV" <?php if($row['billing_state']=="NV") { ?> selected <?php } ?>>NV</option>
				<option value="NH" <?php if($row['billing_state']=="NH") { ?> selected <?php } ?>>NH</option>
				<option value="NJ" <?php if($row['billing_state']=="NJ") { ?> selected <?php } ?>>NJ</option>
				<option value="NM" <?php if($row['billing_state']=="NM") { ?> selected <?php } ?>>NM</option>
				<option value="NY" <?php if($row['billing_state']=="NY") { ?> selected <?php } ?>>NY</option>
				<option value="NC" <?php if($row['billing_state']=="NC") { ?> selected <?php } ?>>NC</option>
				<option value="ND" <?php if($row['billing_state']=="ND") { ?> selected <?php } ?>>ND</option>
				<option value="OH" <?php if($row['billing_state']=="OH") { ?> selected <?php } ?>>OH</option>
				<option value="OK" <?php if($row['billing_state']=="OK") { ?> selected <?php } ?>>OK</option>
				<option value="OR" <?php if($row['billing_state']=="OR") { ?> selected <?php } ?>>OR</option>
				<option value="PA" <?php if($row['billing_state']=="PA") { ?> selected <?php } ?>>PA</option>
				<option value="RI" <?php if($row['billing_state']=="RI") { ?> selected <?php } ?>>RI</option>
				<option value="SC" <?php if($row['billing_state']=="SC") { ?> selected <?php } ?>>SC</option>
				<option value="SD" <?php if($row['billing_state']=="SD") { ?> selected <?php } ?>>SD</option>
				<option value="TN" <?php if($row['billing_state']=="TN") { ?> selected <?php } ?>>TN</option>
				<option value="TX" <?php if($row['billing_state']=="TX") { ?> selected <?php } ?>>TX</option>
				<option value="UT" <?php if($row['billing_state']=="UT") { ?> selected <?php } ?>>UT</option>
				<option value="VT" <?php if($row['billing_state']=="VT") { ?> selected <?php } ?>>VT</option>
				<option value="VA" <?php if($row['billing_state']=="VA") { ?> selected <?php } ?>>VA</option>
				<option value="WA" <?php if($row['billing_state']=="WA") { ?> selected <?php } ?>>WA</option>
				<option value="WV" <?php if($row['billing_state']=="WV") { ?> selected <?php } ?>>WV</option>
				<option value="WI" <?php if($row['billing_state']=="WI") { ?> selected <?php } ?>>WI</option>
				<option value="WY" <?php if($row['billing_state']=="WY") { ?> selected <?php } ?>>WY</option>
			</select>
	        </td>
	        <td class="fit"><input type="number"  name="card_zip" size="5" maxlenght="5" value="<?php echo htmlspecialchars($row['billing_zip_code']); ?>" required></td>
	        <td class="fit"><input type="radio" name="preferred" class="preferred-select" value="<?php echo htmlspecialchars($row['preferred']); ?>" 
                                                                      
	        	<?php 
	        		$pref = htmlspecialchars($row['preferred']) ;
	        		if($pref == "Y") {
	        			echo "checked" ;}
	        	?>>

          </td>

	        <td><input type="submit" name="action" value="save"   class="btn btn-success"></td>
	        <td><input type="submit" name="action" value="remove" class="btn btn-danger"></td>
	        <br>	
      </tr>
       </form>
      <?php } ?> 
    </tbody>
  </table>
</div>

