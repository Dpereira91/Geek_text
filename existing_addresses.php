<div class="container">        
  <table id="address_table" class="table table-striped">
    <thead>
      <tr>
        <th class="fit">Street Address</th>
        <th class="fit">City</th>
        <th class="fit">State
        <th class="fit">Zip Code</th>
        <th class="fit hidden-element"></th>
        <th class="fit">Preferred</th>
      </tr>
    </thead>
    <tbody>
      <!--Use a while loop to make a table row for every DB row-->
      <?php while( $row = mysqli_fetch_array( $result1 ) ){ ?>
       <form action="update_address.php" method="post">
      <tr> 
          <td class="fit"><input type="text" value="<?php echo( htmlspecialchars( $row['street1'] ) ); ?>" name="street" placeholder="Street Address"></td>
          <td class="fit"><input type="text" value="<?php echo( htmlspecialchars( $row['city'] ) ); ?>" name="city" placeholder="City"></td>
          <!-- <td class="fit"><input type="text" value="<?php echo( htmlspecialchars( $row['state'] ) ); ?>" name="state" placeholder="State Abbreviation"></td> -->
        <td>
          <select class="fit" name="state">
            <option value="AL" <?php if($row['state']=="AL") { ?> selected <?php } ?>>AL</option>
            <option value="AK" <?php if($row['state']=="AK") { ?> selected <?php } ?>>AK</option>
            <option value="AZ" <?php if($row['state']=="AZ") { ?> selected <?php } ?>>AZ</option>
            <option value="AR" <?php if($row['state']=="AR") { ?> selected <?php } ?>>AR</option>
            <option value="CA" <?php if($row['state']=="CA") { ?> selected <?php } ?>>CA</option>
            <option value="CO" <?php if($row['state']=="CO") { ?> selected <?php } ?>>CO</option>
            <option value="CT" <?php if($row['state']=="CT") { ?> selected <?php } ?>>CT</option>
            <option value="DC" <?php if($row['state']=="DC") { ?> selected <?php } ?>>DC</option>
            <option value="DE" <?php if($row['state']=="DE") { ?> selected <?php } ?>>DE</option>
            <option value="FL" <?php if($row['state']=="FL") { ?> selected <?php } ?>>FL</option>
            <option value="GA" <?php if($row['state']=="GA") { ?> selected <?php } ?>>GA</option>
            <option value="HI" <?php if($row['state']=="HI") { ?> selected <?php } ?>>HI</option>
            <option value="ID" <?php if($row['state']=="ID") { ?> selected <?php } ?>>ID</option>
            <option value="IL" <?php if($row['state']=="IL") { ?> selected <?php } ?>>IL</option>
            <option value="IN" <?php if($row['state']=="IN") { ?> selected <?php } ?>>IN</option>
            <option value="IA" <?php if($row['state']=="IA") { ?> selected <?php } ?>>IA</option>
            <option value="KS" <?php if($row['state']=="KS") { ?> selected <?php } ?>>KS</option>
            <option value="KY" <?php if($row['state']=="KY") { ?> selected <?php } ?>>KY</option>
            <option value="LA" <?php if($row['state']=="LA") { ?> selected <?php } ?>>LA</option>
            <option value="ME" <?php if($row['state']=="ME") { ?> selected <?php } ?>>ME</option>
            <option value="MD" <?php if($row['state']=="MD") { ?> selected <?php } ?>>MD</option>
            <option value="MA" <?php if($row['state']=="MA") { ?> selected <?php } ?>>MA</option>
            <option value="MI" <?php if($row['state']=="MI") { ?> selected <?php } ?>>MI</option>
            <option value="MN" <?php if($row['state']=="MN") { ?> selected <?php } ?>>MN</option>
            <option value="MS" <?php if($row['state']=="MS") { ?> selected <?php } ?>>MS</option>
            <option value="MO" <?php if($row['state']=="MD") { ?> selected <?php } ?>>MO</option>
            <option value="MT" <?php if($row['state']=="MT") { ?> selected <?php } ?>>MT</option>
            <option value="NE" <?php if($row['state']=="NE") { ?> selected <?php } ?>>NE</option>
            <option value="NV" <?php if($row['state']=="NV") { ?> selected <?php } ?>>NV</option>
            <option value="NH" <?php if($row['state']=="NH") { ?> selected <?php } ?>>NH</option>
            <option value="NJ" <?php if($row['state']=="NJ") { ?> selected <?php } ?>>NJ</option>
            <option value="NM" <?php if($row['state']=="NM") { ?> selected <?php } ?>>NM</option>
            <option value="NY" <?php if($row['state']=="NY") { ?> selected <?php } ?>>NY</option>
            <option value="NC" <?php if($row['state']=="NC") { ?> selected <?php } ?>>NC</option>
            <option value="ND" <?php if($row['state']=="ND") { ?> selected <?php } ?>>ND</option>
            <option value="OH" <?php if($row['state']=="OH") { ?> selected <?php } ?>>OH</option>
            <option value="OK" <?php if($row['state']=="OK") { ?> selected <?php } ?>>OK</option>
            <option value="OR" <?php if($row['state']=="OR") { ?> selected <?php } ?>>OR</option>
            <option value="PA" <?php if($row['state']=="PA") { ?> selected <?php } ?>>PA</option>
            <option value="RI" <?php if($row['state']=="RI") { ?> selected <?php } ?>>RI</option>
            <option value="SC" <?php if($row['state']=="SC") { ?> selected <?php } ?>>SC</option>
            <option value="SD" <?php if($row['state']=="SD") { ?> selected <?php } ?>>SD</option>
            <option value="TN" <?php if($row['state']=="TN") { ?> selected <?php } ?>>TN</option>
            <option value="TX" <?php if($row['state']=="TX") { ?> selected <?php } ?>>TX</option>
            <option value="UT" <?php if($row['state']=="UT") { ?> selected <?php } ?>>UT</option>
            <option value="VT" <?php if($row['state']=="VT") { ?> selected <?php } ?>>VT</option>
            <option value="VA" <?php if($row['state']=="VA") { ?> selected <?php } ?>>VA</option>
            <option value="WA" <?php if($row['state']=="WA") { ?> selected <?php } ?>>WA</option>
            <option value="WV" <?php if($row['state']=="WV") { ?> selected <?php } ?>>WV</option>
            <option value="WI" <?php if($row['state']=="WI") { ?> selected <?php } ?>>WI</option>
            <option value="WY" <?php if($row['state']=="WY") { ?> selected <?php } ?>>WY</option>
          </select>
        </td>
          <td class="fit"><input type="number" size="5" maxlenght="5" value="<?php echo( htmlspecialchars( $row['zip_code'] ) ); ?>" name="zip" placeholder="Zip Code"></td>
          <td class="fit hidden-element"><input type="hidden" value="<?php echo (htmlspecialchars( $row['address_id']) ); ?>" name="addressId" placeholder="Address ID"></td>
          <td class="fit"><input type="radio" name="preferred" class="preferred-address" value="<?php echo htmlspecialchars($row['preferred']); ?>" 

	        	<?php 
	        		$pref = htmlspecialchars($row['preferred']) ;
	        		if($pref == "1") {
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
